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

$app->post('/usuarios/deletar/empresa', function (){
    $UsersController = new \App\Controllers\UsersController;
    $UsersController->deleteUserEmpresa();
});

//busca dados de um usuário especifico
$app->get('/editar-conta/{id}/{tipo}', function ($request){
    // pega o ID da URL
    $id = $request->getAttribute('id');
    $tipo = $request->getAttribute('tipo');
    $UsersController = new \App\Controllers\UsersController;
    $UsersController->getUsuario($id, $tipo);
});

//busca as licencas de um usuário ou empresa
$app->get('/licenca/{id}/{idEmpresa}', function ($request){
    // pega o ID da URL
    $id = $request->getAttribute('id');
    $idEmpresa = $request->getAttribute('idEmpresa');
    $LicencaController = new \App\Controllers\LicencaController;
    $LicencaController->getLicenca($id,$idEmpresa);
});

//busca licencas de areas
$app->get('/licenca/areas/{id}/{idEmpresa}', function ($request){
    // pega o ID da URL
    $id = $request->getAttribute('id');
    $idEmpresa = $request->getAttribute('idEmpresa');
    $LicencaController = new \App\Controllers\LicencaController;
    $LicencaController->getLicencaAreas($id,$idEmpresa);
});

//busca licencas de dragas
$app->get('/licenca/dragas/{id}/{idEmpresa}', function ($request){
    // pega o ID da URL
    $id = $request->getAttribute('id');
    $idEmpresa = $request->getAttribute('idEmpresa');
    $LicencaController = new \App\Controllers\LicencaController;
    $LicencaController->getLicencaDragas($id,$idEmpresa);
});

//busca licencas de terminais
$app->get('/licenca/terminais/{id}/{idEmpresa}', function ($request){
    // pega o ID da URL
    $id = $request->getAttribute('id');
    $idEmpresa = $request->getAttribute('idEmpresa');
    $LicencaController = new \App\Controllers\LicencaController;
    $LicencaController->getLicencaTerminais($id,$idEmpresa);
});


$app->post('/cadastrar/lo', function (){
    $LicencaController = new \App\Controllers\LicencaController;
    $LicencaController->cadastrarLO();
});

$app->post('/editar/lo', function (){
    $LicencaController = new \App\Controllers\LicencaController;
    $LicencaController->editarLO();
});


$app->post('/deletar/licenca', function (){
    $LicencaController = new \App\Controllers\LicencaController;
    $LicencaController->deletarLicenca();
});



$app->run();