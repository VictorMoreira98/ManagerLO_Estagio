let editarFormLO = document.getElementById('editarLO');
editarFormLO.onsubmit = event => {
    event.preventDefault();

    if(editarFormLO.checkValidity()){
        const bodyFormData = new FormData(editarFormLO);
        
        
        callAction('/backend/editar/lo', bodyFormData, (response) => {
            if(response.success){
                window.location.href = '/';
            }
            else{
                console.error(`Erro: ${response.message}`);
            }
        });
    }
}

