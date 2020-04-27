let editarFormContaUsuario = document.getElementById('editarContaUsuario');
editarFormContaUsuario.onsubmit = event => {
    event.preventDefault();

    if(editarFormContaUsuario.checkValidity()){
        const bodyFormData = new FormData(editarFormContaUsuario);
        
        
        callAction('/backend/usuarios/edit', bodyFormData, (response) => {
            if(response.success){
                

                Swal.fire({
                    position: 'center',
                    icon: 'success',
                    title: 'Sua conta foi atualizada',
                    showConfirmButton: false,
                    timer: 1500
                  })
                  setTimeout(function(){ 
                    window.location.href = '/';
                  }, 1500);
            }
            else{
                console.error(`Erro: ${response.message}`);
                displayGrowl(response.message);
            }
        });
    }
}

