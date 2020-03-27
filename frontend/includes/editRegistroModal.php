


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

            <input type="hidden" id="idLO" name="idLO"  >
            


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
                      <input class="input-file" id="" name="anexo"type="file" value="teste">
                      <label tabindex="0" for="my-file" class="input-file-trigger">Anexar LO</label>
                    </div>
                    <p class="file-return" id="anexoEdit"></p>
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
  </div>
</div>
<script type="text/javascript" src="js/anexoLO.js"></script>
<script type="text/javascript" src="js/editarLO.js"></script>
<script type="text/javascript" src="js/formAjax.js"></script>
<script type="text/javascript" src="js/core/axios.min.js"></script>




