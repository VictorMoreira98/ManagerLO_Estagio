

<!-- Modal -->
<div class="modal fade" id="editarRegistro" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <!-- Material form register -->
        <div class="card cardLO">

        <h5 class="card-header white-text text-center py-4">
            <strong>Editar LO</strong>
        </h5>

        <!--Card content-->
        <div class="card-body px-lg-5 pt-0">

          <!-- Form -->
          <form id="editarLO" class="text-center" style="color: #757575;" method="post" >

            <input type="hidden" id="idLOEdit" name="idLO"  >
            <input type="hidden" id="idAreaEdit" name="idArea"  >
            <input type="hidden" id="idDragaEdit" name="idDraga"  >
            <input type="hidden" id="idTerminalEdit" name="idTerminal"  >
            <input type="hidden" id="idUser" name="idUser" value="<?php echo $_SESSION['id']?>" >
            <input type="hidden" id="idEmpresa" name="idEmpresa" value="<?php echo $_SESSION['idEmpresa']?>" >
            


            <!--Tipo--->
            <div class="md-form">
              <label for="favcity">
                <select class="classSelect" id="tipoEdit" name="tipo">
                <option value="1">Área</option>
                <option value="2">Draga</option>
                <option value="3">Terminal</option>
                </select>
              </label>
            </div>

            
           

            <!-- Status -->
            <div class="md-form">
              <label for="favcity">
                <select class="classSelect" id="statusEdit" name="status">
                <option value="1">LO Vigor</option>
                <option value="2">LO Prorrogada</option>
                <option value="3">LO Vencida</option>
                <option value="4">LO Solicitada</option>
                <option value="5">LO Suspensa</option>
                </select>
              </label>
            </div>

            


            <!-- LO -->
                <div class="md-form mt-7">
                <input type="number" id="nLOEdit" name="nLO"class="form-control"  >
                <label for="materialRegisterFormFirstName">Nº LO</label>
                </div>

                <div class="divNomeDraga" <?php if($_SESSION['tipoURL']==1 || $_SESSION['tipoURL']==3 ){echo 'style="display: none"';}?>>
            <!-- Nome Draga -->
            <div class="md-form mt-7">
                <input type="text" id="nomeDragaEdit" name="nomeDraga"class="form-control">
                <label for="materialRegisterFormFirstName">Nome Draga</label>
                </div>
            </div>

              <div class="divDNPM" <?php if($_SESSION['tipoURL']==2 || $_SESSION['tipoURL']==3 ){echo 'style="display: none"';}?> >
                 <!-- DNPM -->
                <div class="md-form formDNPMEditar mt-7">
                  <input type="number" id="dnpmEdit" name="dnpm"class="form-control">
                  <label for="materialRegisterFormFirstName">DNPM</label>
                </div>
                <div id="addDnpmEditar" >
                </div>
                <button type="button" class="btnAddCampo" id="addCampoEditar"  onclick="addDnpmEditar()">Adicionar DNPM <i class="fas fa-plus"></i></button>
                <button type="button" class="btnAddCampo" id="removerCampoEditar" style="display: none" onclick="removerDnpmEditar()">Remover DNPM <i class="fas fa-plus"></i></button>
              </div>
  

              

                
               
                  <!-- Nome Empresa -->
                <div class="md-form mt-2">
                <input type="text" id="empresaEdit" name="empresa" class="form-control" >
                <label for="materialRegisterFormFirstName">Empresa</label>
                </div>  
                    

                <!-- Data Vencimento -->
                <div class="md-form mt-2">
                    <input type="date" id="dtaVencEdit" name="dtaVenc" class="form-control" >
                    <label for="materialRegisterFormEmail">Data Vencimento</label>
                </div>

                </div>
           
                <div class="anexoArea">
                    <div class="input-file-container">  
                      <input class="input-file input-anexo-lo-edit" id="anexoLOEdit" name="anexoLO" type="file" >
                 
                      <label tabindex="0" for="my-file" class="input-file-trigger input-anexo-lo-trigger-edit" >Anexar LO</label>
                    </div>
                    <p class="file-return anexo-lo-return-edit" ></p>
                    
                </div>
                <div id="linkAnexo" class="divAnexos">
               
                </div>
                
                <div class="anexoProrrogacao" style="display: none"> 
                    <div class="input-file-container">  
                      <input class="input-file input-file-prorrogacao-edit" id="anexoProrrogacaoEdit" name="anexoProrrogacao" type="file">
                      <label tabindex="0" for="my-file" class="input-file-trigger input-anexo-prorrogacao-trigger-edit" id="testeT">Anexar Prorogação</label>
                    </div>
                    <p class="file-return anexo-prorrogacao-return-edit" ></p>
                   
                </div>
                <div id="linkAnexoProrrogacao" class="divAnexos">
               
               </div>
              
                    <div class="btnCadastrarLO">
                    <!-- Sign up button -->
                    <button class="btn md-4 btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0 " type="submit">Salvar Alterações</button>
                    </div>
                
                
              
            </form>
            <!-- Form -->

        </div>

        </div>
        <!-- Material form register -->

      
    </div>
    <?php  require_once 'includes/growl.php'; ?>
  </div>
</div>
<script type="text/javascript" src="<?php echo SITE_URL; ?>/js/anexoLOEdit.js"></script>
<script type="text/javascript" src="<?php echo SITE_URL; ?>/js/editarLO.js"></script>
<script type="text/javascript" src="<?php echo SITE_URL; ?>/js/formAjax.js"></script>
<script type="text/javascript" src="<?php echo SITE_URL; ?>/js/core/axios.min.js"></script>



