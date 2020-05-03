 <!-- Search form -->
 <form class="form-inline d-flex justify-content-center md-form form-sm active-cyan-2 mt-2" id="formpesquisa">
    <input id="campoPesquisaUser" class="form-control form-control-sm mr-3 w-75" type="text" placeholder="Search"
        aria-label="Search">
    <i class="fas fa-search" aria-hidden="true"></i>
   
 </form>


 <script>






$(document).ready(function(){

// será colocado aqui os arquivos encontrados da pesquisa
var encontradosUser = new Array();

var digitoUser = "";

 
// tudo acontecerá a cada tecla digitada, vem daí a pesquisa dinâmica
$("#campoPesquisaUser").keyup(function(){	

    if($("#campoPesquisaUser").val() == ""){
        location.reload();
    } else {
        
        for(var i = 0; i < objUser.length; i++){
         //if(objUser[i] != ""){
           //var conteudo1 = '<thead><tr id="id_registro-user-'+ objUser[i].id +'"><th scope="col">Nome</th> <th scope="col">Usuário</th><th scope="col">E-mail</th> <th scope="col">Ações</th> </tr></thead><tbody id="tableBody" ><tr><td>' + objUser[i].nome + '</td><td>' + objUser[i].usuario + '</td><td>' + objUser[i].email + '</td><td style="display: none">'+ objUser[i].telefone +'</td><td style="display: none">'+ objUser[i].cpf +'</td><td style="display: none">'+ objUser[i].idPessoa +'</td><td style="display: none">'+ objUser[i].id +'</td><td style="display: none">'+ objUser[i].tipo +'</td><td><button  class="btn btnActions" data-toggle="modal" data-target="#editarUsuario" onclick="editar(this)"><i class="fas fa-edit fa-1x"></i></button><button class="btn btnActions" data-toggle="modal" data-target="#deletarUsuario" onclick="deleteUserEmpresa(this)"><i class="fas fa-trash-alt fa-1x"></i></button></td></tr></tbody >';
          var conteudo1 = '<thead><tr><th scope="col">Nome</th> <th scope="col">Usuário</th><th scope="col">E-mail</th> <th scope="col">Ações</th> </tr></thead><tbody id="tableBody" ></tbody >';
           var conteudo = '<tr id="id_registro-user-'+ objUser[i].id +'"><td>' + objUser[i].nome + '</td><td>' + objUser[i].usuario + '</td><td>' + objUser[i].email + '</td><td style="display: none">'+ objUser[i].telefone +'</td><td style="display: none">'+ objUser[i].cpf +'</td><td style="display: none">'+ objUser[i].idPessoa +'</td><td style="display: none">'+ objUser[i].id +'</td><td style="display: none">'+ objUser[i].tipo +'</td><td><button class="btn btnActionsPesquisar" data-toggle="modal" data-target="#editarUsuario" onclick="editar(this)"><i class="fas fa-edit fa-1x"></i></button><button class="btn btnActionsPesquisar" data-toggle="modal" data-target="#deletarUsuario" onclick="deleteUserEmpresa(this)"><i class="fas fa-trash-alt fa-1x "></i></button></td></tr>';
            if(i == 0){
               
                    $("#tablePesquisa").html(conteudo1);
                    $("#paginacao").html("");
                    
                
            } else{
                $("#tableBody").append(conteudo);
            }
        //}
            
        }
        
        
        
    }
   
   
    //alert(obj.indexOf(obj[0]));
    digitoUser = $("#campoPesquisaUser").val();
    for(var i = 0; i < objUser.length; i++){

        // indexOf é o responsável por verificar se existe aquele texto em alguma parte do obj[i]
        if(objUser[i].nome.toLowerCase().indexOf(digitoUser) != -1){
            encontradosUser.push(objUser[i].id);
            //alert( encontrados[0]);
        }else{
            var posicao = objUser.indexOf(objUser[i]);
            if(posicao){
                encontradosUser.splice(posicao, 1);
            }
        }
    }
    filtraEncontradosUser();
});

function filtraEncontradosUser(){

    for(var i = 0; i < objUser.length; i++){
        // esconde todos os produtos um por um
        $("#id_registro-user-"+objUser[i].id).hide(); 
      
    }
    for(var i = 0; i < encontradosUser.length; i++){
        for (var y = 0; y < objUser.length; y++) {
       
            if(objUser[y].id == encontradosUser[i]){
                // mostra o produto
                
                $("#id_registro-user-"+objUser[y].id).show(); 
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
    encontradosUser = new Array();
}

});
</script>