let cadastrarFormUsuarioEmpresa = document.getElementById('cadastrarUsuarioEmpresa');
cadastrarFormUsuarioEmpresa.onsubmit = event => {
    event.preventDefault();

    if(cadastrarFormUsuarioEmpresa.checkValidity()){
        const bodyFormData = new FormData(cadastrarFormUsuarioEmpresa);
        
        
        callAction('/backend/cadastrar', bodyFormData, (response) => {
            if(response.success){
                //fecha modal
                $('#modalUserEmpresa').css({opacity: 0}).hide(); 

                Swal.fire({
                    position: 'center',
                    icon: 'success',
                    title: 'Usuário adicionado',
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

