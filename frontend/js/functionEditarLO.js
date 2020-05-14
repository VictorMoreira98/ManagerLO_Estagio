
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
    var status = linha.find("td:eq(10)").text().trim();  
    var dnpm1 = linha.find("td:eq(11)").text().trim();  
    var dnpm2 = linha.find("td:eq(12)").text().trim();  
    var dnpm3 = linha.find("td:eq(13)").text().trim();  
    var dnpm4 = linha.find("td:eq(14)").text().trim();  
    var dnpm5 = linha.find("td:eq(15)").text().trim(); 
    var dnpm6 = linha.find("td:eq(16)").text().trim();  

    nomeAnexoLO = anexoLO.substring(10);
    nomeAnexoProrrogacao = anexoProrrogacao.substring(10);

    

    if(dnpm1 != "" && dnpm1 != "null"){
        var divs = $('.formDNPMEditar');
        var qtd = divs.length; 
        if(qtd <= 1){
            addDnpmEditar();
        }
        
        if(dnpm2 != "" && dnpm2 != "null"){
            if(qtd <= 2){
                addDnpmEditar();
            }

            if(dnpm3 != "" && dnpm3 != "null"){
                if(qtd <= 3){
                    
                    addDnpmEditar();
                }

                if(dnpm4 != "" && dnpm4 != "null"){
                    if(qtd <= 4){
                        addDnpmEditar();
                    }

                    if(dnpm5 != "" && dnpm5 != "null"){
                        if(qtd <= 5){
                            addDnpmEditar();
                        }

                        if(dnpm6 != "" && dnpm6 != "null"){
                            if(qtd <= 6){
                                addDnpmEditar();
                            }
                        }
                    }
                }
            }
        }
    
        
    }
   
   
    $("#nLOEdit").val(nLO);
    $("#dnpmEdit").val(dnpm);
    $("#dnpmEdit1").val(dnpm1);
    $("#dnpmEdit2").val(dnpm2);
    $("#dnpmEdit3").val(dnpm3);
    $("#dnpmEdit4").val(dnpm4);
    $("#dnpmEdit5").val(dnpm5);
    $("#dnpmEdit6").val(dnpm6);
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
        if(dnpm1 != null){
            $('#dnpmEdit1').focus();    
        }
        if(dnpm2 != null){
            $('#dnpmEdit2').focus();    
        }
        if(dnpm3 != null){
            $('#dnpmEdit3').focus();    
        }
        if(dnpm4 != null){
            $('#dnpmEdit4').focus();    
        }
        if(dnpm5 != null){
            $('#dnpmEdit5').focus();    
        }
        if(dnpm6 != null){
            $('#dnpmEdit6').focus();    
        }
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

 