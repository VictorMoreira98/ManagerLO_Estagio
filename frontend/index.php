<?php session_start(); ?>

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
                            
                    
           
            <link rel="stylesheet" href="css/sidebar.css">
            <link rel="stylesheet" href="css/head.css">
            <link rel="stylesheet" href="css/buttonMenu.css">
            <link rel="stylesheet" href="css/search.css">
            <link rel="stylesheet" href="css/cadastrarRegistroModal.css">
            <link rel="stylesheet" href="css/editRegistroModal.css">
            <link rel="stylesheet" href="css/table.css">
            <script type="text/javascript" src="js/buttonMenu.js"></script>
            <script type="text/javascript" src="js/table.js"></script>
            

        <title></title>
    </head>
 
    <body>
    <div class="wrapper">   

    <?php 
            
            $url = (isset($_GET['url'])) ? $_GET['url'] :'';
            $url = array_filter(explode('/',$url));
         
           
            if(!empty($url[0])){
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
            } else{
        
                require_once 'includes/sidebar.php'; 

        //<!-- Page Content  -->
        echo '<div id="content">';
               
         require_once 'includes/head.php'; 
            require_once 'includes/search.php';
            require_once 'includes/table.php'; 
            require_once 'includes/cadastrarRegistroModal.php';       
            require_once "includes/editRegistroModal.php";  }
        ?>
        </div>
    </div>
    </body>
           
</html>

 