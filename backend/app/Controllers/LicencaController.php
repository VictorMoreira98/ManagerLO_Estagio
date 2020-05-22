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
        $dnpm1 = isset($_POST['dnpm1']) ? $_POST['dnpm1'] : null;
        $dnpm2 = isset($_POST['dnpm2']) ? $_POST['dnpm2'] : null;
        $dnpm3 = isset($_POST['dnpm3']) ? $_POST['dnpm3'] : null;
        $dnpm4 = isset($_POST['dnpm4']) ? $_POST['dnpm4'] : null;
        $dnpm5 = isset($_POST['dnpm5']) ? $_POST['dnpm5'] : null;
        $dnpm6 = isset($_POST['dnpm6']) ? $_POST['dnpm6'] : null;
        echo Licenca::save($nLO, $dtaVenc, $empresa, $tipo, $status, $idEmpresa, $idUser, $anexoLO, $anexoProrrogacao,
        $nomeDraga, $dnpm, $dnpm1, $dnpm2, $dnpm3, $dnpm4, $dnpm5, $dnpm5, $dnpm6);
        
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
        $dnpm1 = isset($_POST['dnpm1']) ? $_POST['dnpm1'] : null;
        $dnpm2= isset($_POST['dnpm2']) ? $_POST['dnpm2'] : null;
        $dnpm3 = isset($_POST['dnpm3']) ? $_POST['dnpm3'] : null;
        $dnpm4 = isset($_POST['dnpm4']) ? $_POST['dnpm4'] : null;
        $dnpm5 = isset($_POST['dnpm5']) ? $_POST['dnpm5'] : null;
        $dnpm6 = isset($_POST['dnpm6']) ? $_POST['dnpm6'] : null;
        $dir = "../anexos/";
        if(!$_FILES['anexoLO']['error'] == 4) { $anexoLO = $dir . basename($_FILES['anexoLO']['name']);} else{$anexoLO=null;}
        if(!$_FILES['anexoProrrogacao']['error'] == 4) { $anexoProrrogacao = $dir . basename($_FILES['anexoProrrogacao']['name']);} else{$anexoProrrogacao=null;}
        $idEmpresa = isset($_POST['idEmpresa']) ? $_POST['idEmpresa'] : null;
        $idUser = isset($_POST['idUser']) ? $_POST['idUser'] : null;
        $idLO = isset($_POST['idLO']) ? $_POST['idLO'] : null;
        echo Licenca::editarLO($nLO, $dtaVenc, $empresa, $tipo, $status, $idArea, $idDraga,
        $idTerminal, $nomeDraga, $dnpm, $dnpm1, $dnpm2, $dnpm3, $dnpm4, 
        $dnpm5, $dnpm6,$anexoLO, $anexoProrrogacao, $idEmpresa, $idUser, $idLO);
        //echo "$nLO $dtaVenc $empresa $tipo $idEmpresa $idUser";
    }

    public function deletarLicenca() { 
        $idLicenca = isset($_POST['idLicenca']) ? $_POST['idLicenca'] : null;
        $idTipo = isset($_POST['idTipo']) ? $_POST['idTipo'] : null;
        $tipo = isset($_POST['tipo']) ? $_POST['tipo'] : null;
        echo Licenca::deletarLicenca($idLicenca, $idTipo, $tipo);
    }

}