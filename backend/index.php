<?php // inclui o autoloader do Composer 
require 'vendor/autoload.php'; 
// inclui o arquivo de inicialização 
require 'init.php'; 
// instancia o Slim, habilitando os erros (útil para debug, em desenvolvimento) 
$app = new \Slim\App([ 'settings' => [
        'displayErrorDetails' => true
    ]
]);
  
// página inicial
// listagem de usuários
$app->get('/', function ()
{
    
    $UsersController = new \App\Controllers\UsersController;
    $UsersController->index();
    
});

$app->post('/cadastrar', function (){
    $UsersController = new \App\Controllers\UsersController;
    $UsersController->store();
});

$app->post('/login', function (){
    $UsersController = new \App\Controllers\UsersController;
    $UsersController->login();
});





$app->run();