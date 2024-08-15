<?php
require_once($_SERVER['DOCUMENT_ROOT'] . "/config.php");

require_once $model."user-model.php";
require_once $service."user-service.php";


$acao = isset($_POST['acao']) ? $_POST['acao'] : 'never';

$UserTarefa = new UserController;
//Ações da UIX User.register para operações na tabela de usuários.
switch($acao){
        case 'registro':
                $result = $UserTarefa->registro($_POST['name']);
                if (!$result) {
                        echo '<div class="col alert alert-success text-center" role="alert">Dados salvos com sucesso!!</div>';
                } else {
                        echo '<div class="col alert alert-danger text-center" role="alert">Ops!! Encontramos um problema, favor comunicar o responssável!!</div>';
                }
                break;
        case 'update':
                $result = $UserTarefa->update($_POST['id'],$_POST['name']);
                if (!$result) {
                        echo '<div class="col alert alert-success text-center" role="alert">Dados salvos com sucesso!!</div>';
                } else {
                        echo '<div class="col alert alert-danger text-center" role="alert">Ops!! Encontramos um problema, favor comunicar o responssável!!</div>';
                }
                break;
        case 'delete':
                $result = $UserTarefa->delete($_POST['id']);
                if (!$result) {
                        echo '<div class="col alert alert-success text-center" role="alert">Dados exculuídos com sucesso!!</div>';
                } else {
                        echo '<div class="col alert alert-danger text-center" role="alert">Ops!! Encontramos um problema, favor comunicar o responssável!!</div>';
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

        public function update($id, $name)
        {
                $this->user->__set('id', $id);
                $this->user->__set('name', $name);
                $userService = new UserService($this->conn, $this->user);
                return $userService->Update();
        }

        public function delete($id)
        {
                $this->user->__set('id', $id);
                $userService = new UserService($this->conn, $this->user);
                return $userService->Delete();
        }

        public function searchAll()
        {
                $userService = new UserService($this->conn, $this->user);
                return $userService->searchAll();
        }

        public function searchID($id)
        {
                $this->user->__set('id', $id);
                $userService = new UserService($this->conn, $this->user);
                return $userService->searchID();
        }
}
