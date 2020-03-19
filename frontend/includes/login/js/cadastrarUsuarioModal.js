let cadastrarFormUsuarioEmpresa = document.getElementById('cadastrarUsuarioEmpresa');
cadastrarFormUsuarioEmpresa.onsubmit = event => {
    event.preventDefault();

    if(cadastrarFormUsuarioEmpresa.checkValidity()){
        const bodyFormData = new FormData(cadastrarFormUsuarioEmpresa);
        
        
        callAction('/backend/cadastrar', bodyFormData, (response) => {
            if(response.success){
                window.location.href = 'usuarios';
            }
            else{
                console.error(`Erro: ${response.message}`);
            }
        });
    }
}

