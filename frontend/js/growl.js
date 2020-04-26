function displayGrowl(message) {
    
    //window.location.href = '/';
    //setTimeout(4000);
    $('.growl-notice').fadeIn().html('Erro: '+ message + ' <i class="fas fa-exclamation-circle"></i>');
    setTimeout(function(){ 
      $('.growl-notice').fadeOut();
    }, 1500);
    //location.reload();
  }