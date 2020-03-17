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

//cadastraUsuarios de dois tipos
$app->post('/cadastrar', function (){
    $UsersController = new \App\Controllers\UsersController;
    $UsersController->store();
});


$app->post('/usuarios/edit', function (){
    $UsersController = new \App\Controllers\UsersController;
    $UsersController->editUserEmpresa();
});

//busca usuarios de uma empresa
$app->get('/usuarios/{id}', function ($request){
    // pega o ID da URL
    $id = $request->getAttribute('id');
    $UsersController = new \App\Controllers\UsersController;
    $UsersController->getUsers($id);
});

$app->post('/login', function (){
    $UsersController = new \App\Controllers\UsersController;
    $UsersController->login();
});





$app->run();