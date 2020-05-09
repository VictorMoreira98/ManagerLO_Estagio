<?php namespace App\Controllers;
use \App\Models\Licenca; 
include_once BASE_PATH . "/config.php";
 
/* Listagem de usuários */ 
class LicencaController {
    public function cadastrarLO() { 
        $nLO = isset($_POST['nLO']) ? $_POST['nLO'] : null;
        $dta = isset($_POST['dtaVenc']) ? $_POST['dtaVenc'] : null;
        $dtaVenc = date("d-m-Y",strtotime($dta));
        $empresa = isset($_POST['empresa']) ? $_POST['empresa'] : null;
        $tipo = isset($_POST['tipo']) ? $_POST['tipo'] : null;
        $status = isset($_POST['status']) ? $_POST['status'] : null;
        $idEmpresa = isset($_POST['idEmpresa']) ? $_POST['idEmpresa'] : null;
        $idUser = isset($_POST['idUser']) ? $_POST['idUser'] : null;
        $dir = "../anexos/";
        $anexoLO =  $dir . basename($_FILES['anexoLO']['name']);
        $anexoProrrogacao =  $dir . basename($_FILES['anexoProrrogacao']['name']);
        $nomeDraga = isset($_POST['nomeDraga']) ? $_POST['nomeDraga'] : null;
        $dnpm = isset($_POST['dnpm']) ? $_POST['dnpm'] : null;
        //if(isset($_POST['dnpm1']))
        echo Licenca::save($nLO, $dtaVenc, $empresa, $tipo, $status, $idEmpresa, $idUser, $anexoLO, $anexoProrrogacao,
        $nomeDraga, $dnpm);
        
    }

    public function getLicenca($idUser, $idEmpresa) { 
       echo Licenca::getLicenca($idUser, $idEmpresa);
    }

    public function getLicencaAreas($idUser, $idEmpresa) { 
        echo Licenca::getLicencaAreas($idUser, $idEmpresa);
     }

     public function getLicencaDragas($idUser, $idEmpresa) { 
        echo Licenca::getLicencaDragas($idUser, $idEmpresa);
     }

     public function getLicencaTerminais($idUser, $idEmpresa) { 
        echo Licenca::getLicencaTerminais($idUser, $idEmpresa);
     }

    public function editarLO() { 
        $nLO = isset($_POST['nLO']) ? $_POST['nLO'] : null;
        $dta = isset($_POST['dtaVenc']) ? $_POST['dtaVenc'] : null;
        $dtaVenc = date("d-m-Y",strtotime($dta));
        $empresa = isset($_POST['empresa']) ? $_POST['empresa'] : null;
        $tipo = isset($_POST['tipo']) ? $_POST['tipo'] : null;
        $status = isset($_POST['status']) ? $_POST['status'] : null;
        $idArea = isset($_POST['idArea']) ? $_POST['idArea'] : null;
        $idDraga = isset($_POST['idDraga']) ? $_POST['idDraga'] : null;
        $idTerminal = isset($_POST['idTerminal']) ? $_POST['idTerminal'] : null;
        $nomeDraga = isset($_POST['nomeDraga']) ? $_POST['nomeDraga'] : null;
        $dnpm = isset($_POST['dnpm']) ? $_POST['dnpm'] : null;
        $dir = "../anexos/";
        if(!$_FILES['anexoLO']['error'] == 4) { $anexoLO = $dir . basename($_FILES['anexoLO']['name']);} else{$anexoLO=null;}
        if(!$_FILES['anexoProrrogacao']['error'] == 4) { $anexoProrrogacao = $dir . basename($_FILES['anexoProrrogacao']['name']);} else{$anexoProrrogacao=null;}
        $idEmpresa = isset($_POST['idEmpresa']) ? $_POST['idEmpresa'] : null;
        $idUser = isset($_POST['idUser']) ? $_POST['idUser'] : null;
        $idLO = isset($_POST['idLO']) ? $_POST['idLO'] : null;
        echo Licenca::editarLO($nLO, $dtaVenc, $empresa, $tipo, $status, $idArea, $idDraga,
        $idTerminal, $nomeDraga, $dnpm, $anexoLO, $anexoProrrogacao, $idEmpresa, $idUser, $idLO);
        //echo "$nLO $dtaVenc $empresa $tipo $idEmpresa $idUser";
    }

}