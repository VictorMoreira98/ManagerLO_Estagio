<!-- Material form register -->
<div class="card">

    <h5 class="card-header white-text text-center py-4">
        <strong>Editar Conta</strong>
    </h5>

    <!--Card content-->
    <div class="card-body px-lg-5 pt-0">

        <!-- Form -->
    <form id="editarContaUsuario" class="text-center" style="color: #757575;" method="post">


    <?php 
                 $users = json_decode(file_get_contents(
                    "http://localhost/backend/editar-conta/".$_SESSION['id']."/".$_SESSION['tipo']));
                    
                       
                       ?>

        <div class="camposEditarConta mt-4">

            <input type="hidden" id="tipo" name="tipo" value="<?php echo $users[0]->{'tipo'}?>"/>
            <input type="hidden" id="id" name="id" value="<?php echo $users[0]->{'id'}?>"/>
            <input type="hidden" id="idEmpresa" name="idEmpresa" value="<?php echo $users[0]->{'idEmpresa'}?>"/>
            <input type="hidden" id="idPessoa" name="idPessoa" value="<?php echo $users[0]->{'idPessoa'}?>"/>
            <!-- Nome -->
            <label id="labelNome">Nome</label>
            <div class="md-form mt-0" >
            <input type="text" id="nomeEdit" name="nome" class="form-control mt-6 " value="<?php echo $users[0]->{'nome'}?>">
            </div>
            
            <!-- Usuario -->
            <label >Usuário</label>
                <div class="md-form mt-0">
                    <input type="text" id="usuarioEdit" name="usuario" class="form-control" value="<?php echo $users[0]->{'usuario'}?>">
                </div>
                
                

            <!-- E-mail -->
            <label >E&#8288;-&#8288;mail</label>
                <div class="md-form mt-0">
                    <input type="email" id="emailEdit" name="email" class="form-control" value="<?php echo $users[0]->{'email'}?>">
                </div>


            <!-- Phone number -->
            <label >Telefone</label>
            <div class="md-form mt-0">
                <input type="number" id="telefoneEdit" name="telefone" class="form-control" aria-describedby="materialRegisterFormPhoneHelpBlock" value="<?php echo $users[0]->{'telefone'}?>">
                

            </div>

            <?php if($users[0]->{'tipo'}==1){
                echo ' 
                <div class="cpf" style="display: none">
                <!-- CPF -->
                <label>CPF</label>
                <div class="md-form mt-0" id="cpf">
                    <input type="number" id="cpf" name="cpf" class="form-control" aria-describedby="materialRegisterFormPhoneHelpBlock" value="'.$users[0]->{'cpf'}.'">
                </div>

                </div>
                ';
            } else{
                echo '
                <div class="cnpj"  style="display: none">
                <!-- CNPJ -->
                <label>CNPJ</label>
                <div class="md-form mt-0" id="cnpj">
                    <input type="number" id="cnpj" name="cnpj" class="form-control" aria-describedby="materialRegisterFormPhoneHelpBlock" value="'.$users[0]->{'cnpj'}.'">
                    
            
                </div>';
            } ?>

           
           
            
        </div> 
            

        

            <!-- Password -->
            <div class="md-form">
                <input type="password" id="senha" name="senha" class="form-control" aria-describedby="materialRegisterFormPasswordHelpBlock">
                <label for="materialRegisterFormPassword">Senha</label>
            
            </div>

            
        

            <!-- Sign up button -->
            <button class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0 " type="submit">Salvar Alterações</button>

        
            <hr>

   
</form>
<!-- Form -->
    <?php  require_once 'includes/growl.php'; ?>
    </div>

</div>
<!-- Material form register -->

  <script>
  window.onload = function () {
    if ($('input[name="tipo"]:checked').val() === "1") {
        $('.cpf').show();
        $('.cnpj').hide();
    } else {
        $('.cpf').hide();
        $('.cnpj').show();
    }
};

$('input[name="tipo"]').change(function () {
    if ($('input[name="tipo"]:checked').val() === "1") {
        $('.cpf').show();
        $('.cnpj').hide();
    } else {
        $('.cpf').hide();
        $('.cnpj').show();
    }
});


  </script>
