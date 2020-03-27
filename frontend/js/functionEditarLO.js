
function editarLO(e){

   
    var linha = $(e).closest("tr");
   //pega os dados das colunas
    var nLO = linha.find("td:eq(0)").text().trim(); 
    var tipo = linha.find("td:eq(1)").text().trim(); 
    var dtaVenc  = linha.find("td:eq(2)").text().trim(); 
    var empresa = linha.find("td:eq(3)").text().trim(); 
    var status = linha.find("td:eq(4)").text().trim(); 
    var id = linha.find("td:eq(5)").text().trim(); 
    var anexo = linha.find("td:eq(6)").text().trim(); 
    anexo = anexo.substring(41);
   
    $("#nLOEdit").val(nLO);
    $("#dtaVencEdit").val(dtaVenc);
    $("#empresaEdit").val(empresa);
    $("#statusEdit").val(status);
    $("#tipoEdit").val(tipo);
    $("#idLO").val(id);
    
//abastece o campo paragrafo do anexo com o documento trazido do BD
    var p = document.getElementById("anexoEdit");
    p.innerText = anexo;
    
//foca em todos os campos para levantar a label
    $('#editarRegistro').on('shown.bs.modal', function () {
        $('#empresaEdit').focus();
        $('#dtaVencEdit').focus();
        $('#nLOEdit').focus();
    })
    
 }


 function abrirLO(e){
    var linha = $(e).closest("tr");
    //pega os dados das colunas
     var pdf = linha.find("td:eq(6)").text().trim(); 
     
     window.open('C:/xampp/htdocs/ManagerLO_Estagio/anexos/discursivaMatematica_G1.pdf', '_blank');
 }