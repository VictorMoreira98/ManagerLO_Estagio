<table >
  
  <thead>
    <tr class="cabecalho" >
      <th scope="col">LO</th>
      <th scope="col">Tipo</th>
      <th scope="col">Data Vencimento</th>
      <th scope="col">Empresa</th>
      <th scope="col">Status</th>
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
                    <td data-label="Tipo">'.$licencas[$i]->{'tipo'}.'</td>
                    <td data-label="Data Vencimento">'.$licencas[$i]->{'dtaVenc'}.'</td>
                    <td data-label="Empresa">'.$licencas[$i]->{'empresa'}.'</td>
                    <td data-label="Status">'.$licencas[$i]->{'status'}.'</td>
                    <td style="display: none">'.$licencas[$i]->{'id'}.'</td>
                    <td style="display: none">'.$licencas[$i]->{'anexo'}.'</td>
                    <td data-label="Ações">
                        <button class="btn btnActions" data-toggle="modal" data-target="#editarRegistro" onclick="editarLO(this)"><i class="fas fa-edit fa-1x"></i></button>
                        <button class="btn btnActions" data-toggle="modal" data-target="#deletarUsuario" onclick="abrirLO(this)"><i class="fas fa-file-alt fa-1x"></i></button>
                                <a href="/anexos/discursivaMatematica_G1.pdf">teste</a>
                    </td>
                  </tr>'; }
                ?>
  
                      
  </tbody>

 
</table>


