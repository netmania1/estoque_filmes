<?php
/*
	'***********************************************************************************************
	' EMPRESA             : Netmania Sistemas
	' SISTEMA             : Estoque de Filmes
	' PÁGINA              : clsFuncoes
	' ANALISTA            : Otacílio Ribeiro / Tatiane Sousa
	' PROGRAMADOR         : Otacílio Ribeiro
	' DATA DE CRIAÇÃO     : 24/03/2007
	' OBSERVAÇÕES         : Classe com funções úteis para o sistema
	'***********************************************************************************************
*/
class clsFuncoes{

	//Método para retornar a mensagem de erro e redirecionar o usuário para uma outra página
	public function mostraErroRedireciona($stMensagemErro, $stUrl){

        //Retorna a mensagem de erros
        $stMensagem =  "<script language='JavaScript' type='text/JavaScript'>\n";
        $stMensagem .= "        alert('". $stMensagemErro ."');\n";
        $stMensagem .= "        document.location.href = '". $stUrl ."';\n";
        $stMensagem .= "</script>\n";

        //Retorno
        return $stMensagem;

	}//Fecha o método "mostraErroRedireciona"

    //Método responsável por validar um determinado endereço de e-mail e válido na Internet
    public function validaEmail($stEmail){
        
        //Verifica se o usuário informou algum um endereço com arroba
        if(strpos($stEmail, "@") == 0){ 
            //Caso de erro, retornar mensagem de erro para o usuário
            return "O endereço informado está faltando o \"@\"!";
        } 

        //Recupera os dados do e-mail
        list($stUsuario, $stDominio) = split("@", $stEmail, 2); 

        //Verifica se o endereço de e-mail é válido na Internet (a partir do domínio)
        if(is_array(gethostbynamel($stDominio)) == TRUE){ 
            
            //Não retorna nada, e-mail OK
            return "";
        
        //Caso contrário, retorna mensagem de erro
        }else{ 

            //Mensagem de erro
            return "O domínio \"". $stDominio ."\" não é válido!";

        }

    }//Fecha o método "validaEmail"

	//Método para retornar a mensagem de erro
	public function mostraErroFechaJanela($stMensagemErro){

        //Retorna a mensagem de erros
        $stMensagem =  "<script language='JavaScript' type='text/JavaScript'>\n";
        $stMensagem .= "        alert('". $stMensagemErro ."');\n";
        $stMensagem .= "        window.close();\n";
        $stMensagem .= "</script>\n";

        //Retorno
        return $stMensagem;

	}//Fecha o método "mostraErroRedireciona"

	//Método para exibir mensagem de aviso em formato HTML
	public function mostraMensagemAviso($stMensagem, $boBotaoOk = "", $stUrl = ""){
	
	        //Inicializa a variável
	        $stMsg = "";
	
			//Monta a mensagem de sucesso
			$stMsg .= "<table width='100%' border='0' cellspacing='1' cellpadding='1' class='caixa'>\n";
			$stMsg .= "  <tr><td class='titulo_aviso'>Aviso</td></tr>\n";
			$stMsg .= "  <tr><td>". $stMensagem ."</td></tr>\n";
			
			//Se for solicitado, carrega o botão de redirecionamento
			if($boBotaoOk == TRUE){
			    $stMsg .= "  <tr><td>&nbsp;</td></tr>\n";
			    $stMsg .= "  <tr><td align='center'><input name='btnOK' type='button' value='Continuar' class='botao' onClick='redirecionaPagina(\"". $stUrl ."\")' /></td></tr>\n";
			}
			
			$stMsg .= "</table>\n";

			//Retorno
			return $stMsg;

	}//Fecha o método "mostraMensagemAviso"

	//Método para retornar a mensagem de erro e fechar a janela
	public function mostraErroFecha($stMensagemErro){

        //Retorna a mensagem de erros
        $stMensagem =  "<script language='JavaScript' type='text/JavaScript'>\n";
        $stMensagem .= "        alert('". $stMensagemErro ."');\n";
        $stMensagem .= "        window.close();\n";
        $stMensagem .= "</script>\n";

        //Retorno
        return $stMensagem;

	}//Fecha o método "mostraErroFecha"

    //Método responsável por retirar acentos de uma determinada palavra
    public function retiraAcento($stTexto){

    	$stRetorno = strtr($stTexto, 
	                       "ÁÀÂÃÄáàâãäÉÈÊËéèêëÍÌÏÎíìïîÓÒÔÕÖóòôõöÚÙÜÛúùüûÇç'`´",
	                       "AAAAAaaaaaEEEEeeeeIIIIiiiiOOOOOoooooUUUUuuuuCc");

	    //Retorno
	    return $stRetorno;

    }//Fecha o método "retiraAcenso"

    //Método responsável por substituir os apostrofes para um padrão que o MySQL entenda
    public function converteApostrofe($stTexto){

        //Pega o texto informado e substitui todos os "'" por "\'"
        $stTexto = str_replace("\'", "\'", $stTexto);

        //Retorno do método
        return $stTexto;

    }

}
?>