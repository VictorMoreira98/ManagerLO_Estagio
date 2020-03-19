function deleteUserEmpresa(e){
   
    var linha = $(e).closest("tr");
    
    var idPessoa = linha.find("td:eq(5)").text().trim(); 
    var id = linha.find("td:eq(6)").text().trim(); 
   
    $("#idPessoaDelete").val(idPessoa);
    $("#idDelete").val(id);
  
   
 
 }