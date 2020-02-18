<?php namespace App\Controllers;
use \App\Models\User; 
include_once BASE_PATH . "/config.php";
 
/* Listagem de usuários */ 
class UsersController {
    public function index() { 
        \App\View::make('\Usuarios\login');
    }

   
}
