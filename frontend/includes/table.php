<table >
  





<?php
  ///// AREAS ////////////  
  if($_SESSION['tipoURL'] == 1){
    $_SESSION['nomeTipoURL'] = "areas";
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
                    $itens_pag = 3;
                    $num_total = count($licencas);
                    $num_pag = ceil($num_total/$itens_pag);
                    $pagAtual = (isset($_GET['url'])) ? $_GET['url'] : 1;
                    $pagAtual = array_filter(explode('/',$pagAtual));
                    $pagAtual[1] = (!empty($pagAtual[1])) ? $pagAtual[1] : 1;
                    $i = ($itens_pag*$pagAtual[1]) - $itens_pag;
                    $fimPag = $itens_pag*$pagAtual[1];
                    for($i = $i; $i < $fimPag; $i++) {
                       if(!empty($licencas[$i])){
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
                  </tr>
                  '; }}
    }             

    ///// Dragas ////////////  
  else if($_SESSION['tipoURL'] == 2){
    $_SESSION['nomeTipoURL'] = "dragas";
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
                    $itens_pag = 3;
                    $num_total = count($licencas);
                    $num_pag = ceil($num_total/$itens_pag);
                    $pagAtual = (isset($_GET['url'])) ? $_GET['url'] : 1;
                    $pagAtual = array_filter(explode('/',$pagAtual));
                    $pagAtual[1] = (!empty($pagAtual[1])) ? $pagAtual[1] : 1;
                    $i = ($itens_pag*$pagAtual[1]) - $itens_pag;
                    $fimPag = $itens_pag*$pagAtual[1];
                    for($i = $i; $i < $fimPag; $i++) {
                       if(!empty($licencas[$i])){
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
                  </tr>'; }}
    }      
    
    ///// Terminais ////////////  
  else if($_SESSION['tipoURL'] == 3){
    $_SESSION['nomeTipoURL'] = "terminais";
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
                    $itens_pag = 3;
                    $num_total = count($licencas);
                    $num_pag = ceil($num_total/$itens_pag);
                    $pagAtual = (isset($_GET['url'])) ? $_GET['url'] : 1;
                    $pagAtual = array_filter(explode('/',$pagAtual));
                    $pagAtual[1] = (!empty($pagAtual[1])) ? $pagAtual[1] : 1;
                    $i = ($itens_pag*$pagAtual[1]) - $itens_pag;
                    $fimPag = $itens_pag*$pagAtual[1];
                    for($i = $i; $i < $fimPag; $i++) {
                       if(!empty($licencas[$i])){
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
                  </tr>'; }}
    }      
    
    
    
    
    ?>
  
                      
  </tbody>

 
</table>

<nav aria-label="Page navigation example">
  <ul  class="pagination pg-blue justify-content-center paginacao mt-5">
    <li class="page-item ">
      <a class="page-link" href="/<?php 
          if($pagAtual[1]>1) {
            $pagina = $pagAtual[1]-1;
            echo $_SESSION['nomeTipoURL']."/". $pagina;} 
          else{ echo $_SESSION['nomeTipoURL']."/". $pagAtual;} ?>">Voltar</a>
    </li>
    <?php for($i = 1; $i <= $num_pag; $i++) { 
      $estilo = "";
      if($i == $pagAtual[1]){
        $estilo = "active";
      }?>
     <li class="page-item <?php echo $estilo; ?> " ><a class="page-link" href="/<?php echo $_SESSION['nomeTipoURL']."/".$i; ?>"><?php echo $i; ?></a></li>
   <?php }?>
    <li class="page-item">
      <a class="page-link" href="/<?php 
          if($pagAtual[1]<$i-1) {
            $pagina = $pagAtual[1]+1;
            echo  $_SESSION['nomeTipoURL']."/".$pagina;
          } 
          else{ 
            echo $_SESSION['nomeTipoURL']."/".$pagAtual[1];
          } 
          ?>">Próximo</a>
    </li>
  </ul>
</nav>