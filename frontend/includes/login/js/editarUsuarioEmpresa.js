
function editar(e){
   
   var linha = $(e).closest("tr");
  //pega os dados das colunas
   var nome = linha.find("td:eq(0)").text().trim(); 
   var usuario  = linha.find("td:eq(1)").text().trim(); 
   var email = linha.find("td:eq(2)").text().trim(); 
   var telefone = linha.find("td:eq(3)").text().trim(); 
   var cpf = linha.find("td:eq(4)").text().trim(); 
   var idPessoa = linha.find("td:eq(5)").text().trim(); 
   var id = linha.find("td:eq(6)").text().trim(); 
   
 
   $("#nomeEdit").val(nome);
   $("#usuarioEdit").val(usuario);
   $("#emailEdit").val(email);
   $("#telefoneEdit").val(telefone);
   $("#cpfEdit").val(cpf);
   $("#idPessoaEdit").val(idPessoa);
   $("#idEdit").val(id);
 
  

}