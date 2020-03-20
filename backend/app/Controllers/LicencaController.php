<?php namespace App\Controllers;
use \App\Models\Licenca; 
include_once BASE_PATH . "/config.php";
 
/* Listagem de usuários */ 
class UsersController {
    public function store() { 
        $nLO = isset($_POST['nLO']) ? $_POST['nLO'] : null;
        $dtaVenc = isset($_POST['dtaVenc']) ? $_POST['dtaVenc'] : null;
        $empresa = isset($_POST['empresa']) ? $_POST['empresa'] : null;
        $tipo = isset($_POST['tipo']) ? $_POST['tipo'] : null;
        echo User::save($nLO, $dtaVenc, $empresa, $tipo);
    }

}