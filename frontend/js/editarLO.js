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


window.onload = function(){ 

    if ($('select[id="anexoProrrogacaoEdit"]').val() ==="2") {
        $('.anexoProrrogacao').show();
    }else{
        $('.anexoProrrogacao').hide();
    };
    
      
   
}

$('select[id="tipoEdit"]').change(function () {
    if ($('select[id="tipoEdit"]').val() === "2") {
        $('.divNomeDraga').show();
    }else{
        $('.divNomeDraga').hide();
    }
});


$('select[id="tipoEdit"]').change(function () {
    if ($('select[id="tipoEdit"]').val() === "1") {
        $('.divDNPM').show();
    }else{
        $('.divDNPM').hide();
    }
});

$('select[id="statusEdit"]').change(function () {
    if ($('select[id="statusEdit"]').val() === "2") {
        $('.anexoProrrogacao').show();
    }else{
        $('.anexoProrrogacao').hide();
    }
});

