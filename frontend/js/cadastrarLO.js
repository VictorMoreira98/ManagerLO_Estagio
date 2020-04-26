let cadastrarFormLO = document.getElementById('cadastrarLO');
cadastrarFormLO.onsubmit = event => {
    event.preventDefault();

    if(cadastrarFormLO.checkValidity()){
        const bodyFormData = new FormData(cadastrarFormLO);
        
        
        callAction('/backend/cadastrar/lo', bodyFormData, (response) => {
            if(response.success){
                //location.reload();
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





