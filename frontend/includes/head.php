<nav id="head">
        <ul>
            <img src="assets/logo.png">
            <li id="titulo"><h1>Manager LO </h1></li>
            <li id="login"><a href="login"><img src="assets/user.png">
                <?php session_start(); 
                //session_destroy(); 
                if(isset($_SESSION['nomeUsuario'])){echo $_SESSION['nomeUsuario'];} else{echo "Login";} ?></a></li>
                
            
        </ul>

					
                               
</nav>


