<?php namespace App\Models;

use App\DB; 
include_once BASE_PATH . "/config.php";
class Licenca {

    public static function save(
        $nLO,
        $dtaVenc,
        $empresa,
        $tipo){
        
        // validação (bem simples, só pra evitar dados vazios)
       if (empty($nLo)
       ||  empty($dtaVenc)
       ||  empty($empresa)){
           return getJsonResponse(false, 'Campos nao informados');
       }

            $DB = new DB;
            //insere na tabela LO    
            $sql = "INSERT INTO pessoa(nome, cpf) VALUES(:nome, :cpf)";
            $stmt = $DB->prepare($sql);
            $stmt->bindParam(':nome', $nome);
            $stmt->bindParam(':cpf', $cpf);
            if ($stmt->execute()){
                $controlador = true;
            } else{
                $controlador = false;
            }


    }


}