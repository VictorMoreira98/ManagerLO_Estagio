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
        $idEmpresa = isset($_POST['idEmpresa']) ? $_POST['idEmpresa'] : null;
        $idUser = isset($_POST['idUser']) ? $_POST['idUser'] : null;
        echo Licenca::save($nLO, $dtaVenc, $empresa, $tipo, $idEmpresa, $idUser);
        //echo "$nLO $dtaVenc $empresa $tipo $idEmpresa $idUser";
    }

    public function getLicenca($idUser, $idEmpresa) { 
       echo Licenca::getLicenca($idUser, $idEmpresa);
    }

}