let cadastrarFormLO = document.getElementById('cadastrarLO');
cadastrarFormLO.onsubmit = event => {
    event.preventDefault();

    if(cadastrarFormLO.checkValidity()){
        const bodyFormData = new FormData(cadastrarFormLO);
        
        
        callAction('/backend/cadastrar/lo', bodyFormData, (response) => {
            if(response.success){
                window.location.href = '/';
            }
            else{
                console.error(`Erro: ${response.message}`);
            }
        });
    }
}

