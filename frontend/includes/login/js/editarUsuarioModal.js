let editarFormUsuarioEmpresa = document.getElementById('editarUsuarioEmpresa');
editarFormUsuarioEmpresa.onsubmit = event => {
    event.preventDefault();

    if(editarFormUsuarioEmpresa.checkValidity()){
        const bodyFormData = new FormData(editarFormUsuarioEmpresa);
        
        
        callAction('/backend/usuarios/edit', bodyFormData, (response) => {
            if(response.success){
                //fecha modal
                $('#editarUsuario').css({opacity: 0}).hide(); 

                Swal.fire({
                    position: 'center',
                    icon: 'success',
                    title: 'Usuário editado',
                    showConfirmButton: false,
                    timer: 1500
                  })
                  setTimeout(function(){ 
                    location.reload();
                  }, 1500);
            }
            else{
                console.error(`Erro: ${response.message}`);
                displayGrowl(response.message);
            }
        });
    }
}

