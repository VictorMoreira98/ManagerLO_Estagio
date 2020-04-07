document.querySelector("html").classList.add('js');



var fileInput  = document.querySelector( ".input-anexo-lo-edit" ),  
    button     = document.querySelector( ".input-anexo-lo-trigger-edit" ),
    the_returnLO = document.querySelector(".anexo-lo-return-edit");
  

button.addEventListener( "keydown", function( event ) {  
    if ( event.keyCode == 13 || event.keyCode == 32 ) {  
        fileInput.focus();  
    }  
});
button.addEventListener( "click", function( event ) {
   fileInput.focus();
   return false;
});  
fileInput.addEventListener( "change", function( event ) {  
    the_returnLO.innerHTML = this.value;  
});  


    

var fileInput  = document.querySelector( ".input-file-prorrogacao-edit" ),  
    button     = document.querySelector( ".input-anexo-prorrogacao-trigger-edit" ),
    the_return = document.querySelector(".anexo-prorrogacao-return-edit");
      
button.addEventListener( "keydown", function( event ) {  
    if ( event.keyCode == 13 || event.keyCode == 32 ) {  
        fileInput.focus();  
    }  
});
button.addEventListener( "click", function( event ) {
   fileInput.focus();
   return false;
});  
fileInput.addEventListener( "change", function( event ) {  
    the_return.innerHTML = this.value;  
});  


