document.querySelector("html").classList.add('js');



var fileInput  = document.querySelector( ".input-anexo-lo" ),  
    button     = document.querySelector( ".input-anexo-lo-trigger" ),
    the_returnLO = document.querySelector(".anexo-lo-return");
      
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
    //the_returnLO.innerHTML = this.value;  
   $(".anexo-lo-return").html(this.value);
});  



    

var fileInput  = document.querySelector( ".input-file-prorrogacao" ),  
    button     = document.querySelector( ".input-anexo-prorrogacao-trigger" ),
    the_return = document.querySelector(".anexo-prorrogacao-return");
      
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
    //the_return.innerHTML = this.value;  
    $(".anexo-prorrogacao-return").html(this.value);
});  


