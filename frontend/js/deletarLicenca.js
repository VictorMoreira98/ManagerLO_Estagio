let deletarFormLicenca = document.getElementById('deleteFormLicenca');
deletarFormLicenca.onsubmit = event => {
    event.preventDefault();

    if(deletarFormLicenca.checkValidity()){
        const bodyFormData = new FormData(deletarFormLicenca);
        
        
        callAction('/backend/deletar/licenca', bodyFormData, (response) => {
            if(response.success){

                Swal.fire({
                    position: 'center',
                    icon: 'success',
                    title: 'Licença Deletada',
                    showConfirmButton: false,
                    timer: 1500
                  })
                  setTimeout(function(){ 
                    location.reload();
                  }, 1500);
               
            }
            else{
                console.error(`Erro: ${response.message}`);
            }
        });
    }
}


function deleteLicenca(e){
  
   
    var linha = $(e).closest("tr");
    
    var tipo = linha.find("td:eq(0)").text().trim(); 
    var idLicenca = linha.find("td:eq(6)").text().trim(); 
    var idTipo = linha.find("td:eq(7)").text().trim(); 
   
    $("#tipoL").val(tipo);
    $("#idLicenca").val(idLicenca);
    $("#idTipo").val(idTipo);
    
   
 
 }
