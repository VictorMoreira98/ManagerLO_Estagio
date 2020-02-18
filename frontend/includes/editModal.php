<!-- Modal -->
<div class="modal fade" id="ModalEdit" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="TituloModalCentralizado">Editar LO</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      
        <form action="" class="cadastro">
          <label for="nLO">Número LO</label>
          <input type="number" id="nLO" name="nLO" placeholder="número LO..">

          <label for="empreendedor">Empreendedor</label>
          <input type="text" id="empreendedor" name="empreendedor" placeholder="nome empreendedor..">

          <label for="dtaVenc">Data Vencimento</label>
          <input type="date" id="dtaVenc" name="dtaVenc" placeholder="Data Vencimento..">
          
          <label for="anexo">Anexar LO</label>
          <input id="anexo" name="anexo" class="input-file" type="file">

        </form>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        <button type="button" class="btn btn-save">Salvar mudanças</button>
      </div>
    </div>
  </div>
</div>