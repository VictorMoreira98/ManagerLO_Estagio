<!-- Search form -->
<form class="form-inline d-flex justify-content-center md-form form-sm active-cyan-2 mt-2">
  <input id="campoPesquisa"class="form-control form-control-sm mr-3 w-75" type="text" placeholder="Search"
    aria-label="Search">
  <i class="fas fa-search" aria-hidden="true"></i>
</form>

<script>
$(document).ready(function(){

// será colocado aqui os arquivos encontrados da pesquisa
var encontrados = new Array();

var digito = "";

// tudo acontecerá a cada tecla digitada, vem daí a pesquisa dinâmica
$("#campoPesquisa").keyup(function(){	

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
    
    /* se não tiver nada encontrado, mostra a linha escondida avisando o usuário
    if(encontrados.length == 0){
        $("#nenhumProduto").show();
    }else{
        $("#nenhumProduto").hide();
    }*/
    
    // esvaziamos o array para que ele seja renovado na próxima tecla pressionada no inicio da função acima
    encontrados = new Array();
}

});
</script>