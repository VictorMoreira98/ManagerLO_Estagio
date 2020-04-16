<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V3</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="<?php echo SITE_URL; ?>/includes/login/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo SITE_URL; ?>/includes/login/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo SITE_URL; ?>/includes/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo SITE_URL; ?>/includes/login/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo SITE_URL; ?>/includes/login/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?php echo SITE_URL; ?>/includes/login/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo SITE_URL; ?>/includes/login/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo SITE_URL; ?>/includes/login/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?php echo SITE_URL; ?>/includes/login/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo SITE_URL; ?>/includes/login/css/util.css">
	<link rel="stylesheet" type="text/css" href="<?php echo SITE_URL; ?>/includes/login/css/main.css">
	<link rel="stylesheet" type="text/css" href="<?php echo SITE_URL; ?>/includes/login/css/cadastrar.css">
	<link rel="stylesheet" type="text/css" href="<?php echo SITE_URL; ?>/includes/login/css/head.css">
	<link rel="stylesheet" href="<?php echo SITE_URL; ?>/includes/login/css/editarContaUsuario.css">
	
<!--===============================================================================================-->
	
</head>
<body>
	
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('./includes/login/images/bg-01.jpg');">
		<?php 
			 $url = (isset($_GET['url'])) ? $_GET['url'] :'';
			 $url = array_filter(explode('/',$url));


			 if(!empty($url[0])){
                if($url[0] =="login"){
                    
                include "logar.php";
                } else if($url[0] == "cadastrar"){
                    include "cadastrar.php";
                } else if($url[0] == "editar-conta"){
					include "editarContaUsuario.php";
				} 
                else{
                    echo 'error 404';
                }
			 }
		
		?>
			
		</div>
	</div>
	
	
	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="<?php echo SITE_URL; ?>/includes/login/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo SITE_URL; ?>/includes/login/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo SITE_URL; ?>/includes/login/vendor/bootstrap/js/popper.js"></script>
	<script src="<?php echo SITE_URL; ?>/includes/login/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo SITE_URL; ?>/includes/login/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo SITE_URL; ?>/includes/login/vendor/daterangepicker/moment.min.js"></script>
	<script src="<?php echo SITE_URL; ?>/includes/login/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo SITE_URL; ?>/includes/login/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo SITE_URL; ?>/includes/login/js/main.js"></script>

	<script src="<?php echo SITE_URL; ?>/js/core/axios.min.js"></script>
    <script src="<?php echo SITE_URL; ?>/js/formAjax.js"></script>
	<script src="<?php echo SITE_URL; ?>/includes/login/js/login.js"></script>
	<script src="<?php echo SITE_URL; ?>/includes/login/js/editarContaUsuario.js"></script>
	<script src="<?php echo SITE_URL; ?>/includes/login/js/cadastrarUsuario.js"></script>
	
	
	

</body>
</html>