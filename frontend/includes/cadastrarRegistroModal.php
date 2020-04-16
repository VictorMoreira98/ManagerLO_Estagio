

<div class="fab">
  <button class="main" data-toggle="modal" data-target="#cadastrarRegistro" >
  </button>
  
</div>


<!-- Modal -->
<div class="modal fade" id="cadastrarRegistro" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <!-- Material form register -->
        <div class="card cardLO">

        <h5 class="card-header white-text text-center py-4">
            <strong>Cadastrar LO</strong>
        </h5>

        <!--Card content-->
        <div class="card-body px-lg-5 pt-0">

          <!-- Form -->
          <form id="cadastrarLO" class="text-center" style="color: #757575;" method="post" enctype="multipart/form-data">

            <input type="hidden" id="idUser" name="idUser" value="<?php echo $_SESSION['id']?>" >
            <input type="hidden" id="idEmpresa" name="idEmpresa" value="<?php echo $_SESSION['idEmpresa']?>" >

       
           

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



            <!-- Status -->
            <div class="md-form">
              <label for="favcity">
                <select class="classSelect" id="status" name="status">
                <option value="1">LO Vigor</option>
                <option value="2">LO Prorrogada</option>
                <option value="3">LO Vencida</option>
                <option value="4">LO Solicitada</option>
                <option value="5">LO Suspensa</option>
                </select>
              </label>
            </div>

            <div class="divNomeDraga"style="display: none">
            <!-- Nome Draga -->
            <div class="md-form mt-7">
                <input type="text" id="nomeDraga" name="nomeDraga"class="form-control">
                <label for="materialRegisterFormFirstName">Nome Draga</label>
                </div>
            </div>

            <!-- LO -->
                <div class="md-form mt-7">
                <input type="number" id="nLO" name="nLO"class="form-control">
                <label for="materialRegisterFormFirstName">Nº LO</label>
                </div>
              
              <div class="divDNPM" style="display: none" >
                 <!-- DNPM -->
                <div class="md-form mt-7">
                <input type="number" id="dnpm" name="dnpm"class="form-control">
                <label for="materialRegisterFormFirstName">DNPM</label>
                </div>
              </div>
                
                <?php if(!empty($_SESSION['nomeEmpresa'])){ ?>
                  <!-- Nome Empresa -->
                <div class="md-form mt-2">
                <input type="text" id="empresa" name="empresa" class="form-control" value="<?php echo $_SESSION['nomeEmpresa'];?>">
                <label for="materialRegisterFormFirstName">Empresa</label>
                </div>

                <?php } else{ ?>

                <!-- Nome Empresa -->
                <div class="md-form mt-2">
                <input type="text" id="empresa" name="empresa" class="form-control">
                <label for="materialRegisterFormFirstName">Empresa</label>
                </div>
                <?php } ?>

                        
                    

                <!-- Data Vencimento -->
                <div class="md-form mt-2">
                    <input type="date" id="dtaVenc" name="dtaVenc" class="form-control">
                    <label for="materialRegisterFormEmail">Data Vencimento</label>
                </div>

                </div>

                <div class="anexoArea">
                    <div class="input-file-container">  
                      <input class="input-file input-anexo-lo" id="anexo" name="anexoLO" type="file" >
                      <label tabindex="0" for="my-file" class="input-file-trigger input-anexo-lo-trigger" >Anexar LO</label>
                    </div>
                    <p class="file-return anexo-lo-return" ></p>
                </div>

                <div class="anexoProrrogacao" style="display: none"> 
                    <div class="input-file-container">  
                      <input class="input-file input-file-prorrogacao"  name="anexoProrrogacao" type="file">
                      <label tabindex="0" for="my-file" class="input-file-trigger input-anexo-prorrogacao-trigger" id="testeT">Anexar Prorogação</label>
                    </div>
                    <p class="file-return anexo-prorrogacao-return"></p>
                </div>

              
                    
                    <div class="btnCadastrarLO">
                   
                    <!-- Sign up button -->
                    <button class="btn md-4 btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0 " type="submit">Cadastrar</button>
                    </div>
                
                
              
            </form>
            <!-- Form -->

        </div>

        </div>
        <!-- Material form register -->

      
    </div>
  </div>
</div>
<script type="text/javascript" src="<?php echo SITE_URL; ?>/js/anexoLO.js"></script>
<script type="text/javascript" src="<?php echo SITE_URL; ?>/js/cadastrarLO.js"></script>
<script type="text/javascript" src="<?php echo SITE_URL; ?>/js/formAjax.js"></script>
<script type="text/javascript" src="<?php echo SITE_URL; ?>/js/core/axios.min.js"></script>
