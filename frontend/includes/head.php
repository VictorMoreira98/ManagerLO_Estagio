<nav id="head">
        <ul>
            <img src="assets/logo.png">
            <li id="titulo"><h1>Manager LO </h1></li>
            <li id="login"><a href="/login"><img src="assets/user.png">
                <?php if(isset($nomeUser)){echo $nomeUser;} else{echo "Login";} ?></a></li>
          
            
        </ul>
</nav>