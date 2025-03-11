<?php
/*
	'***********************************************************************************************
	' EMPRESA             : Netmania Sistemas
	' SISTEMA             : Estoque de Filmes
	' CLASSE              : clsTipoFilme
	' ANALISTA            : Otacílio Ribeiro
	' PROGRAMADOR         : Otacílio Ribeiro
	' DATA DE CRIAÇÃO     : 11/03/2025
	' DATA DE ALTERAÇÃO   : 
	' OBSERVAÇÕES         : Classe de negócios dos tipo de filmes
	'***********************************************************************************************
*/
class clsTipoFilme extends clsMestreNegocio{

    //Atributos da classe
	private $dsTipoFilme;

    //Construtor da classe
    public function __construct(){

        //Inicializa as variáveis
        $this->dsTipoFilme = "";

    }

    //Setters
	public function setdsTipoFilme	($vData){ $this->dsTipoFilme    = $vData; }

    //Getters
	public function getdsTipoFilme	(){ return $this->dsTipoFilme;	}
?>