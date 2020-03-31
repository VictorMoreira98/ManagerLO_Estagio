 <!--Navbar -->
            <nav id="head" class="mb-1 navbar navbar-expand-lg navbar-dark default-color ">
            

                    <div  id="nav-icon1" >
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                    
                   
                        <a class="navbar-brand ml-3" href="#">
                            <?php if($_SESSION['tipoURL'] == 1){ echo 'Áreas';}
                            else if($_SESSION['tipoURL'] == 2) {echo 'Dragas'; }
                            else if($_SESSION['tipoURL'] == 3) { echo 'Terminais'; }?></a>
                       
                        <div class=" " id="navbarSupportedContent" >
                        <ul class="nav navbar-nav ml-auto">
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
                                             <a class="dropdown-item" href="usuarios">Usuários</a>
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