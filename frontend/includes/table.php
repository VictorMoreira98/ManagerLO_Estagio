<table>
  
  <thead>
    <tr class="cabecalho" >
      <th scope="col">LO</th>
      <th scope="col">Data Vencimento</th>
      <th scope="col">Empresa</th>
      <th scope="col">Ações</th>
    </tr>
  </thead>
  <tbody>


  <?php  $licencas = json_decode(file_get_contents(
                    "http://localhost/backend/licenca/".$_SESSION['id']."/".$_SESSION['idEmpresa']));
                    

                    for($i = 0; $i < count($licencas); $i++) {
                       
                    echo '
                  <tr>
                    <td data-label="LO">'.$licencas[$i]->{'nlicenca'}.'</td>
                    <td data-label="Data Vencimento">'.$licencas[$i]->{'dtaVenc'}.'</td>
                    <td data-label="Empresa">'.$licencas[$i]->{'empresa'}.'</td>
                    <td data-label="Ações">
                        <button class="btn btnActions" data-toggle="modal" data-target="#editarUsuario" ><i class="fas fa-edit fa-1x"></i></button>
                        <button class="btn btnActions" data-toggle="modal" data-target="#deletarUsuario" ><i class="fas fa-file-alt fa-1x"></i></button>
                                
                    </td>
                  </tr>'; }
                ?>
  
                      
  </tbody>
</table>