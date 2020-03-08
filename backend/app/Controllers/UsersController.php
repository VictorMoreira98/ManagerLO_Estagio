<?php namespace App\Controllers;
use \App\Models\User; 
include_once BASE_PATH . "/config.php";
 
/* Listagem de usuários */ 
class UsersController {
    public function store() { 
        $nome = isset($_POST['nome']) ? $_POST['nome'] : null;
        $usuario = isset($_POST['usuario']) ? $_POST['usuario'] : null;
        $email = isset($_POST['email']) ? $_POST['email'] : null;
        $cpf = isset($_POST['cpf']) ? $_POST['cpf'] : null;
        $cnpj = isset($_POST['cnpj']) ? $_POST['cnpj'] : null;
        $telefone = isset($_POST['telefone']) ? $_POST['telefone'] : null;
        $tipo = isset($_POST['tipo']) ? $_POST['tipo'] : null;
        $senha = crypt(isset($_POST['senha']) ? $_POST['senha'] : null, 12);
        echo User::save($nome, $usuario, $email, $cpf, $cnpj, $telefone, $tipo, $senha);
       
    }

    public function login() { 
        // pega os dados do formuário
        $usuario = isset($_POST['usuario']) ? $_POST['usuario'] : null;
        $senha = isset($_POST['senha']) ? $_POST['senha'] : null;

        echo User::logar($usuario, $senha);
    }

   
}
