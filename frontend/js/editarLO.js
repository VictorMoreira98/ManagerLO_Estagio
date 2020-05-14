let editarFormLO = document.getElementById('editarLO');
editarFormLO.onsubmit = event => {
    event.preventDefault();

    if(editarFormLO.checkValidity()){
        const bodyFormData = new FormData(editarFormLO);
        
        
        callAction('/backend/editar/lo', bodyFormData, (response) => {
            if(response.success){

                $('#editarRegistro').css({opacity: 0}).hide(); 

                
                Swal.fire({
                    position: 'center',
                    icon: 'success',
                    title: 'LO atualizada',
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


function addDnpmEditar(){
    var divs = $('.formDNPMEditar');
    var qtd = divs.length; 
    
    var content = '<div class="md-form formDNPMEditar mt-7" id="formdnpmedit'+qtd+'"><input type="number" id="dnpmEdit'+qtd+'" name="dnpm'+qtd+'"class="form-control"><label for="materialRegisterFormFirstName">DNPM' + qtd + '</label></div>';
    $("#addDnpmEditar").append(content);
    $("#removerCampoEditar").show();
    
    if(qtd == 6){
        $('#addCampoEditar').hide();
    }
    
}

function removerDnpmEditar(){
    var divs = $('.formDNPMEditar');
    var qtd = divs.length; 
    qtd = qtd - 1;
    $('#formdnpmedit'+qtd+'').remove();
    if(qtd == 1){
        $('#removerCampoEditar').hide();
    }
    if(qtd < 7){
        $('#addCampoEditar').show();
    }
}

