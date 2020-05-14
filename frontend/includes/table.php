<table id="tabelaLicenca">
  





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
  <tbody id="bodyArea">';


  $licencas = json_decode(file_get_contents(
                    "http://localhost/backend/licenca/areas/".$_SESSION['id']."/".$_SESSION['idEmpresa']));
                    $arrayJson = array(
                      "nome"  => "joao",
                      "idade" => 35
                    );       
                   
                    $json = json_encode($arrayJson);    
   
                    $itens_pag = 3;
                    $num_total = count($licencas);
                    $num_pag = ceil($num_total/$itens_pag);
                    $pagAtual = (isset($_GET['url'])) ? $_GET['url'] : 1;
                    $pagAtual = array_filter(explode('/',$pagAtual));
                    $pagAtual[1] = (!empty($pagAtual[1])) ? $pagAtual[1] : 1;
                    $i = ($itens_pag*$pagAtual[1]) - $itens_pag;
                    $fimPag = $itens_pag*$pagAtual[1];
                    $licencasEncode = json_encode($licencas);
    echo'
    <script type="text/javascript">
           var obj = '.$licencasEncode.';
           var tipoUrl = 1;   
        </script>
   ';
                    for($i = $i; $i < $fimPag; $i++) {
                       if(!empty($licencas[$i])){

                        if($licencas[$i]->{'status'} == 1){
                          $circulo = '<div class="circulo-verde"></div></td>';
                        } else if($licencas[$i]->{'status'} == 2){
                          $circulo = '<div class="circulo-amarelo"></div></td>';
                        }else if($licencas[$i]->{'status'} == 4){
                          $circulo = '<div class="circulo-azul"></div></td>';
                        }else if($licencas[$i]->{'status'} == 3 || $licencas[$i]->{'status'} == 5){
                          $circulo = '<div class="circulo-vermelho"></div></td>';
                        }

                    echo '
                  <tr id="id_registro-'.$licencas[$i]->{'idLicenca'}.'">
                    <td style="display: none">'.$licencas[$i]->{'tipo'}.'</td>
                    <td data-label="LO">'.$licencas[$i]->{'nlicenca'}.'</td>
                    <td data-label="DNPM">'.$licencas[$i]->{'dnpm'}.'</td>
                    <td data-label="Data Vencimento">'.$licencas[$i]->{'dtaVenc'}.'</td>
                    <td data-label="Empresa">'.$licencas[$i]->{'empresa'}.'</td>
                    <td data-label="Status">'.$circulo.'</td>
                    <td style="display: none">'.$licencas[$i]->{'idLicenca'}.'</td>
                    <td style="display: none">'.$licencas[$i]->{'idArea'}.'</td>
                    <td style="display: none">'.$licencas[$i]->{'anexoLO'}.'</td>
                    <td style="display: none">'.$licencas[$i]->{'anexoProrrogacao'}.'</td>
                    <td style="display: none">'.$licencas[$i]->{'status'}.'</td>
                    <td style="display: none">'.$licencas[$i]->{'dnpm1'}.'</td>
                    <td style="display: none">'.$licencas[$i]->{'dnpm2'}.'</td>
                    <td style="display: none">'.$licencas[$i]->{'dnpm3'}.'</td>
                    <td style="display: none">'.$licencas[$i]->{'dnpm4'}.'</td>
                    <td style="display: none">'.$licencas[$i]->{'dnpm5'}.'</td>
                    <td style="display: none">'.$licencas[$i]->{'dnpm6'}.'</td>
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
  <tbody id="bodyDraga">';


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
                    $licencasEncode = json_encode($licencas);
                    echo'
                    <script type="text/javascript">
                           var obj = '.$licencasEncode.'; 
                           var tipoUrl = 2;   
                        </script>
                   ';
                    for($i = $i; $i < $fimPag; $i++) {
                       if(!empty($licencas[$i])){

                          if($licencas[$i]->{'status'} == 1){
                            $circulo = '<div class="circulo-verde"></div></td>';
                          } else if($licencas[$i]->{'status'} == 2){
                            $circulo = '<div class="circulo-amarelo"></div></td>';
                          }else if($licencas[$i]->{'status'} == 4){
                            $circulo = '<div class="circulo-azul"></div></td>';
                          }else if($licencas[$i]->{'status'} == 3 || $licencas[$i]->{'status'} == 5){
                            $circulo = '<div class="circulo-vermelho"></div></td>';
                          }
                        
                    echo '
                  <tr id="id_registro-'.$licencas[$i]->{'idLicenca'}.'">
                    
                  <td style="display: none">'.$licencas[$i]->{'tipo'}.'</td>
                  <td data-label="LO">'.$licencas[$i]->{'nlicenca'}.'</td>
                  <td data-label="Draga">'.$licencas[$i]->{'nomeDraga'}.'</td>
                  <td data-label="Data Vencimento">'.$licencas[$i]->{'dtaVenc'}.'</td>
                  <td data-label="Empresa">'.$licencas[$i]->{'empresa'}.'</td>
                  <td data-label="Status">'.$circulo.'</td>
                  <td style="display: none">'.$licencas[$i]->{'idLicenca'}.'</td>
                  <td style="display: none">'.$licencas[$i]->{'idDraga'}.'</td>
                  <td style="display: none">'.$licencas[$i]->{'anexoLO'}.'</td>
                  <td style="display: none">'.$licencas[$i]->{'anexoProrrogacao'}.'</td>
                  <td style="display: none">'.$licencas[$i]->{'status'}.'</td>
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
  <tbody id="bodyTerminal">';


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
                    $licencasEncode = json_encode($licencas);
                    echo'
                    <script type="text/javascript">
                           var obj = '.$licencasEncode.'; 
                           var tipoUrl = 3;   
                        </script>
                   ';
                    for($i = $i; $i < $fimPag; $i++) {
                       if(!empty($licencas[$i])){

                        if($licencas[$i]->{'status'} == 1){
                          $circulo = '<div class="circulo-verde"></div></td>';
                        } else if($licencas[$i]->{'status'} == 2){
                          $circulo = '<div class="circulo-amarelo"></div></td>';
                        }else if($licencas[$i]->{'status'} == 4){
                          $circulo = '<div class="circulo-azul"></div></td>';
                        }else if($licencas[$i]->{'status'} == 3 || $licencas[$i]->{'status'} == 5){
                          $circulo = '<div class="circulo-vermelho"></div></td>';
                        }


                    echo '
                  <tr id="id_registro-'.$licencas[$i]->{'idLicenca'}.'">
                    
                  <td style="display: none">'.$licencas[$i]->{'tipo'}.'</td>
                  <td data-label="LO">'.$licencas[$i]->{'nlicenca'}.'</td>
                  <td style="display: none">padrao</td>
                  <td data-label="Data Vencimento">'.$licencas[$i]->{'dtaVenc'}.'</td>
                  <td data-label="Empresa">'.$licencas[$i]->{'empresa'}.'</td>
                  <td data-label="Status">'.$circulo.'</td>
                  <td style="display: none">'.$licencas[$i]->{'idLicenca'}.'</td>
                  <td style="display: none">'.$licencas[$i]->{'idTerminal'}.'</td>
                  <td style="display: none">'.$licencas[$i]->{'anexoLO'}.'</td>
                  <td style="display: none">'.$licencas[$i]->{'anexoProrrogacao'}.'</td>
                  <td style="display: none">'.$licencas[$i]->{'status'}.'</td>
                    <td data-label="Ações">
                        <button class="btn btnActions" data-toggle="modal" data-target="#editarRegistro" onclick="editarLO(this)"><i class="fas fa-edit fa-1x"></i></button>
                        <button class="btn btnActions" data-toggle="modal" data-target="#deletarUsuario" onclick="abrirLO(this)"><i class="fas fa-file-alt fa-1x"></i></button>
                    </td>
                  </tr>'; }}
    }      
   
  
    

    ?>
     
  
                      
  </tbody>

 
</table>

<nav aria-label="Page navigation example" id="paginacao">
  <ul  class="pagination pg-blue justify-content-center paginacao mt-5">
    <li class="page-item ">
      <a class="page-link" href="/<?php 
          if($pagAtual[1]>1) {
            $pagina = $pagAtual[1]-1;
            echo $_SESSION['nomeTipoURL']."/". $pagina;} 
          else{ echo $_SESSION['nomeTipoURL']."/". $pagAtual;} ?>">Voltar</a>
    </li>
    <?php 
    $lim = 1; 
    $inicio = ((($pagAtual[1] - $lim) > 1) ? $pagAtual[1] - $lim : 1);
    $fim = ((($pagAtual[1]+$lim) < $num_pag) ? $pagAtual[1]+$lim : $num_pag);
   
    for($i = $inicio; $i <= $fim; $i++) { 
      $estilo = "";
      if($i == $pagAtual[1]){
        $estilo = "active";
      }?>
     <li class="page-item <?php echo $estilo; ?> " >
        <a class="page-link" href="/<?php echo $_SESSION['nomeTipoURL']."/".$i; ?>"><?php echo $i; ?></a>
      </li>
   <?php } ?>
    <li class="page-item">
      <a class="page-link" href="/<?php 
          if($pagAtual[1]<$i-1) {
            $pagina = $pagAtual[1]+1;
            echo  $_SESSION['nomeTipoURL']."/".$pagina;
          } 
          else{ 
            echo $_SESSION['nomeTipoURL']."/".$pagAtual[1];
          } 
          ?>" <?php if($pagAtual[1]>=$i-1) { echo 'style="background-color: rgb(99, 201, 175)!important;"'; } ?>>Próximo</a>
    </li>
  </ul>
</nav>

<h4 style="display: none; text-align: center" id="nenhumLicenca">Nenhuma licenca encontrada!</h4>