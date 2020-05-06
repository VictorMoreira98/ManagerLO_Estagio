let deletarFormUsuarioEmpresa = document.getElementById('deleteForm');
deletarFormUsuarioEmpresa.onsubmit = event => {
    event.preventDefault();

    if(deletarFormUsuarioEmpresa.checkValidity()){
        const bodyFormData = new FormData(deletarFormUsuarioEmpresa);
        
        
        callAction('/backend/usuarios/deletar/empresa', bodyFormData, (response) => {
            if(response.success){

                Swal.fire({
                    position: 'center',
                    icon: 'success',
                    title: 'Usuário removido',
                    showConfirmButton: false,
                    timer: 1500
                  })
                  setTimeout(function(){ 
                    location.reload();
                  }, 1500);
               
            }
            else{
                console.error(`Erro: ${response.message}`);
            }
        });
    }
}
