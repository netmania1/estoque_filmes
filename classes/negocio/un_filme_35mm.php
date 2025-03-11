<?php
/*
	'***********************************************************************************************
	' EMPRESA             : Netmania Sistemas
	' SISTEMA             : Estoque de Filmes
	' CLASSE              : clsFilme35MmNegocio
	' ANALISTA            : Otacílio Ribeiro
	' PROGRAMADOR         : Otacílio Ribeiro
	' DATA DE CRIAÇÃO     : 11/03/2025
	' DATA DE ALTERAÇÃO   : 
	' OBSERVAÇÕES         : Classe de negócios do estoque de filmes da bitola 35mm
	'***********************************************************************************************
*/
class clsFilme35MmNegocio extends clsMestreNegocio{

    //Atributos da classe
	private $boRebobinado;

    //Construtor da classe
    public function __construct(){

        //Inicializa as variáveis
        $this->boRebobinado = False;

    }

    //Setters
	public function setboRebobinado	($vData){ $this->boRebobinado	= $vData; }

    //Getters
	public function getboRebobinado	(){ return $this->boRebobinado;	}
?>