let editarFormUsuarioEmpresa = document.getElementById('editarUsuarioEmpresa');
editarFormUsuarioEmpresa.onsubmit = event => {
    event.preventDefault();

    if(editarFormUsuarioEmpresa.checkValidity()){
        const bodyFormData = new FormData(editarFormUsuarioEmpresa);
        
        
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

