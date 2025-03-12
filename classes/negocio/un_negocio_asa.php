<?php
/*
	'***********************************************************************************************
	' EMPRESA             : Netmania Sistemas
	' SISTEMA             : Estoque de Filmes
	' CLASSE              : clsNegocioAsa
	' ANALISTA            : Otacílio Ribeiro
	' PROGRAMADOR         : Otacílio Ribeiro
	' DATA DE CRIAÇÃO     : 11/03/2025
	' OBSERVAÇÕES         : Classe de negócios da sentibiliadde (ASA/ISO) do filme
	'***********************************************************************************************
*/
class clsNegocioAsa extends clsMestreNegocio{

    //Atributos da classe
	private $vlAsa;
	private $nrSequencia;

    //Construtor da classe
    public function __construct(){

        //Inicializa as variáveis
        $this->vlAsa        = "";
        $this->nrSequencia  = 0;

    }

    //Setters
	public function setvlAsa        ($vData){ $this->vlAsa          = $vData; }
    public function setnrSequencia  ($vData){ $this->nrSequencia    = $vData; }

    //Getters
	public function getvlAsa        (){ return $this->getvlAsa;     }
    public function getnrSequencia  (){ return $this->nrSequencia;  }

}
?>