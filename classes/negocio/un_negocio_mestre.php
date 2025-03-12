<?php
/*
	'***********************************************************************************************
	' EMPRESA             : Netmania Sistemas
	' SISTEMA             : Estoque de Filmes
	' CLASSE              : clsNegocioMestre
	' ANALISTA            : Otacílio Ribeiro
	' PROGRAMADOR         : Otacílio Ribeiro
	' DATA DE CRIAÇÃO     : 11/03/2025
	' OBSERVAÇÕES         : Classe mestres de negócios
	'***********************************************************************************************
*/
class clsNegocioMestre{

    //Atributos da classe
	private $idAsa;
	private $idFabricante;
    private $idFilme;
    private $idEstoque;
    private $dsValidade;
    private $qtEstoque;
    private $boComprado;
    private $idSituacaoFilme;
    private $dsUso;
    private $dsLaboratorio;
    private $dsObservacoes;
    private $qtFotos;
    private $idGrandeFormato;
    private $idTipoFilme;
    private $idUsuario;

    //Construtor da classe
    public function __construct(){

        //Inicializa as variáveis
        $this->idAsa            = 0;
        $this->idFabricante     = 0;
        $this->idFilme          = 0;
        $this->idEstoque        = 0;
        $this->dsValidade       = "00/0000";
        $this->qtEstoque        = 0;
        $this->boComprado       = False;
        $this->idSituacaoFilme  = 0;
        $this->dsUso            = "";
        $this->dsLaboratorio    = "";
        $this->dsObservacoes    = "";
        $this->qtFotos          = 0;
        $this->idGrandeFormato  = 0;
        $this->idTipoFilme      = 0;
        $this->idUsuario        = 0;

    }

    //Setters
	public function setidAsa            ($vData){ $this->idAsa              = $vData; }
    public function setidFabricante     ($vData){ $this->idFabricante       = $vData; }
    public function setidFilme          ($vData){ $this->idFilme	        = $vData; }
    public function setidEstoque        ($vData){ $this->idEstoque          = $vData; }
    public function setdsValidade       ($vData){ $this->dsValidade         = $vData; }
    public function setqtEstoque        ($vData){ $this->qtEstoque          = $vData; }
    public function setboComprado       ($vData){ $this->boComprado         = $vData; }
    public function setidSituacaoFilme  ($vData){ $this->idSituacaoFilme    = $vData; }
    public function setdsUso            ($vData){ $this->dsUso              = $vData; }
    public function setdsLaboratorio    ($vData){ $this->dsLaboratorio      = $vData; }
    public function setdsObservacoes    ($vData){ $this->dsObservacoes      = $vData; }
    public function setqtFotos          ($vData){ $this->qtFotos            = $vData; }
    public function setidGrandeFormato  ($vData){ $this->idGrandeFormato    = $vData; }
    public function setidTipoFilme      ($vData){ $this->idTipoFilme        = $vData; }
    public function setidUsuario        ($vData){ $this->idUsuario          = $vData; }

    //Getters
	public function getidAsa            (){ return $this->idAsa;            }
    public function getidFabricante     (){ return $this->idFabricante;     }
    public function getidFilme          (){ return $this->idFilme;          }
    public function getidEstoque        (){ return $this->idEstoque;        }
    public function getdsValidade       (){ return $this->dsValidade;       }
    public function getqtEstoque        (){ return $this->qtEstoque;        }
    public function getboComprado       (){ return $this->boComprado;       }
    public function getidSituacaoFilme  (){ return $this->idSituacaoFilme;  }
    public function getdsUso            (){ return $this->dsUso;            }
    public function getdsLaboratorio    (){ return $this->dsLaboratorio;    }
    public function getdsObservacoes    (){ return $this->dsObservacoes;    }
    public function getqtFotos          (){ return $this->qtFotos;          }
    public function getidGrandeFormato  (){ return $this->idGrandeFormato;  }
    public function getidTipoFilme      (){ return $this->idTipoFilme;      }
    public function getidUsuario        (){ return $this->idUsuario;        }

}
?>