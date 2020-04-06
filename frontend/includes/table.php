<table >
  





<?php
  ///// AREAS ////////////  
  if($_SESSION['tipoURL'] == 1){
    echo '
  <thead>
    <tr class="cabecalho" >
      <th scope="col">LO</th>
      <th scope="col">DNPM</th>
      <th scope="col">Data Vencimento</th>
      <th scope="col">Empresa</th>
      <th scope="col">Status</th>
      <th scope="col">Ações</th>
    </tr>
  </thead>
  <tbody>';


  $licencas = json_decode(file_get_contents(
                    "http://localhost/backend/licenca/areas/".$_SESSION['id']."/".$_SESSION['idEmpresa']));
                    

                    for($i = 0; $i < count($licencas); $i++) {
                       
                    echo '
                  <tr>
                    <td style="display: none">'.$licencas[$i]->{'tipo'}.'</td>
                    <td data-label="LO">'.$licencas[$i]->{'nlicenca'}.'</td>
                    <td data-label="DNPM">'.$licencas[$i]->{'dnpm'}.'</td>
                    <td data-label="Data Vencimento">'.$licencas[$i]->{'dtaVenc'}.'</td>
                    <td data-label="Empresa">'.$licencas[$i]->{'empresa'}.'</td>
                    <td data-label="Status">'.$licencas[$i]->{'status'}.'</td>
                    <td style="display: none">'.$licencas[$i]->{'idLicenca'}.'</td>
                    <td style="display: none">'.$licencas[$i]->{'idArea'}.'</td>
                    <td style="display: none">'.$licencas[$i]->{'anexoLO'}.'</td>
                    <td style="display: none">'.$licencas[$i]->{'anexoProrrogacao'}.'</td>
                    <td data-label="Ações">
                        <button class="btn btnActions" data-toggle="modal" data-target="#editarRegistro" onclick="editarLO(this)"><i class="fas fa-edit fa-1x"></i></button>
                        <button class="btn btnActions" data-toggle="modal" data-target="#deletarUsuario" onclick="abrirLO(this)"><i class="fas fa-file-alt fa-1x"></i></button>
                             
                    </td>
                  </tr>'; }
    }             

    ///// Dragas ////////////  
  else if($_SESSION['tipoURL'] == 2){
    echo '
  <thead>
    <tr class="cabecalho" >
      <th scope="col">LO</th>
      <th scope="col">Draga</th>
      <th scope="col">Data Vencimento</th>
      <th scope="col">Empresa</th>
      <th scope="col">Status</th>
      <th scope="col">Ações</th>
    </tr>
  </thead>
  <tbody>';


  $licencas = json_decode(file_get_contents(
                    "http://localhost/backend/licenca/dragas/".$_SESSION['id']."/".$_SESSION['idEmpresa']));
                    

                    for($i = 0; $i < count($licencas); $i++) {
                       
                    echo '
                  <tr>
                    
                  <td style="display: none">'.$licencas[$i]->{'tipo'}.'</td>
                  <td data-label="LO">'.$licencas[$i]->{'nlicenca'}.'</td>
                  <td data-label="Draga">'.$licencas[$i]->{'nomeDraga'}.'</td>
                  <td data-label="Data Vencimento">'.$licencas[$i]->{'dtaVenc'}.'</td>
                  <td data-label="Empresa">'.$licencas[$i]->{'empresa'}.'</td>
                  <td data-label="Status">'.$licencas[$i]->{'status'}.'</td>
                  <td style="display: none">'.$licencas[$i]->{'idLicenca'}.'</td>
                  <td style="display: none">'.$licencas[$i]->{'idDraga'}.'</td>
                  <td style="display: none">'.$licencas[$i]->{'anexoLO'}.'</td>
                  <td style="display: none">'.$licencas[$i]->{'anexoProrrogacao'}.'</td>
                    <td data-label="Ações">
                        <button class="btn btnActions" data-toggle="modal" data-target="#editarRegistro" onclick="editarLO(this)"><i class="fas fa-edit fa-1x"></i></button>
                        <button class="btn btnActions" data-toggle="modal" data-target="#deletarUsuario" onclick="abrirLO(this)"><i class="fas fa-file-alt fa-1x"></i></button>
                             
                    </td>
                  </tr>'; }
    }      
    
    ///// Terminais ////////////  
  else if($_SESSION['tipoURL'] == 3){
    echo '
  <thead>
    <tr class="cabecalho" >
      <th scope="col">LO</th>
      <th scope="col">Data Vencimento</th>
      <th scope="col">Empresa</th>
      <th scope="col">Status</th>
      <th scope="col">Ações</th>
    </tr>
  </thead>
  <tbody>';


  $licencas = json_decode(file_get_contents(
                    "http://localhost/backend/licenca/terminais/".$_SESSION['id']."/".$_SESSION['idEmpresa']));
                    

                    for($i = 0; $i < count($licencas); $i++) {
                       
                    echo '
                  <tr>
                    
                  <td style="display: none">'.$licencas[$i]->{'tipo'}.'</td>
                  <td data-label="LO">'.$licencas[$i]->{'nlicenca'}.'</td>
                  <td style="display: none">padrao</td>
                  <td data-label="Data Vencimento">'.$licencas[$i]->{'dtaVenc'}.'</td>
                  <td data-label="Empresa">'.$licencas[$i]->{'empresa'}.'</td>
                  <td data-label="Status">'.$licencas[$i]->{'status'}.'</td>
                  <td style="display: none">'.$licencas[$i]->{'idLicenca'}.'</td>
                  <td style="display: none">'.$licencas[$i]->{'idTerminal'}.'</td>
                  <td style="display: none">'.$licencas[$i]->{'anexoLO'}.'</td>
                  <td style="display: none">'.$licencas[$i]->{'anexoProrrogacao'}.'</td>
                    <td data-label="Ações">
                        <button class="btn btnActions" data-toggle="modal" data-target="#editarRegistro" onclick="editarLO(this)"><i class="fas fa-edit fa-1x"></i></button>
                        <button class="btn btnActions" data-toggle="modal" data-target="#deletarUsuario" onclick="abrirLO(this)"><i class="fas fa-file-alt fa-1x"></i></button>
                             
                    </td>
                  </tr>'; }
    }      
    
    
    
    
    ?>
  
                      
  </tbody>

 
</table>


