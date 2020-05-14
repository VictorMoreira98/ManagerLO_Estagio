let cadastrarFormLO = document.getElementById('cadastrarLO');
cadastrarFormLO.onsubmit = event => {
    event.preventDefault();

    if(cadastrarFormLO.checkValidity()){
        const bodyFormData = new FormData(cadastrarFormLO);
        
        
        callAction('/backend/cadastrar/lo', bodyFormData, (response) => {
            if(response.success){
                //location.reload();

                //fecha modal
                $('#cadastrarRegistro').css({opacity: 0}).hide(); 
                
                //displayGrowl('Notification has been displayed.');
                
                Swal.fire({
                    position: 'center',
                    icon: 'success',
                    title: 'LO adicionada',
                    showConfirmButton: false,
                    timer: 1500
                  })
                  setTimeout(function(){ 
                    location.reload();
                  }, 1500);
                 
                
            }
            else{
                console.error(`Erro: ${response.message}`);
                //exibe o erro em um grow
                displayGrowl(response.message);
            }
        });
    }
}


	
$('select[name="tipo"]').change(function () {
    if ($('select[name="tipo"]').val() === "2") {
        $('.divNomeDraga').show();
    }else{
        $('.divNomeDraga').hide();
    }
});

$('select[name="tipo"]').change(function () {
    if ($('select[name="tipo"]').val() === "1") {
        $('.divDNPM').show();
    }else{
        $('.divDNPM').hide();
    }
});

$('select[name="status"]').change(function () {
    if ($('select[name="status"]').val() === "2") {
        $('.anexoProrrogacao').show();
    }else{
        $('.anexoProrrogacao').hide();
    }
});

function addDnpm(){
    var divs = $('.formDNPM');
    var qtd = divs.length; 
    
    var content = '<div class="md-form formDNPM mt-7"id="dnpm'+qtd+'"><input type="number" id="dnpm" name="dnpm'+qtd+'"class="form-control"><label for="materialRegisterFormFirstName">DNPM' + qtd + '</label></div>';
    $("#addDnpm").append(content);
    $("#removerCampo").show();
    
    if(qtd == 6){
        $('#addCampo').hide();
    }
    
}

function removerDnpm(){
    var divs = $('.formDNPM');
    var qtd = divs.length; 
    qtd = qtd - 1;
    $('#dnpm'+qtd+'').remove();
    if(qtd == 1){
        $('#removerCampo').hide();
    }
    if(qtd < 7){
        $('#addCampo').show();
    }
    

}


