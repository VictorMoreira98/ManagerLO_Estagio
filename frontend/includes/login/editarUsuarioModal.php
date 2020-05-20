


<!-- Modal -->
<div class="modal fade" id="editarUsuario" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content conteudoModalEditUser">
    <div class="card">

<h5 class="card-header white-text text-center py-4">
    <strong>Editar Usuário</strong>
</h5>

<!--Card content-->
<div class="card-body px-lg-5 pt-0">

    <!-- Form -->
    <form id="editarUsuarioEmpresa" class="text-center editarUsuarioEmpresa" style="color: #757575;" method="post">

       
    
   
    
    <input type="hidden" id="idEmpresa" name="idEmpresa" value="<?php echo $_SESSION['idEmpresa']?>" >
    <input type="hidden" id="idPessoaEdit" name="idPessoa" >
    <input type="hidden" id="idEdit" name="id" >
    <input type="hidden" id="tipoEdit" name="tipo" >
   

    <br>
     <div class="camposEditarUser" >

     <div class="container">
        <div class="row">
            <div class="col-sm">
                <!-- Nome -->
                <label id="labelNome">Nome</label>
                <div class="md-form mt-0" >
                <input type="text" id="nomeEdit" name="nome" class="form-control mt-6 " >
                </div>
            </div>
                
            <div class="col-sm">
                <!-- Usuario -->
                <label >Usuário</label>
                    <div class="md-form mt-0">
                        <input type="text" id="usuarioEdit" name="usuario" class="form-control">
                    </div>
            </div>
        </div>
        
            

        <!-- E-mail -->
        <label >E&#8288;-&#8288;mail</label>
            <div class="md-form mt-0">
                <input type="email" id="emailEdit" name="email" class="form-control">
            </div>

    
        <!-- Phone number -->
        <label >Telefone</label>
        <div class="md-form mt-0">
            <input type="number" id="telefoneEdit" name="telefone" class="form-control" aria-describedby="materialRegisterFormPhoneHelpBlock">
            
    
        </div>

             <!-- CPF -->
             <label >CPF</label>
        <div class="md-form mt-0" id="cpf">
            <input type="number" id="cpfEdit" name="cpf" class="form-control" aria-describedby="materialRegisterFormPhoneHelpBlock">
        </div>
    
        

      

        <!-- Password -->
        <div class="md-form">
            <input type="password" id="senha" name="senha" class="form-control" aria-describedby="materialRegisterFormPasswordHelpBlock">
            <label for="materialRegisterFormPassword">Senha</label>
        
        </div>

        
       

        <!-- Sign up button -->
        <button class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0 " type="submit">Salvar Alterações</button>

       
        <hr>

    </div>
    
       
    </form>
    <!-- Form -->

</div>

</div>
    </div>
  </div>
</div>