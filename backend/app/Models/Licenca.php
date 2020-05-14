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
        $anexoLO,
        $anexoProrrogacao,
        $nomeDraga,
        $dnpm,
        $dnpm1,
        $dnpm2, 
        $dnpm3, 
        $dnpm4, 
        $dnpm5,
        $dnpm6){
        
        // validação (bem simples, só pra evitar dados vazios)
       if (empty($nLO)
       ||  empty($dtaVenc)
       ||  empty($empresa)
       ||  empty($tipo)
       ||  empty($status)
       ||  empty($idUser)
       ||  empty($anexoLO)){
           return getJsonResponse(false, 'Campos não informados');
       }

            $DB = new DB;
            //insere na tabela LO    
            $sql = "INSERT into licenca(nlicenca, empresa, dtaVenc, anexoLO, anexoProrrogacao, tipo, status, idUser, idEmpresa) VALUES (:nLO, :empresa, :dtaVenc, :anexoLO, :anexoProrrogacao, :tipo, :status, :idUser, :idEmpresa)";
            $stmt = $DB->prepare($sql);
            $stmt->bindParam(':nLO', $nLO);
            $stmt->bindParam(':empresa', $empresa);
            $stmt->bindParam(':dtaVenc', $dtaVenc);
            $stmt->bindParam(':anexoLO', $anexoLO);
            $stmt->bindParam(':anexoProrrogacao', $anexoProrrogacao);
            $stmt->bindParam(':tipo', $tipo);
            $stmt->bindParam(':status', $status);
            $stmt->bindParam(':idUser', $idUser);
            $stmt->bindParam(':idEmpresa', $idEmpresa);
            if ($stmt->execute()){
               
                $controlador = true;
                $idLO = $DB->lastInsertId();
                if(move_uploaded_file($_FILES['anexoLO']['tmp_name'], $anexoLO)){
                }
                if(move_uploaded_file($_FILES['anexoProrrogacao']['tmp_name'], $anexoProrrogacao)){
                }

            } else{
                $controlador = false;
            }


            if($tipo == 1){

                $DB = new DB;
                //insere na tabela LO    
                $sql = "INSERT into area(dnpm, dnpm1, dnpm2, dnpm3, dnpm4, dnpm5, dnpm6, id_licenca) 
                VALUES (:dnpm, :dnpm1, :dnpm2, :dnpm3, :dnpm4, :dnpm5, :dnpm6, :idLO)";
                $stmt = $DB->prepare($sql);
                $stmt->bindParam(':dnpm', $dnpm);
                $stmt->bindParam(':dnpm1', $dnpm1);
                $stmt->bindParam(':dnpm2', $dnpm2);
                $stmt->bindParam(':dnpm3', $dnpm3);
                $stmt->bindParam(':dnpm4', $dnpm4);
                $stmt->bindParam(':dnpm5', $dnpm5);
                $stmt->bindParam(':dnpm6', $dnpm6);
                $stmt->bindParam(':idLO', $idLO);
            
                if ($stmt->execute()){
                
                    $controlador1 = true;

                } else{
                    $controlador1 = false;
                }
               
            } else if($tipo == 2){
                $DB = new DB;
                //insere na tabela LO    
                $sql = "INSERT into draga(nome, id_licenca) VALUES (:nomeDraga, :idLO)";
                $stmt = $DB->prepare($sql);
                $stmt->bindParam(':nomeDraga', $nomeDraga);
                $stmt->bindParam(':idLO', $idLO);
            
                if ($stmt->execute()){
                
                    $controlador1 = true;

                } else{
                    $controlador1 = false;
                }
            
            }else if($tipo == 3){
                $DB = new DB;
                //insere na tabela LO    
                $sql = "INSERT into terminal(id_licenca) VALUES (:idLO)";
                $stmt = $DB->prepare($sql);
                $stmt->bindParam(':idLO', $idLO);
            
                if ($stmt->execute()){
                
                    $controlador1 = true;

                } else{
                    $controlador1 = false;
                }
            
            }

            if ($controlador == true && $controlador1 == true)
            {
                return getJsonResponse(true, 'Cadastrado com sucesso');
            }
            else return getJsonResponse(false, 'Erro ao cadastrar - ' . $stmt->errorInfo());



    }

    public static function getLicenca($idUser, $idEmpresa){

         // validação (bem simples, só pra evitar dados vazios)
       if (empty($idUser)
       ||  empty($idEmpresa)){
           return getJsonResponse(false, 'Campos não informados');
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
                            'anexoLO' => $licencas['anexoLO']
                           
                           
                        );
                    }
                return json_encode($arrayLicencas);
                }
            }
            else return getJsonResponse(false, 'Erro ao buscar usuário - ' . $stmt->errorInfo());



    }

    public static function getLicencaAreas($idUser, $idEmpresa){

        // validação (bem simples, só pra evitar dados vazios)
      if (empty($idUser)
      ||  empty($idEmpresa)){
          return getJsonResponse(false, 'Campos não informados');
      }

           $DB = new DB;
           //insere na tabela LO    
           $sql = "SELECT l.id as idLicenca, l.tipo, l.nlicenca, l.empresa, l.dtaVenc, l.anexoLO, l.anexoProrrogacao, 
           l.tipo, l.idUser, l.idEmpresa, l.status, a.dnpm, a.dnpm1, a.dnpm2, a.dnpm3, a.dnpm4, a.dnpm5, a.dnpm6, a.id as idArea
           FROM licenca as l INNER JOIN area AS a ON a.id_licenca = l.id
           WHERE l.tipo = 1 AND idUser=:idUser or idEmpresa=:idEmpresa";
           $stmt = $DB->prepare($sql);
           $stmt->bindParam(':idUser', $idUser);
           $stmt->bindParam(':idEmpresa', $idEmpresa);
           if ( $stmt->execute()){
               $licenca = $stmt->fetchAll(\PDO::FETCH_ASSOC);
               if(count($licenca) > 0){
                   for ($i = 0; $i < count($licenca); $i++) {
                       $licencas = $licenca[$i];
                     
                       $arrayLicencas[$i] = array(
                           'idLicenca' => $licencas['idLicenca'],
                           'nlicenca' => $licencas['nlicenca'],
                           'empresa' => $licencas['empresa'],
                           'dtaVenc' => $licencas['dtaVenc'],
                           'tipo' => $licencas['tipo'],
                           'status' => $licencas['status'],
                           'anexoLO' => $licencas['anexoLO'],
                           'anexoProrrogacao' => $licencas['anexoProrrogacao'],
                           'dnpm' => $licencas['dnpm'],
                           'dnpm1' => $licencas['dnpm1'],
                           'dnpm2' => $licencas['dnpm2'],
                           'dnpm3' => $licencas['dnpm3'],
                           'dnpm4' => $licencas['dnpm4'],
                           'dnpm5' => $licencas['dnpm5'],
                           'dnpm6' => $licencas['dnpm6'],
                           'idArea' => $licencas['idArea'],

                          
                       );
                   }
               return json_encode($arrayLicencas);
               }
           }
           else return getJsonResponse(false, 'Erro ao buscar licenças de Áreas - ' . $stmt->errorInfo());



   }

   public static function getLicencaDragas($idUser, $idEmpresa){

    // validação (bem simples, só pra evitar dados vazios)
  if (empty($idUser)
  ||  empty($idEmpresa)){
      return getJsonResponse(false, 'Campos não informados');
  }

       $DB = new DB;
       //insere na tabela LO    
       $sql = "SELECT l.id AS idLicenca, l.tipo, l.nlicenca, l.empresa, l.dtaVenc, l.anexoLO, l.anexoProrrogacao, 
       l.tipo, l.idUser, l.idEmpresa, l.status, d.nome AS nomeDraga, d.id AS idDraga
       FROM licenca as l INNER JOIN draga AS d ON d.id_licenca = l.id
       WHERE l.tipo =2 AND idUser=:idUser or idEmpresa=:idEmpresa";
       $stmt = $DB->prepare($sql);
       $stmt->bindParam(':idUser', $idUser);
       $stmt->bindParam(':idEmpresa', $idEmpresa);
       if ( $stmt->execute()){
           $licenca = $stmt->fetchAll(\PDO::FETCH_ASSOC);
           if(count($licenca) > 0){
               for ($i = 0; $i < count($licenca); $i++) {
                   $licencas = $licenca[$i];
                 
                   $arrayLicencas[$i] = array(
                       'idLicenca' => $licencas['idLicenca'],
                       'nlicenca' => $licencas['nlicenca'],
                       'empresa' => $licencas['empresa'],
                       'dtaVenc' => $licencas['dtaVenc'],
                       'tipo' => $licencas['tipo'],
                       'status' => $licencas['status'],
                       'anexoLO' => $licencas['anexoLO'],
                       'anexoProrrogacao' => $licencas['anexoProrrogacao'],
                       'nomeDraga' => $licencas['nomeDraga'],
                       'idDraga' => $licencas['idDraga'],

                      
                   );
               }
           return json_encode($arrayLicencas);
           }
       }
       else return getJsonResponse(false, 'Erro ao buscar licenças de Dragas - ' . $stmt->errorInfo());



    }

    public static function getLicencaTerminais($idUser, $idEmpresa){

        // validação (bem simples, só pra evitar dados vazios)
      if (empty($idUser)
      ||  empty($idEmpresa)){
          return getJsonResponse(false, 'Campos não informados');
      }
    
           $DB = new DB;
           //insere na tabela LO    
           $sql = "SELECT l.id AS idLicenca, l.tipo, l.nlicenca, l.empresa, l.dtaVenc, l.anexoLO, l.anexoProrrogacao, 
           l.tipo, l.idUser, l.idEmpresa, l.status, t.id AS idTerminal
           FROM licenca as l INNER JOIN terminal AS t ON t.id_licenca = l.id
           WHERE l.tipo =3 AND idUser=:idUser or idEmpresa=:idEmpresa
            ";
           $stmt = $DB->prepare($sql);
           $stmt->bindParam(':idUser', $idUser);
           $stmt->bindParam(':idEmpresa', $idEmpresa);
           if ( $stmt->execute()){
               $licenca = $stmt->fetchAll(\PDO::FETCH_ASSOC);
               if(count($licenca) > 0){
                   for ($i = 0; $i < count($licenca); $i++) {
                       $licencas = $licenca[$i];
                     
                       $arrayLicencas[$i] = array(
                           'idLicenca' => $licencas['idLicenca'],
                           'nlicenca' => $licencas['nlicenca'],
                           'empresa' => $licencas['empresa'],
                           'dtaVenc' => $licencas['dtaVenc'],
                           'tipo' => $licencas['tipo'],
                           'status' => $licencas['status'],
                           'anexoLO' => $licencas['anexoLO'],
                           'anexoProrrogacao' => $licencas['anexoProrrogacao'],
                           'idTerminal' => $licencas['idTerminal'],
    
                          
                       );
                   }
               return json_encode($arrayLicencas);
               }
           }
           else return getJsonResponse(false, 'Erro ao buscar licenças de Terminais - ' . $stmt->errorInfo());
    
    
    
        }

    


    public static function editarLO(
        $nLO, $dtaVenc, $empresa, $tipo, $status, $idArea, $idDraga,
        $idTerminal, $nomeDraga, $dnpm, $dnpm1, $dnpm2, $dnpm3, $dnpm4, $dnpm5, 
        $dnpm6, $anexoLO, $anexoProrrogacao, $idEmpresa, $idUser, $idLO){
        
        // validação (bem simples, só pra evitar dados vazios)
       if (empty($nLO)
       ||  empty($dtaVenc)
       ||  empty($tipo)
       ||  empty($status)
       ||  empty($idLO)){
           return getJsonResponse(false, 'Campos não informados');
       }

            $DB = new DB;
            //atualiza na tabela LO 
            if($anexoLO != null && $anexoProrrogacao!=null){
                $sql = "update licenca SET nlicenca=:nLO, empresa=:empresa, dtaVenc=:dtaVenc, anexoLO = :anexoLO,
                anexoProrrogacao = :anexoProrrogacao, tipo=:tipo, status=:status WHERE id= :idLO";
                $stmt = $DB->prepare($sql);
                $stmt->bindParam(':nLO', $nLO);
                $stmt->bindParam(':empresa', $empresa);
                $stmt->bindParam(':dtaVenc', $dtaVenc);
                $stmt->bindParam(':anexoLO', $anexoLO);
                $stmt->bindParam(':anexoProrrogacao', $anexoProrrogacao);
                $stmt->bindParam(':tipo', $tipo);
                $stmt->bindParam(':status', $status);
                $stmt->bindParam(':idLO', $idLO);
                if(move_uploaded_file($_FILES['anexoLO']['tmp_name'], $anexoLO)){
                }
                if(move_uploaded_file($_FILES['anexoProrrogacao']['tmp_name'], $anexoProrrogacao)){
                }
            } else if($anexoLO == null && $anexoProrrogacao!=null){
                $sql = "update licenca SET nlicenca=:nLO, empresa=:empresa, dtaVenc=:dtaVenc, 
                anexoProrrogacao = :anexoProrrogacao, tipo=:tipo, status=:status WHERE id= :idLO";
                $stmt = $DB->prepare($sql);
                $stmt->bindParam(':nLO', $nLO);
                $stmt->bindParam(':empresa', $empresa);
                $stmt->bindParam(':dtaVenc', $dtaVenc);
                $stmt->bindParam(':anexoProrrogacao', $anexoProrrogacao);
                $stmt->bindParam(':tipo', $tipo);
                $stmt->bindParam(':status', $status);
                $stmt->bindParam(':idLO', $idLO);
                
                if(move_uploaded_file($_FILES['anexoProrrogacao']['tmp_name'], $anexoProrrogacao)){
                }
            }
            else if($anexoLO != null && $anexoProrrogacao == null){
                $sql = "update licenca SET nlicenca=:nLO, empresa=:empresa, dtaVenc=:dtaVenc, 
                anexoLO = :anexoLO, tipo=:tipo, status=:status WHERE id= :idLO";
                $stmt = $DB->prepare($sql);
                $stmt->bindParam(':nLO', $nLO);
                $stmt->bindParam(':empresa', $empresa);
                $stmt->bindParam(':dtaVenc', $dtaVenc);
                $stmt->bindParam(':anexoLO', $anexoLO);
                $stmt->bindParam(':tipo', $tipo);
                $stmt->bindParam(':status', $status);
                $stmt->bindParam(':idLO', $idLO);
                if(move_uploaded_file($_FILES['anexoLO']['tmp_name'], $anexoLO)){
                }
            } else{
                $sql = "update licenca SET nlicenca=:nLO, empresa=:empresa, dtaVenc=:dtaVenc,
                tipo=:tipo, status=:status WHERE id= :idLO";
                $stmt = $DB->prepare($sql);
                $stmt->bindParam(':nLO', $nLO);
                $stmt->bindParam(':empresa', $empresa);
                $stmt->bindParam(':dtaVenc', $dtaVenc);
                $stmt->bindParam(':tipo', $tipo);
                $stmt->bindParam(':status', $status);
                $stmt->bindParam(':idLO', $idLO);
            }
           
      
            if ($stmt->execute()){
                $controlador = true;
            } else{
                $controlador = false;
            }


            if($tipo == 1){
                $DB = new DB;
                //atualiza na tabela LO    
                $sql = "UPDATE area SET dnpm=:dnpm, dnpm1=:dnpm1, dnpm2=:dnpm2, dnpm3=:dnpm3, dnpm4=:dnpm4,
                dnpm5=:dnpm5, dnpm6=:dnpm6 WHERE id_licenca = :idLO";
                $stmt = $DB->prepare($sql);
                $stmt->bindParam(':dnpm', $dnpm);
                $stmt->bindParam(':dnpm1', $dnpm1);
                $stmt->bindParam(':dnpm2', $dnpm2);
                $stmt->bindParam(':dnpm3', $dnpm3);
                $stmt->bindParam(':dnpm4', $dnpm4);
                $stmt->bindParam(':dnpm5', $dnpm5);
                $stmt->bindParam(':dnpm6', $dnpm6);
                $stmt->bindParam(':idLO', $idLO);
        
                if ($stmt->execute()){
                    $controlador1 = true;
                } else{
                    $controlador1 = false;
                }
            } else if($tipo == 2){
                $DB = new DB;
                //atualiza na tabela LO    
                $sql = "UPDATE draga SET nome =:nomeDraga WHERE id_licenca = :idLO";
                $stmt = $DB->prepare($sql);
                $stmt->bindParam(':nomeDraga', $nomeDraga);
                $stmt->bindParam(':idLO', $idLO);
        
                if ($stmt->execute()){
                    $controlador1 = true;
                } else{
                    $controlador1 = false;
                }
            }
            

            if ($controlador)
            {
                return getJsonResponse(true, 'Atualizada LO com sucesso');
            }
            else return getJsonResponse(false, 'Erro ao atualizar - ' . $stmt->errorInfo());



    }


}