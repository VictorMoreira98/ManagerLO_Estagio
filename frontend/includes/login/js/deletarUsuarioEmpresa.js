let deletarFormUsuarioEmpresa = document.getElementById('deleteForm');
deletarFormUsuarioEmpresa.onsubmit = event => {
    event.preventDefault();

    if(deletarFormUsuarioEmpresa.checkValidity()){
        const bodyFormData = new FormData(deletarFormUsuarioEmpresa);
        
        
        callAction('/backend/usuarios/deletar/empresa', bodyFormData, (response) => {
            if(response.success){
                window.location.href = 'usuarios';
            }
            else{
                console.error(`Erro: ${response.message}`);
            }
        });
    }
}
