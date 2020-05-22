<?php session_start(); 
    define('SITE_URL', ' http://localhost/frontend/');

?>

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
         
            <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
           
                    
           
            <link rel="stylesheet" href="<?php echo SITE_URL; ?>css/sidebar.css">
            <link rel="stylesheet" href="<?php echo SITE_URL; ?>css/head.css">
            <link rel="stylesheet" href="<?php echo SITE_URL; ?>css/buttonMenu.css">
            <link rel="stylesheet" href="<?php echo SITE_URL; ?>css/search.css">
            <link rel="stylesheet" href="<?php echo SITE_URL; ?>css/cadastrarRegistroModal.css">
            <link rel="stylesheet" href="<?php echo SITE_URL; ?>css/editRegistroModal.css">
            <link rel="stylesheet" href="<?php echo SITE_URL; ?>css/table.css">
            <link rel="stylesheet" href="<?php echo SITE_URL; ?>css/growl.css">
            <link rel="stylesheet" href="<?php echo SITE_URL; ?>css/deleteLicenca.css">
            <script type="text/javascript" src="<?php echo SITE_URL; ?>js/buttonMenu.js"></script>
            <script type="text/javascript" src="<?php echo SITE_URL; ?>js/table.js"></script>
            <script type="text/javascript" src="<?php echo SITE_URL; ?>js/functionEditarLO.js"></script>
            <script type="text/javascript" src="<?php echo SITE_URL; ?>js/growl.js"></script>
            
            

        <title></title>
    </head>
 
    <body >
    <div class="wrapper">   

    <?php 
     $url = (isset($_GET['url'])) ? $_GET['url'] :'';
     $url = array_filter(explode('/',$url));
     
        if(isset($_SESSION['logado'])){
            $url = (isset($_GET['url'])) ? $_GET['url'] :'';
            $url = array_filter(explode('/',$url));
           
            if(empty($url[0]) || !empty($url[1]) && !$url[0] == "usuarios" || $url[0] == "areas" ||  $url[0] == "dragas" || $url[0] == "terminais")
           
            {
                if(empty($url[0]) || $url[0] == "areas"){
                    $_SESSION['tipoURL'] = 1;
                } else if($url[0] =="dragas"){
                    $_SESSION['tipoURL'] = 2;
                } else if($url[0] == "terminais"){
                    $_SESSION['tipoURL'] = 3;
                } 
                
                require_once 'includes/sidebar.php'; 
    
                //<!-- Page Content  -->
                echo '<div id="content">';
                    
                require_once 'includes/head.php'; 
                require_once 'includes/search.php';
                require_once 'includes/table.php'; 
                require_once 'includes/cadastrarRegistroModal.php';       
                require_once 'includes/editRegistroModal.php';  
                require_once 'includes/deleteLicenca.php';  
               
           
                
            } else{
                if($url[0] =="login"){
                
                include "./includes/login/index.php";
                } else if($url[0] == "sair"){
                    include "./includes/login/logout.php";
                } else if($url[0] == "cadastrar"){
                    include "./includes/login/index.php";
                } else if($url[0] == "editar-conta"){
                    include "./includes/login/index.php";
                } 
                else if($url[0] == "usuarios"){
                    include "./includes/login/homeUsuarios.php";
                }
                else{
                    echo 'error 404';
                }
            }
        } else{
            include "./includes/login/index.php";
                 
            //header("Location:  http://localhost/frontend/login");
        }
        ?>
        </div>
    </div>

    
    </body>
           
</html>



        