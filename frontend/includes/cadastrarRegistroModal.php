

<div class="fab">
  <button class="main" data-toggle="modal" data-target="#cadastrarRegistro" >
  </button>
  
</div>


<!-- Modal -->
<div class="modal fade" id="cadastrarRegistro" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content conteudoModal" >
      <!-- Material form register -->
        <div class="card cardLO" >

        <h5 class="card-header white-text text-center py-4">
            <strong>Cadastrar Licença</strong>
        </h5>

        <!--Card content-->
        <div class="card-body px-lg-5 pt-0">

          <!-- Form -->
          <form id="cadastrarLO" class="text-center cadastrarLO" style=" color: #757575; " method="post" enctype="multipart/form-data">

            <input type="hidden" id="idUser" name="idUser" value="<?php echo $_SESSION['id']?>" >
            <input type="hidden" id="idEmpresa" name="idEmpresa" value="<?php echo $_SESSION['idEmpresa']?>" >

          <div class="container">
             <div class="row">
                <div class="col-sm">
                   <!--Tipo--->
                    <div class="md-form">
                      <label for="favcity">
                        <select class="classSelect" id="tipo" name="tipo">
                        <option value="0">Tipo</option>
                        <option value="1">Área</option>
                        <option value="2">Draga</option>
                        <option value="3">Terminal</option>
                        </select>
                      </label>
                    </div>
                </div>
                <div class="col-sm">
                      <!-- Status -->
                      <div class="md-form">
                        <label for="favcity">
                          <select class="classSelect" id="status" name="status">
                          <option value="1">Licença Vigor</option>
                          <option value="2">Licença Prorrogada</option>
                          <option value="3">Licença Vencida</option>
                          <option value="4">Licença Solicitada</option>
                          <option value="5">Licença Suspensa</option>
                          </select>
                        </label>
                      </div>
                </div>


                <div class="col-sm">
                          <!-- LO -->
                      <div class="md-form nLO">
                      <input type="number" id="nLO" name="nLO"class="form-control">
                      <label for="materialRegisterFormFirstName">Nº Licença</label>
                      </div>
                </div>



                
            </div>
        
           

           



            

            <div class="divNomeDraga"style="display: none">
            <!-- Nome Draga -->
            <div class="md-form mt-7">
                <input type="text" id="nomeDraga" name="nomeDraga"class="form-control">
                <label for="materialRegisterFormFirstName">Nome Draga</label>
                </div>
            </div>
              
           
          <div class="divDNPM" style="display: none" >
             
            <div class="row">
              <div class="col-sm">
                 <!-- DNPM -->
                <div class="md-form formDNPM mt-7">
                <input type="number" id="dnpm" name="dnpm"class="form-control">
                <label for="materialRegisterFormFirstName">DNPM</label>
                </div>
              </div>
            </div>
              
                <div id="addDnpm" class="row" >
                
                </div>
              

                <button type="button" class="btnAddCampo" id="addCampo"  onclick="addDnpm()"><i class="fas fa-plus"></i> DNPM </button>
                <button type="button" class="btnAddCampo" id="removerCampo" style="display: none" onclick="removerDnpm()"><i class="fas fa-minus"></i> DNPM </button>
           
          </div>
          
          
                
                <?php if(!empty($_SESSION['nomeEmpresa'])){ ?>
                  <!-- Nome Empresa -->
               <div class="row">
                <div class="col-sm">
                  <div class="md-form mt-2">
                  <input type="text" id="empresa" name="empresa" class="form-control" value="<?php echo $_SESSION['nomeEmpresa'];?>">
                  <label for="materialRegisterFormFirstName">Empresa</label>
                  </div>
                </div>
              </div>

                <?php } else{ ?>

                <!-- Nome Empresa -->
             <div class="row">
              <div class="col-sm">
                <div class="md-form mt-2">
                <input type="text" id="empresa" name="empresa" class="form-control">
                <label for="materialRegisterFormFirstName">Empresa</label>
                </div>
              </div>
            </div>
                <?php } ?>

                        
                    

                <!-- Data Vencimento -->
             <div class="row">
               <div class="col-sm">
                  <div class="md-form mt-2">
                      <input type="date" id="dtaVenc" name="dtaVenc" class="form-control">
                      <label for="materialRegisterFormEmail">Data Vencimento</label>
                  </div>
                </div>
              </div>
                </div>
              

             <div class="row">
               <div class="col-sm">
                <div class="anexoArea">
                    <div class="input-file-container">  
                      <input class="input-file input-anexo-lo" id="anexo" name="anexoLO" type="file" >
                      <label tabindex="0" for="my-file" class="input-file-trigger input-anexo-lo-trigger" >Anexar Licença</label>
                    </div>
                    <p class="file-return anexo-lo-return" ></p>
                </div>
              </div>
                  
              <div class="col-sm">
                <div class="anexoProrrogacao" style="display: none"> 
                    <div class="input-file-container">  
                      <input class="input-file input-file-prorrogacao"  name="anexoProrrogacao" type="file">
                      <label tabindex="0" for="my-file" class="input-file-trigger input-anexo-prorrogacao-trigger" id="testeT">Anexar Prorogação</label>
                    </div>
                    <p class="file-return anexo-prorrogacao-return"></p>
                </div>
              </div>
             </div>
        
                    
                    <div class="btnCadastrarLO">
                   
                    <!-- Sign up button -->
                    <button class="btn md-4 btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0 " type="submit">Cadastrar</button>
                    </div>
            </div><!-- Encerramento container -->     
                
              
            </form>
            <!-- Form -->

        </div>

        </div>
        <!-- Material form register -->

      
    </div>
    <?php  require_once 'includes/growl.php'; ?>
  </div>
  
</div>

<script type="text/javascript" src="<?php echo SITE_URL; ?>/js/anexoLO.js"></script>
<script type="text/javascript" src="<?php echo SITE_URL; ?>/js/cadastrarLO.js"></script>
<script type="text/javascript" src="<?php echo SITE_URL; ?>/js/formAjax.js"></script>
<script type="text/javascript" src="<?php echo SITE_URL; ?>/js/core/axios.min.js"></script>
