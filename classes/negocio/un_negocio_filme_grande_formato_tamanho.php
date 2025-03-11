<?php
/*
	'***********************************************************************************************
	' EMPRESA             : Netmania Sistemas
	' SISTEMA             : Estoque de Filmes
	' CLASSE              : clsNegocioFilmeGrandeFormatoTamanho
	' ANALISTA            : Otacílio Ribeiro
	' PROGRAMADOR         : Otacílio Ribeiro
	' DATA DE CRIAÇÃO     : 11/03/2025
	' DATA DE ALTERAÇÃO   : 
	' OBSERVAÇÕES         : Classe de negócios dos tamanho dos filmes de grande formato
	'***********************************************************************************************
*/
class clsNegocioFilmeGrandeFormatoTamanho extends clsMestreNegocio{

    //Atributos da classe
	private $vlGrandeFormatoTamanho;

    //Construtor da classe
    public function __construct(){

        //Inicializa as variáveis
        $this->vlGrandeFormatoTamanho = "";

    }

    //Setters
	public function setvlGrandeFormatoTamanho	($vData){ $this->vlGrandeFormatoTamanho	= $vData; }

    //Getters
	public function getvlGrandeFormatoTamanho	(){ return $this->vlGrandeFormatoTamanho;	}

}
?>