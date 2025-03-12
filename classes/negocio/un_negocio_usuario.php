<?php
/*
	'***********************************************************************************************
	' EMPRESA             : Netmania Sistemas
	' SISTEMA             : Estoque de Filmes
	' CLASSE              : clsNegocioUsuario
	' ANALISTA            : Otacílio Ribeiro
	' PROGRAMADOR         : Otacílio Ribeiro
	' DATA DE CRIAÇÃO     : 12/03/2025
	' OBSERVAÇÕES         : Classe de negócios dos filmes
	'***********************************************************************************************
*/
class clsNegocioUsuario extends clsMestreNegocio{

    //Atributos da classe
	private $nmUsuario;
	private $teLogin;
	private $teSenha;
	private $boAdmin;
	private $boAtivo;

    //Construtor da classe
    public function __construct(){

        //Inicializa as variáveis
		$this->nmUsuario	= "";
		$this->teLogin		= "";
        $this->teSenha		= "";
        $this->boAdmin		= False;
        $this->boAtivo		= False;

    }

    //Setters
	public function setnmUsuario	($vData){ $this->nmUsuario	= $vData; }
	public function setteLogin		($vData){ $this->teLogin	= $vData; }
	public function setteSenha		($vData){ $this->teSenha	= $vData; }
	public function setboAdmin		($vData){ $this->boAdmin	= $vData; }
	public function setboAtivo		($vData){ $this->boAtivo	= $vData; }

    //Getters
	public function getnmUsuario	(){ return $this->nmUsuario;	}
	public function getteLogin		(){ return $this->teLogin;		}
	public function getteSenha		(){ return $this->teSenha;		}
	public function getboAdmin		(){ return $this->boAdmin;		}
	public function getboAtivo		(){ return $this->boAtivo;		}

}
?>