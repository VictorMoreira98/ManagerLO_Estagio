$(document).ready(function(){

    // será colocado aqui os arquivos encontrados da pesquisa
    var encontrados = new Array();
    
    var digito = "";
    
    // tudo acontecerá a cada tecla digitada, vem daí a pesquisa dinâmica
    $("#campoPesquisa").keyup(function(){
        
        if($("#campoPesquisa").val() == ""){
                location.reload();
        } else {
            for(var i = 0; i < obj.length; i++){
                
                //seta a cor do status
                if(obj[i].status == 1){
                    var circulo = '<div class="circulo-verde"></div></td>';
                } else if(obj[i].status == 2){
                    var circulo = '<div class="circulo-amarelo"></div></td>';
                }else if(obj[i].status == 4){
                    var circulo = '<div class="circulo-azul"></div></td>';
                }else if(obj[i].status == 3 || obj[i].status == 5){
                    var circulo = '<div class="circulo-vermelho"></div></td>';
                }
                
                //identifica qual tipo de licenca, e seta em sua determinada tabela
                if(tipoUrl == 1){
                    var conteudo = '<tr id="id_registro-'+obj[i].idLicenca+'"><td style="display: none">'+ obj[i].tipo +'</td><td data-label="LO">' + obj[i].nlicenca + '</td><td data-label="DNPM">' + obj[i].dnpm + '</td><td data-label="Data Vencimento">' + obj[i].dtaVenc + '</td><td data-label="Empresa">' + obj[i].empresa + '</td><td data-label="Status">' + circulo + '</td><td style="display: none">'+ obj[i].idLicenca +'</td><td style="display: none">'+ obj[i].idArea +'</td><td style="display: none">'+ obj[i].anexoLO +'</td><td style="display: none">'+ obj[i].anexoProrrogacao +'</td><td style="display: none">'+ obj[i].status +'</td><td><button class="btn btnActionsPesquisar" data-toggle="modal" data-target="#editarRegistro" onclick="editarLO(this)"><i class="fas fa-edit fa-1x"></i></button><button class="btn btnActionsPesquisar" data-toggle="modal" data-target="#deletarUsuario" onclick="abrirLO(this)"><i class="fas fa-file-alt fa-1x "></i></button></td></tr>';
                    
                        if(i == 0){
                            $("#bodyArea").html(conteudo);
                            $("#paginacao").html("");
                        } else {
                            $("#bodyArea").append(conteudo);
                        }
                } else if(tipoUrl == 2){
                    var conteudo = '<tr id="id_registro-'+obj[i].idLicenca+'"><td style="display: none">'+ obj[i].tipo +'</td><td data-label="LO">' + obj[i].nlicenca + '</td><td data-label="Draga">' + obj[i].nomeDraga + '</td><td data-label="Data Vencimento">' + obj[i].dtaVenc + '</td><td data-label="Empresa">' + obj[i].empresa + '</td><td data-label="Status">' + circulo + '</td><td style="display: none">'+ obj[i].idLicenca +'</td><td style="display: none">'+ obj[i].idDraga +'</td><td style="display: none">'+ obj[i].anexoLO +'</td><td style="display: none">'+ obj[i].anexoProrrogacao +'</td><td style="display: none">'+ obj[i].status +'</td><td><button class="btn btnActionsPesquisar" data-toggle="modal" data-target="#editarRegistro" onclick="editarLO(this)"><i class="fas fa-edit fa-1x"></i></button><button class="btn btnActionsPesquisar" data-toggle="modal" data-target="#deletarUsuario" onclick="abrirLO(this)"><i class="fas fa-file-alt fa-1x "></i></button></td></tr>';
                    
                        if(i == 0){
                            $("#bodyDraga").html(conteudo);
                            $("#paginacao").html("");
                        } else {
                            $("#bodyDraga").append(conteudo);
                        }
    
                } else if(tipoUrl == 3){
                    var conteudo = '<tr id="id_registro-'+obj[i].idLicenca+'"><td style="display: none">'+ obj[i].tipo +'</td><td data-label="LO">' + obj[i].nlicenca + '</td><td style="display: none">padrao</td><td data-label="Data Vencimento">' + obj[i].dtaVenc + '</td><td data-label="Empresa">' + obj[i].empresa + '</td><td data-label="Status">' + circulo + '</td><td style="display: none">'+ obj[i].idLicenca +'</td><td style="display: none">'+ obj[i].idTerminal +'</td><td style="display: none">'+ obj[i].anexoLO +'</td><td style="display: none">'+ obj[i].anexoProrrogacao +'</td><td style="display: none">'+ obj[i].status +'</td><td><button class="btn btnActionsPesquisar" data-toggle="modal" data-target="#editarRegistro" onclick="editarLO(this)"><i class="fas fa-edit fa-1x"></i></button><button class="btn btnActionsPesquisar" data-toggle="modal" data-target="#deletarUsuario" onclick="abrirLO(this)"><i class="fas fa-file-alt fa-1x "></i></button></td></tr>';
                    
                    if(i == 0){
                        $("#bodyTerminal").html(conteudo);
                        $("#paginacao").html("");
                    } else {
                        $("#bodyTerminal").append(conteudo);
                    }
    
                }
                   
                        
                    
            }
        }
    
        //alert(obj.indexOf(obj[0]));
       digito = $("#campoPesquisa").val();
        for(var i = 0; i < obj.length; i++){
    
            // indexOf é o responsável por verificar se existe aquele texto em alguma parte do obj[i]
            if(obj[i].nlicenca.indexOf(digito) != -1){
                encontrados.push(obj[i].idLicenca);
                //alert( encontrados[0]);
            }else{
                var posicao = obj.indexOf(obj[i]);
                if(posicao){
                    encontrados.splice(posicao, 1);
                }
            }
        }
        filtraEncontrados();
    });
    
    function filtraEncontrados(){
    
        for(var i = 0; i < obj.length; i++){
            // esconde todos os produtos um por um
            $("#id_registro-"+obj[i].idLicenca).hide(); 
        }
        for(var i = 0; i < encontrados.length; i++){
            for (var y = 0; y < obj.length; y++) {
           
                if(obj[y].idLicenca == encontrados[i]){
                    // mostra o produto
                    
                    $("#id_registro-"+obj[y].idLicenca).show(); 
                }
            }
        }
        
        //se não tiver nada encontrado, mostra a linha escondida avisando o usuário
        if(encontrados.length == 0){
            $("#nenhumLicenca").show();
            $("#tabelaLicenca").hide();
        }else{
            $("#nenhumLicenca").hide();
        }
        
        // esvaziamos o array para que ele seja renovado na próxima tecla pressionada no inicio da função acima
        encontrados = new Array();
    }
    
    });