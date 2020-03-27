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


$('select[name="tipo"]').change(function () {
    if ($('select[name="tipo"]').val() === "2") {
        $('.divNomeDraga').show();
    }
});

$('select[name="status"]').change(function () {
    if ($('select[name="status"]').val() === "2") {
        $('.anexoProrrogacao').show();
    }
});


