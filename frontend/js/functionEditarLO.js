
function editarLO(e){



    var linha = $(e).closest("tr");
   //pega os dados das colunas
    var tipo = linha.find("td:eq(0)").text().trim(); 
    var nLO = linha.find("td:eq(1)").text().trim();
    if(tipo==1){
        var dnpm = linha.find("td:eq(2)").text().trim(); 
    }else if(tipo==2){
       
        var nomeDraga = linha.find("td:eq(2)").text().trim();
    } else{
        var padrao = linha.find("td:eq(2)").text().trim();
    }
    var dtaVenc  = linha.find("td:eq(3)").text().trim(); 
    var empresa = linha.find("td:eq(4)").text().trim(); 
    var status = linha.find("td:eq(5)").text().trim(); 
    var idLicenca = linha.find("td:eq(6)").text().trim(); 
    if(tipo==1){
        var idDraga = linha.find("td:eq(7)").text().trim(); 
     }else if(tipo==2){
        var idArea = linha.find("td:eq(7)").text().trim(); 
     } else{
         var idTerminal = linha.find("td:eq(7)").text().trim();
     }
    
    var anexoLO = linha.find("td:eq(8)").text().trim();
    var anexoProrrogacao = linha.find("td:eq(9)").text().trim(); 
    nomeAnexoLO = anexoLO.substring(9);
    nomeAnexoProrrogacao = anexoProrrogacao.substring(9);
   
   
    $("#nLOEdit").val(nLO);
    $("#dnpmEdit").val(dnpm);
    $("#nomeDragaEdit").val(nomeDraga);
    $("#empresaEdit").val(empresa);
    $("#statusEdit").val(status);
    $("#tipoEdit").val(tipo);
    $("#idAreaEdit").val(idArea);
    $("#idDragaEdit").val(idDraga);
    $("#idTerminalEdit").val(idTerminal);
    $("#idLOEdit").val(idLicenca);
    //$("#anexoLOEdit").val(anexoLO);
    
    //$("#anexoProrrogacaoEdit").val(anexoProrrogacao);
    
    if(nomeAnexoLO!=""){{
        var a = " <p>LO Anexada: <a href='" + anexoLO + "' target='_blank' class='linkLO' id='link'><strong>" + nomeAnexoLO + "</strong></a></p>";
        $("#linkAnexo").html(a);
    }}
    if(nomeAnexoProrrogacao!=""){{
        var a = " <p>Prorrogação Anexada: <a href='" + anexoLO + "' target='_blank' class='linkLO' id='link'><strong>" + nomeAnexoProrrogacao + "</strong></a></p>";
        $("#linkAnexoProrrogacao").html(a);
    }}
    
    

    
//foca em todos os campos para levantar a label
    $('#editarRegistro').on('shown.bs.modal', function () {
        $('#dtaVencEdit').focus();
        $('#empresaEdit').focus();
        $('#dnpmEdit').focus();
        $('#nomeDragaEdit').focus();
        $('#nLOEdit').focus();
        //devido a questao de ordem, foi setado aqui a data para aparecer o valor
        $("#dtaVencEdit").val(dtaVenc);
    })

    //mostra o campo de anexar prorrogacao
    if ($('select[id="statusEdit"]').val() =="2") {
        $('.anexoProrrogacao').show();
    }else{
        $('.anexoProrrogacao').hide();
    };
}
    
   



 function abrirLO(e){
    var linha = $(e).closest("tr");
    //pega os dados das colunas
     var pdf = linha.find("td:eq(8)").text().trim(); 
     window.open(pdf, '_blank'); return false;
 }

 