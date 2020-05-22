<!-- Modal -->
<div class="modal fade" id="deletarLicenca" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content ">
      <div class="modal-header headerDeletarLicenca">
        <h5 class="modal-title" id="TituloModalCentralizado">Você tem certeza que deseja deletar?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>

        
      </div>
      <div class="modal-body ">
      
        <form id="deleteFormLicenca" method="post" class="cadastro">
       
        <input type="hidden" id="tipoL" name="tipo" >
        <input type="hidden" id="idLicenca" name="idLicenca" >
        <input type="hidden" id="idTipo" name="idTipo" >
        
       

        <button type="button" class="btn btn-danger" data-dismiss="modal">Não</button>
        <button type="submit" class="btn btn-danger" >Sim</button>
    
        </form>
       
        

      </div>
     
    </div>
  </div>
</div>

<script type="text/javascript" src="<?php echo SITE_URL; ?>/js/deletarLicenca.js"></script>
<script type="text/javascript" src="<?php echo SITE_URL; ?>/js/formAjax.js"></script>
<script type="text/javascript" src="<?php echo SITE_URL; ?>/js/core/axios.min.js"></script>