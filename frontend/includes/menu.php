

<div class="tab">
  <button class="tablinks" onclick="openAba(event, 'areas')" id="defaultOpen">Áreas</button>
  <button class="tablinks" onclick="openAba(event, 'dragas')">Dragas</button>
  <button class="tablinks" onclick="openAba(event, 'terminais')">Terminais</button>
</div>

<div id="areas" class="tabcontent">
  <h3>Áreas</h3>
  
</div>

<div id="dragas" class="tabcontent">
  
<table id="customers">
  <tr>
    <th>Empreendedor</th>
    <th>LO</th>
    <th>Data Vencimento</th>
    <th>Ações</th>
  </tr>
  
  <tr>
    <td>Königlich Essen</td>
    <td>Philip Cramer</td>
    <td>Germany</td>
    <td>
      
      <button class="iconView"><img class="iconActionIMG" src="assets/view.png"/></button>
      <button id="iconEdit"  class="menuBtnModal" data-toggle="modal" data-target="#ModalEdit"><img class="iconActionIMG" src="assets/edit.png"/></button>

    
  </tr>
  
</table>
 
</div>

<div id="terminais" class="tabcontent">
  <h3>Terminais</h3>
 
</div>

<script>
function openAba(evt, abaName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(abaName).style.display = "block";
  evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>
   