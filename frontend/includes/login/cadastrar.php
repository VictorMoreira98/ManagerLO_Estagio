<!-- Material form register -->
<div class="card">

    <h5 class="card-header white-text text-center py-4">
        <strong>Cadastro</strong>
    </h5>

    <!--Card content-->
    <div class="card-body px-lg-5 pt-0">

        <!-- Form -->
        <form id="cadastrarArea" class="text-center" style="color: #757575;" method="post">

           
        
        <!-- Fisica -->
        <div class="custom-control custom-radio mt-4">
        <input type="radio" class="custom-control-input " id="cpf" name="tipo" value="1">
        <label class="custom-control-label" for="cpf">P. Fisíca</label>
        </div>
               
        <!-- Juridica -->
        <div class="custom-control custom-radio" >
        <input type="radio" class="custom-control-input" id="cnpj" name="tipo" value="2" >
        <label class="custom-control-label" for="cnpj">P. Jurídica</label>
        </div>


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

                    
            
                    
            <div class="cpf" style="display: none">
                 <!-- CPF -->
            <div class="md-form" id="cpf">
                <input type="number" id="cpf" name="cpf" class="form-control" aria-describedby="materialRegisterFormPhoneHelpBlock">
                <label for="materialRegisterFormPhone">CPF</label>
        
            </div>

            </div>

           
            <div class="cnpj"  style="display: none">
            <!-- CNPJ -->
            <div class="md-form" id="cnpj">
                <input type="number" id="cnpj" name="cnpj" class="form-control" aria-describedby="materialRegisterFormPhoneHelpBlock">
                <label for="materialRegisterFormPhone">CNPJ</label>
        
            </div>
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

</div>
<!-- Material form register -->

  <script>
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
