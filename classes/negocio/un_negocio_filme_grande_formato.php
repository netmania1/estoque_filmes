<?php
/*
	'***********************************************************************************************
	' EMPRESA             : Netmania Sistemas
	' SISTEMA             : Estoque de Filmes
	' CLASSE              : clsNegocioFilmeGrandeFormato
	' ANALISTA            : Otacílio Ribeiro
	' PROGRAMADOR         : Otacílio Ribeiro
	' DATA DE CRIAÇÃO     : 11/03/2025
	' OBSERVAÇÕES         : Classe de negócios do estoque de filmes de grande formato
	'***********************************************************************************************
*/
class clsNegocioFilmeGrandeFormato extends clsMestreNegocio{

    //Atributos da classe
	private $qtChapas;

    //Construtor da classe
    public function __construct(){

        //Inicializa as variáveis
        $this->qtChapas = 0;

    }

    //Setters
	public function setqtChapas	($vData){ $this->qtChapas	= $vData; }

    //Getters
	public function getqtChapas	(){ return $this->qtChapas;	}

}
?>