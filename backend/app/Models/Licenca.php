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

    public static function getLicenca($idUser, $idEmpresa){

         // validação (bem simples, só pra evitar dados vazios)
       if (empty($idUser)
       ||  empty($idEmpresa)){
           return getJsonResponse(false, 'Campos nao informados');
       }

            $DB = new DB;
            //insere na tabela LO    
            $sql = "SELECT * FROM licenca WHERE idUser=:idUser || idEmpresa=:idEmpresa";
            $stmt = $DB->prepare($sql);
            $stmt->bindParam(':idUser', $idUser);
            $stmt->bindParam(':idEmpresa', $idEmpresa);
            if ( $stmt->execute()){
                $licenca = $stmt->fetchAll(\PDO::FETCH_ASSOC);
                if(count($licenca) > 0){
                    for ($i = 0; $i < count($licenca); $i++) {
                        $licencas = $licenca[$i];
                        $arrayLicencas[$i] = array(
                            'id' => $licencas['id'],
                            'nlicenca' => $licencas['nlicenca'],
                            'empresa' => $licencas['empresa'],
                            'dtaVenc' => $licencas['dtaVenc'],
                            'tipo' => $licencas['tipo']
                           
                        );
                    }
                return json_encode($arrayLicencas);
                }
            }
            else return getJsonResponse(false, 'Erro ao buscar usuário - ' . $stmt->errorInfo());



    }


}