<!-- Modal -->
<div class="modal fade" id="deletarUsuario" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content contentDeletarUsuario">
      <div class="modal-header headerDeletarUsuario">
        <h5 class="modal-title" id="TituloModalCentralizado">Você tem certeza que deseja deletar?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>

        
      </div>
      <div class="modal-body bodyDeletarUsuario">
      
        <form id="deleteForm" method="post" class="cadastro">
       
        <input type="hidden" id="idDelete" name="id" >
        <input type="hidden" id="idPessoaDelete" name="idPessoa" >
       

        <button type="button" class="btn btn-danger" data-dismiss="modal">Não</button>
        <button type="submit" class="btn btn-danger" >Sim</button>
    
        </form>
       
        

      </div>
     
    </div>
  </div>
</div>