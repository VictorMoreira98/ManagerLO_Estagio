<?php namespace App\Models;

use App\DB; 
include_once BASE_PATH . "/config.php";
class Licenca {

    public static function save(
        $nLO,
        $dtaVenc,
        $empresa, 
        $tipo,
        $idEmpresa,
        $idUser){
        
        // validação (bem simples, só pra evitar dados vazios)
       if (empty($nLO)
       ||  empty($dtaVenc)
       ||  empty($empresa)
       ||  empty($tipo)
       ||  empty($idUser)){
           return getJsonResponse(false, 'Campos nao informados');
       }

            $DB = new DB;
            //insere na tabela LO    
            $sql = "INSERT into licenca(nlicenca, empresa, dtaVenc, tipo, idUser, idEmpresa) VALUES (:nLO, :empresa, :dtaVenc, :tipo, :idUser, :idEmpresa)";
            $stmt = $DB->prepare($sql);
            $stmt->bindParam(':nLO', $nLO);
            $stmt->bindParam(':empresa', $empresa);
            $stmt->bindParam(':dtaVenc', $dtaVenc);
            $stmt->bindParam(':tipo', $tipo);
            $stmt->bindParam(':idUser', $idUser);
            $stmt->bindParam(':idEmpresa', $idEmpresa);
            if ($stmt->execute()){
                $controlador = true;
            } else{
                $controlador = false;
            }
            

            if ($controlador)
            {
                return getJsonResponse(true, 'Cadastrado com sucesso');
            }
            else return getJsonResponse(false, 'Erro ao cadastrar - ' . $stmt->errorInfo());



    }


}