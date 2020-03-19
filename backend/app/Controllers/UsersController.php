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
        $idEmpresa = isset($_POST['idEmpresa']) ? $_POST['idEmpresa'] : null;
        $tipo = isset($_POST['tipo']) ? $_POST['tipo'] : null;
        $senha = crypt(isset($_POST['senha']) ? $_POST['senha'] : null, 12);
        echo User::save($nome, $usuario, $email, $cpf, $cnpj, $telefone, $idEmpresa, $tipo, $senha);
       
    }

    public function editUserEmpresa() { 
        $nome = isset($_POST['nome']) ? $_POST['nome'] : null;
        $usuario = isset($_POST['usuario']) ? $_POST['usuario'] : null;
        $email = isset($_POST['email']) ? $_POST['email'] : null;
        $cpf = isset($_POST['cpf']) ? $_POST['cpf'] : null;
        $cnpj = isset($_POST['cnpj']) ? $_POST['cnpj'] : null;
        $telefone = isset($_POST['telefone']) ? $_POST['telefone'] : null;
        $idEmpresa = isset($_POST['idEmpresa']) ? $_POST['idEmpresa'] : null;
        $idPessoa = isset($_POST['idPessoa']) ? $_POST['idPessoa'] : null;
        $id = isset($_POST['id']) ? $_POST['id'] : null;
        $tipo = isset($_POST['tipo']) ? $_POST['tipo'] : null;;
        $senha = crypt(isset($_POST['senha']) ? $_POST['senha'] : null, 12);
        echo User::editUser($nome, $usuario, $email, $cpf, $cnpj, $telefone, $idEmpresa, $idPessoa, $id, $tipo, $senha);
       
    }

    public function getUsers($id) {
        echo User::getUsers($id);
    }

    public function login() { 
        // pega os dados do formuário
        $usuario = isset($_POST['usuario']) ? $_POST['usuario'] : null;
        $senha = isset($_POST['senha']) ? $_POST['senha'] : null;

        echo User::logar($usuario, $senha);
    }

    public function deleteUserEmpresa() { 
        // deletar um usuario de uma empresa, para isso pega o id e o idPessoa
        $id = isset($_POST['id']) ? $_POST['id'] : null;
        $idPessoa = isset($_POST['idPessoa']) ? $_POST['idPessoa'] : null;
     

        echo User::deleteUserEmpresa($id, $idPessoa);
    }

    //busca dados de um usuario especifico
    public function getUsuario($id, $tipo) {
        echo User::getUsuario($id, $tipo);
    }

   
}
