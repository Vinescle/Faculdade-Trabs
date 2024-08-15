<?php
require_once($_SERVER['DOCUMENT_ROOT'] . "/config.php");

require_once $model."userModel.php";
require_once $service."userService.php";


$acao = isset($_POST['acao']) ? $_POST['acao'] : 'never';

$UserTarefa = new UserController;
//Ações da UIX User.register para operações na tabela de usuários.
switch($acao){
        case 'registro':
                $result = $UserTarefa->registro($_POST['name']);
                if (!$result) {
                        echo '<div class="col alert alert-success text-center" role="alert">Dados salvos com sucesso!!</div>';
                } else {
                        echo '<div class="col alert alert-danger text-center" role="alert">Ops!! Encontramos um problema, favor comunicar o respossável!!</div>';
                }
                break;
}

class UserController
{
        private $conn;
        private $user;

        public function __construct() {
                $this->conn = new Conexao();
                $this->conn = $this->conn->getinstance();
                $this->user = new User();
                
	}

        public function registro($name)
        {
                $this->user->__set('name', $name);
                $userService = new UserService($this->conn, $this->user);
                return $userService->Registro();
        }

        public function searchAll()
        {
                $userService = new UserService($this->conn, $this->user);
                return $userService->searchAll();
        }
}