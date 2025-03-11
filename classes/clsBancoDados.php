<?php
/*
	'***********************************************************************************************
	' EMPRESA             : Netmania Sistemas
	' SISTEMA             : Estoque de Filmes
	' CLASSE              : clsBancoDados
	' ANALISTA            : Otacílio Ribeiro
	' PROGRAMADOR         : Otacílio Ribeiro
	' DATA DE CRIAÇÃO     : 11/03/2025
	' DATA DE ALTERAÇÃO   : 
	' OBSERVAÇÕES         : Classe de acesso a base de dados
	'***********************************************************************************************
*/
class clsBancoDados{

    // Atributos
	protected $host;
	protected $username;
	protected $password;
	protected $connection;
	protected $database;
	protected $mensagemErro;

    // Métodos Construtores
	public function __construct(){

        //Configurações do banco de dados
		$this->host         = "localhost";
		$this->username     = "root";
		$this->password     = "";
		$this->database     = "estoque_filme";
		$this->mensagemErro = "";

	}

    //Setters
    public function setmensagemErro($vData){ $this->mensagemErro = $vData; }

    //Getters
    public function getmensagemErro(){ return $this->mensagemErro; }

	//Conecta com o banco de dados
	public function conecta(){

        //Efetua a conexão com o banco dedados
		$this->connection = mysql_connect($this->host,$this->username,$this->password);

        //Seleciona o banco de dados
		mysql_select_db($this->database, $this->connection);

        //Retorno do método
		return $this->connection;

	}

	public function desconecta(){

        //Fecha conexão com o banco de dados
		mysql_close($this->connection);

	}
	
	public function executaDml($stSql){

	    //Executa o comando DML
		mysql_query($stSql, $this->connection);

		//Se ocorreu algum erro, armazena a mensagem de erro
		if(trim(mysql_error($this->connection)) != ""){

		    //Adiciona a mensagem de erro
		    $this->setmensagemErro("Código: " . mysql_errno($this->connection) . " - Descrição: " .  mysql_error($this->connection));

		}

	}

	//Método responsável por executar consulta que retornem dados
	public function executaSql($stSql){

        //Executa consutla
		$intResultado = mysql_query($stSql, $this->connection);

        //Retorno do método
		return $this->retornaArrayDados($intResultado);

	}

    //Método responsável por retornar um array com os dados
    private function retornaArrayDados($intResultado){

        //Inicializa a variável
        $arRetorno = "";

        //Laço para retornra a matriz de dados
        while($arDados = mysql_fetch_array($intResultado)){
            $arRetorno[] = $arDados;
        }

        //Retorndo do método
        return $arRetorno;

    }

    //Para o controle de transação
    public function iniciarTransacao (){ $this->executaSqlTransacao("begin");    }
    public function efetivarTransacao(){ $this->executaSqlTransacao("commit");   }
    public function desfazerTransacao(){ $this->executaSqlTransacao("rollback"); }

    //Executa os comandos referentes ao controle de transação
    private function executaSqlTransacao($stSql){ 
        mysql_query($stSql, $this->connection);
    }

    public function recuperaUltimoId($stCampo, $stTabela){

        //Ativa a tag para exibir o SQL
	  	$stQuebra = "\n";

        //Inicializa a variável
        $stSql = "";

        //Consulta para retornar o maior código de uma determinada tabela
        $stSql .= "SELECT" . $stQuebra;
        $stSql .= "    MAX(". $stCampo .") AS nr_ultimo" . $stQuebra;
        $stSql .= "FROM" . $stQuebra;
        $stSql .= "    ". $stTabela . $stQuebra;

        //Executa consulta e armazena em um vetor
        $arDados = $this->executaSql($stSql);

        //Retorno do método
        return $arDados[0]["nr_ultimo"];

    }//Fecha o método "recuperaUltimoId"

}
?>