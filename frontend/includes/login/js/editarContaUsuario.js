let editarFormContaUsuario = document.getElementById('editarContaUsuario');
editarFormContaUsuario.onsubmit = event => {
    event.preventDefault();

    if(editarFormContaUsuario.checkValidity()){
        const bodyFormData = new FormData(editarFormContaUsuario);
        
        
        callAction('/backend/usuarios/edit', bodyFormData, (response) => {
            if(response.success){
                window.location.href = 'usuarios';
            }
            else{
                console.error(`Erro: ${response.message}`);
            }
        });
    }
}

