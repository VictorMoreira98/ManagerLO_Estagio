
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

                    
           
       
            <link rel="stylesheet" href="./includes/login/css/head.css">
            <link rel="stylesheet" href="./includes/login/css/search.css">
            <link rel="stylesheet" href="./includes/login/css/table.css">
            <link rel="stylesheet" href="./includes/login/css/editarUsuarioModal.css">
            <link rel="stylesheet" type="text/css" href="./includes/login/css/cadastrar.css">
            <link rel="stylesheet" href="./includes/login/css/cadastrarUsuarioModal.css">
            <link rel="stylesheet" href="./includes/login/css/deletarUsuario.css">
            

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

        
    
        <!-- Search form -->
        <form class="form-inline d-flex justify-content-center md-form form-sm active-cyan-2 mt-2">
        <input class="form-control form-control-sm mr-3 w-75" type="text" placeholder="Search"
            aria-label="Search">
        <i class="fas fa-search" aria-hidden="true"></i>
        </form>
        

    
        <div class="table-responsive">
            <table class="table ">
                <thead>
                <tr>
                 
                    <th scope="col">Nome</th>
                    <th scope="col">Usuário</th>
                    <th scope="col">E-mail</th>
                    <th scope="col">Ações</th>
                   
                    
                </tr>
                </thead>
                <tbody>
                <?php 
                 $users = json_decode(file_get_contents(
                    "http://localhost/backend/usuarios/".$_SESSION['idEmpresa']));
                    

                    for($i = 0; $i < count($users); $i++) {
                       
                    echo '
                    <tr>
                   
                    
                    <td>'.$users[$i]->{'nome'}.'</td>
                    <td>'.$users[$i]->{'usuario'}.'</td>
                    <td>'.$users[$i]->{'email'}.'</td>
                    <td style="display: none">'.$users[$i]->{'telefone'}.'</td>
                    <td style="display: none">'.$users[$i]->{'cpf'}.'</td>
                    <td style="display: none">'.$users[$i]->{'idPessoa'}.'</td>
                    <td style="display: none">'.$users[$i]->{'id'}.'</td>
                    <td>
                    <button class="btn btnActions" data-toggle="modal" data-target="#editarUsuario" onclick="editar(this)"><i class="fas fa-edit fa-1x"></i></button>
                    <button class="btn btnActions" data-toggle="modal" data-target="#deletarUsuario" onclick="deleteUserEmpresa(this)"><i class="fas fa-trash-alt fa-1x"></i></button>
                   
                     </td>
                </tr>
                    
                    ';
                    }
                
                ?>
             
               
                </tbody>
            </table>
        </div>
        <?php require "cadastrarUsuarioModal.php"; ?>
        <?php require "editarUsuarioModal.php"; ?>
        <?php require "alertDeleteUsuario.php"; ?>
    </div>
    </body>
</html>
<script src="./js/core/axios.min.js"></script>
<script src="./includes/login/js/cadastrarUsuarioModal.js"></script>
<script src="./includes/login/js/editarUsuarioModal.js"></script>
<script src="./includes/login/js/editarUsuarioEmpresa.js"></script>
<script src="./includes/login/js/deleteUserEmpresa.js"></script>
<script src="./includes/login/js/deletarUsuarioEmpresa.js"></script>
<script src="./js/formAjax.js"></script>


