
<!doctype html>

<html>
    <head>

        <meta charset="utf-8">
        
 
        
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
                    <!-- Font Awesome -->
            <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
            <!-- Google Fonts -->
            <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
            <!-- Bootstrap core CSS -->
            <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
            <!-- Material Design Bootstrap -->
            <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.13.0/css/mdb.min.css" rel="stylesheet">

            <!-- JQuery -->
            <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
            <!-- Bootstrap tooltips -->
            <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
            <!-- Bootstrap core JavaScript -->
            <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"></script>
            <!-- MDB core JavaScript -->
            <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.13.0/js/mdb.min.js"></script>

            
           
       
            <link rel="stylesheet" href="<?php echo SITE_URL; ?>includes/login/css/head.css">
            <link rel="stylesheet" href="<?php echo SITE_URL; ?>includes/login/css/search.css">
            <link rel="stylesheet" href="<?php echo SITE_URL; ?>includes/login/css/table.css">
            <link rel="stylesheet" href="<?php echo SITE_URL; ?>includes/login/css/editarUsuarioModal.css">
            <link rel="stylesheet" type="text/css" href="<?php echo SITE_URL; ?>includes/login/css/cadastrar.css">
            <link rel="stylesheet" href="<?php echo SITE_URL; ?>includes/login/css/cadastrarUsuarioModal.css">
            <link rel="stylesheet" href="<?php echo SITE_URL; ?>includes/login/css/deletarUsuario.css">
            

        <title></title>
    </head>
 
    <body>
    



           
          
    <div id="content">

       <!--Navbar -->
       <nav id="head" class="mb-1 navbar navbar-expand-lg navbar-dark default-color ">
            

            <a  class="icon-home" href="/">
            <i class="fas fa-arrow-circle-left fa-2x"></i>
            </a>
            
           
                <a class="navbar-brand ml-3" href="#">Usuários</a>
               
                <div class=" " id="navbarSupportedContent" >
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item dropdown">
                        
                    <li class="nav-item dropdown">
                                 <?php 
                                    //session_destroy(); 
                                    if(isset($_SESSION['nomeUsuario'])){
                                        if($_SESSION['tipo'] =='2'){
                                            echo ' <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false"> '.$_SESSION['nomeUsuario'].'
                                            <i class="fas fa-user"></i>
                                             </a>
                                             <div class="dropdown-menu dropdown-menu-right dropdown-default"
                                             aria-labelledby="navbarDropdownMenuLink-333">
                                             <a class="dropdown-item" href="#">Usuários</a>
                                             <a class="dropdown-item" href="#">Editar Conta</a>
                                             <a class="dropdown-item" href="sair" >Sair</a>
                                             </div>';

                                        } else{
                                            echo ' <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown"
                                       aria-haspopup="true" aria-expanded="false"> '.$_SESSION['nomeUsuario'].'
                                       <i class="fas fa-user"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right dropdown-default"
                                        aria-labelledby="navbarDropdownMenuLink-333">
                                        <a class="dropdown-item" href="#">Editar Conta</a>
                                        <a class="dropdown-item" href="sair" >Sair</a>
                                        </div>';

                                        }
                                       
                                    } else{ ?>
                                        <a class="nav-link "  href="login"> Login
                                        <i class="fas fa-user"></i>
                                         </a>
                                   
                                    <?php }?>


                            
                        </li>
                   
                </ul>
            </div>
             
         </nav>
         

        <?php 
        
        require_once "searchUsers.php"; ?>

       
        

    
        <div class="table-responsive">
            <table class="table " id="tablePesquisa">
                <thead>
                <tr>
                 
                    <th scope="col">Nome</th>
                    <th scope="col">Usuário</th>
                    <th scope="col">E-mail</th>
                    <th scope="col">Ações</th>
                   
                    
                </tr>
                </thead>
                <tbody id="tableBody">
                <?php 
                
                $users = json_decode(file_get_contents(
                    "http://localhost/backend/usuarios/".$_SESSION['idEmpresa']));
                    
                   // $variavelphp = "<script>$('#campoPesquisaUser').keyup(function(){ document.write(variaveljs); });</script>";
                
                  
                    /*function teste($param) {
                        $te = '<script>document.write(variaveljs);</script>';
                        echo $param;
                    }*/
                
                    
                    $num_total = count($users);
                    $itens_pag = 3;
                    $num_pag = ceil($num_total/$itens_pag);
                    $pagAtual = (isset($_GET['url'])) ? $_GET['url'] : 1;
                    $pagAtual = array_filter(explode('/',$pagAtual));
                    $pagAtual[1] = (!empty($pagAtual[1])) ? $pagAtual[1] : 1;
                    $i = ($itens_pag*$pagAtual[1]) - $itens_pag;
                    $fimPag = $itens_pag*$pagAtual[1];
                    
                    $usersEncode = json_encode($users);
                        echo'
                        <script type="text/javascript">
                            var objUser = '.$usersEncode.';   
                            </script>
                    ';
                
                    for($i = $i; $i < $fimPag; $i++) {
                        if(!empty($users[$i])){
                    echo '
                    <tr id="id_registro-user-'.$users[$i]->{'id'}.'"  >
                   
                    
                    <td data-label="Nome" >'.$users[$i]->{'nome'}.'</td>
                    <td data-label="Usuário">'.$users[$i]->{'usuario'}.'</td>
                    <td data-label="E-mail">'.$users[$i]->{'email'}.'</td>
                    <td style="display: none">'.$users[$i]->{'telefone'}.'</td>
                    <td style="display: none">'.$users[$i]->{'cpf'}.'</td>
                    <td style="display: none">'.$users[$i]->{'idPessoa'}.'</td>
                    <td style="display: none">'.$users[$i]->{'id'}.'</td>
                    <td style="display: none">'.$users[$i]->{'tipo'}.'</td>
                    <td>
                    <button class="btn btnActions" data-toggle="modal" data-target="#editarUsuario" onclick="editar(this)"><i class="fas fa-edit fa-1x"></i></button>
                    <button class="btn btnActions" data-toggle="modal" data-target="#deletarUsuario" onclick="deleteUserEmpresa(this)"><i class="fas fa-trash-alt fa-1x"></i></button>
                   
                     </td>
                </tr>
                    
                    ';
                    }}
                
                ?>
             
               
                </tbody>
            </table>
            
            <nav aria-label="Page navigation example" id="paginacao">
                    <ul  class="pagination pg-blue justify-content-center paginacao mt-5">
                        <li class="page-item ">
                        <a class="page-link" href="/<?php 
                            if($pagAtual[1]>1) {
                                $pagina = $pagAtual[1]-1;
                                echo "usuarios/". $pagina;} 
                            else{ echo "usuarios/". $pagAtual;} ?>">Voltar</a>
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
                            <a class="page-link" href="/<?php echo "usuarios/".$i; ?>"><?php echo $i; ?></a>
                        </li>
                    <?php } ?>
                        <li class="page-item">
                        <a class="page-link" href="/<?php 
                            if($pagAtual[1]<$i-1) {
                                $pagina = $pagAtual[1]+1;
                                echo "usuarios/".$pagina;
                            } 
                            else{ 
                                echo "usuarios/".$pagAtual[1];
                            } 
                            ?>" <?php if($pagAtual[1]>=$i-1) { echo 'style="background-color: rgb(99, 201, 175)!important;"'; } ?>>Próximo</a>
                        </li>
                    </ul>
            </nav>
        </div>
        <?php require "alertDeleteUsuario.php"; ?>
        <?php require "cadastrarUsuarioModal.php"; ?>
        <?php require "editarUsuarioModal.php"; ?>
       
    </div>


    </body>
</html>
<script src="<?php echo SITE_URL; ?>js/core/axios.min.js"></script>
<script src="<?php echo SITE_URL; ?>includes/login/js/cadastrarUsuarioModal.js"></script>
<script src="<?php echo SITE_URL; ?>includes/login/js/editarUsuarioModal.js"></script>
<script src="<?php echo SITE_URL; ?>includes/login/js/editarUsuarioEmpresa.js"></script>
<script src="<?php echo SITE_URL; ?>includes/login/js/deleteUserEmpresa.js"></script>
<script src="<?php echo SITE_URL; ?>includes/login/js/deletarUsuarioEmpresa.js"></script>
<script src="<?php echo SITE_URL; ?>js/formAjax.js"></script>


