<div class="fab">
  <button class="main" data-toggle="modal" data-target="#modalUserEmpresa" >
  </button>
  
</div>


<!-- Modal -->
<div class="modal fade" id="modalUserEmpresa" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
    <div class="card">

<h5 class="card-header white-text text-center py-4">
    <strong>Cadastrar Usuário</strong>
</h5>

<!--Card content-->
<div class="card-body px-lg-5 pt-0">

    <!-- Form -->
    <form id="cadastrarUsuarioEmpresa" class="text-center" style="color: #757575;" method="post">

       
    
   
    <input type="hidden" id="tipo" name="tipo" value="1" >
    <input type="hidden" id="idEmpresa" name="idEmpresa" value="<?php echo $_SESSION['idEmpresa']?>" >


     <!-- Nome -->
        <div class="md-form">
         <input type="text" id="nome" name="nome"class="form-control">
         <label for="materialRegisterFormFirstName">Nome</label>
         </div>

          <!-- Usuario -->
        <div class="md-form">
         <input type="text" id="usuario" name="usuario" class="form-control">
         <label for="materialRegisterFormFirstName">Usuário</label>
         </div>
                
            

        <!-- E-mail -->
        <div class="md-form mt-0">
            <input type="email" id="email" name="email" class="form-control">
            <label for="materialRegisterFormEmail">E-mail</label>
        </div>

        <!-- Phone number -->
        <div class="md-form">
            <input type="number" id="telefone" name="telefone" class="form-control" aria-describedby="materialRegisterFormPhoneHelpBlock">
            <label for="materialRegisterFormPhone">Telefone</label>
    
        </div>

                
        
                
        
             <!-- CPF -->
        <div class="md-form" id="cpf">
            <input type="number" id="cpf" name="cpf" class="form-control" aria-describedby="materialRegisterFormPhoneHelpBlock">
            <label for="materialRegisterFormPhone">CPF</label>
    
        </div>

        

      

        <!-- Password -->
        <div class="md-form">
            <input type="password" id="senha" name="senha" class="form-control" aria-describedby="materialRegisterFormPasswordHelpBlock">
            <label for="materialRegisterFormPassword">Senha</label>
        
        </div>

        
       

        <!-- Sign up button -->
        <button class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0" type="submit">Cadastrar</button>

       
        <hr>

       
    </form>
    <!-- Form -->

</div>
<?php  require_once 'includes/growl.php'; ?>
</div>
    </div>
  </div>
</div>