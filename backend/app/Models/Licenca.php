<?php namespace App\Models;

use App\DB; 
include_once BASE_PATH . "/config.php";
class Licenca {

    public static function save(
        $nLO,
        $dtaVenc,
        $empresa, 
        $tipo,
        $status,
        $idEmpresa,
        $idUser,
        $anexo){
        
        // validação (bem simples, só pra evitar dados vazios)
       if (empty($nLO)
       ||  empty($dtaVenc)
       ||  empty($empresa)
       ||  empty($tipo)
       ||  empty($status)
       ||  empty($idUser)
       ||  empty($anexo)){
           return getJsonResponse(false, 'Campos nao informados');
       }

            $DB = new DB;
            //insere na tabela LO    
            $sql = "INSERT into licenca(nlicenca, empresa, dtaVenc, anexo, tipo, status, idUser, idEmpresa) VALUES (:nLO, :empresa, :dtaVenc, :anexo, :tipo, :status, :idUser, :idEmpresa)";
            $stmt = $DB->prepare($sql);
            $stmt->bindParam(':nLO', $nLO);
            $stmt->bindParam(':empresa', $empresa);
            $stmt->bindParam(':dtaVenc', $dtaVenc);
            $stmt->bindParam(':anexo', $anexo);
            $stmt->bindParam(':tipo', $tipo);
            $stmt->bindParam(':status', $status);
            $stmt->bindParam(':idUser', $idUser);
            $stmt->bindParam(':idEmpresa', $idEmpresa);
            if ($stmt->execute()){
               
                $controlador = true;
              
                if(move_uploaded_file($_FILES['anexo']['tmp_name'], $anexo)){

                }
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
                            'tipo' => $licencas['tipo'],
                            'status' => $licencas['status'],
                            'anexo' => $licencas['anexo']
                           
                        );
                    }
                return json_encode($arrayLicencas);
                }
            }
            else return getJsonResponse(false, 'Erro ao buscar usuário - ' . $stmt->errorInfo());



    }


    public static function editarLO(
        $nLO,
        $dtaVenc,
        $empresa, 
        $tipo,
        $status,
        $idEmpresa,
        $idUser,
        $idLO){
        
        // validação (bem simples, só pra evitar dados vazios)
       if (empty($nLO)
       ||  empty($dtaVenc)
       ||  empty($tipo)
       ||  empty($status)
       ||  empty($idLO)){
           return getJsonResponse(false, 'Campos nao informados');
       }

            $DB = new DB;
            //atualiza na tabela LO    
            $sql = "update licenca SET nlicenca=:nLO, empresa=:empresa, dtaVenc=:dtaVenc, tipo=:tipo, status=:status WHERE id= :idLO";
            $stmt = $DB->prepare($sql);
            $stmt->bindParam(':nLO', $nLO);
            $stmt->bindParam(':empresa', $empresa);
            $stmt->bindParam(':dtaVenc', $dtaVenc);
            $stmt->bindParam(':tipo', $tipo);
            $stmt->bindParam(':status', $status);
            $stmt->bindParam(':idLO', $idLO);
      
            if ($stmt->execute()){
                $controlador = true;
            } else{
                $controlador = false;
            }
            

            if ($controlador)
            {
                return getJsonResponse(true, 'Atualizada LO com sucesso');
            }
            else return getJsonResponse(false, 'Erro ao atualizar - ' . $stmt->errorInfo());



    }


}