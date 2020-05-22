let loginForm = document.getElementById('loginArea');
loginForm.onsubmit = event => {
    event.preventDefault();

    if(loginForm.checkValidity()){
        const bodyFormData = new FormData(loginForm);
        
        
        callAction('/backend/login', bodyFormData, (response) => {
            if(response.success){
                window.location.href = './';
            }
            else{
                console.error(`Erro: ${response.message}`);
                displayGrowl("E-mail ou senha inválidos!!");
            }
        });
    }
}

