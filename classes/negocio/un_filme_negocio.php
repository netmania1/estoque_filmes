<?php
/*
	'***********************************************************************************************
	' EMPRESA             : Netmania Sistemas
	' SISTEMA             : Estoque de Filmes
	' CLASSE              : clsFilmeNegocio
	' ANALISTA            : Otacílio Ribeiro
	' PROGRAMADOR         : Otacílio Ribeiro
	' DATA DE CRIAÇÃO     : 11/03/2025
	' DATA DE ALTERAÇÃO   : 
	' OBSERVAÇÕES         : Classe de negócios dos filmes
	'***********************************************************************************************
*/
class clsFilme extends clsMestreNegocio{

    //Atributos da classe
	private $nmFilme;

    //Construtor da classe
    public function __construct(){

        //Inicializa as variáveis
        $this->nmFilme = "";

    }

    //Setters
	public function setnmFilme	($vData){ $this->nmFilme	= $vData; }

    //Getters
	public function getnmFilme	(){ return $this->nmFilme;	}
}
?>