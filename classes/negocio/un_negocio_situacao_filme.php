<?php
/*
	'***********************************************************************************************
	' EMPRESA             : Netmania Sistemas
	' SISTEMA             : Estoque de Filmes
	' CLASSE              : clsNegocioSituacaoFilme
	' ANALISTA            : Otacílio Ribeiro
	' PROGRAMADOR         : Otacílio Ribeiro
	' DATA DE CRIAÇÃO     : 11/03/2025
	' OBSERVAÇÕES         : Classe de negócios da situação do uso dos filmes
	'***********************************************************************************************
*/
class clsNegocioSituacaoFilme extends clsMestreNegocio{

    //Atributos da classe
	private $dsSituacaoFilme;

    //Construtor da classe
    public function __construct(){

        //Inicializa as variáveis
        $this->dsSituacaoFilme = "";

    }

    //Setters
	public function setdsSituacaoFilme	($vData){ $this->dsSituacaoFilme	= $vData; }

    //Getters
	public function getdsSituacaoFilme	(){ return $this->dsSituacaoFilme;	}

}
?>