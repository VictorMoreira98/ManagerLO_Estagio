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
        $dir = "C:/xampp/htdocs/ManagerLO_Estagio/anexos/";
        $anexo =  $dir . basename($_FILES['anexo']['name']);
        echo Licenca::save($nLO, $dtaVenc, $empresa, $tipo, $status, $idEmpresa, $idUser, $anexo);
        //echo "$nLO $dtaVenc $empresa $tipo $idEmpresa $idUser";
        //echo $anexo;
    }

    public function getLicenca($idUser, $idEmpresa) { 
       echo Licenca::getLicenca($idUser, $idEmpresa);
    }

    public function editarLO() { 
        $nLO = isset($_POST['nLO']) ? $_POST['nLO'] : null;
        $dta = isset($_POST['dtaVenc']) ? $_POST['dtaVenc'] : null;
        $dtaVenc = date("d-m-Y",strtotime($dta));
        $empresa = isset($_POST['empresa']) ? $_POST['empresa'] : null;
        $tipo = isset($_POST['tipo']) ? $_POST['tipo'] : null;
        $status = isset($_POST['status']) ? $_POST['status'] : null;
        $idEmpresa = isset($_POST['idEmpresa']) ? $_POST['idEmpresa'] : null;
        $idUser = isset($_POST['idUser']) ? $_POST['idUser'] : null;
        $idLO = isset($_POST['idLO']) ? $_POST['idLO'] : null;
        echo Licenca::editarLO($nLO, $dtaVenc, $empresa, $tipo, $status, $idEmpresa, $idUser, $idLO);
        //echo "$nLO $dtaVenc $empresa $tipo $idEmpresa $idUser";
    }

}