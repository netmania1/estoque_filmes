<?php
/*
	'***********************************************************************************************
	' EMPRESA             : Netmania Sistemas
	' SISTEMA             : Estoque de Filmes
	' CLASSE              : clsNegocioFabricante
	' ANALISTA            : Otacílio Ribeiro
	' PROGRAMADOR         : Otacílio Ribeiro
	' DATA DE CRIAÇÃO     : 11/03/2025
	' DATA DE ALTERAÇÃO   : 
	' OBSERVAÇÕES         : Classe de negócios dos fabricantes dos filmes
	'***********************************************************************************************
*/
class clsNegocioFabricante extends clsNegocioMestre{

    //Atributos da classe
	private $nmFabricante;

    //Construtor da classe
    public function __construct(){

        //Inicializa as variáveis
        $this->nmFabricante = "";

    }

    //Setters
	public function setnmFabricante	($vData){ $this->nmFabricante	= $vData; }

    //Getters
	public function getnmFabricante	(){ return $this->nmFabricante;	}

}
?>