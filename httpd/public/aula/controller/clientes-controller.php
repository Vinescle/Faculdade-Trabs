<?php
require_once($_SERVER['DOCUMENT_ROOT'] . "/config.php");

require_once $model."clientes-model.php";
require_once $service."clientes-service.php";


$acao = isset($_POST['acao']) ? $_POST['acao'] : 'never';

$ClienteTarefa = new ClientesController;
//Ações da UIX User.register para operações na tabela de usuários.
switch($acao){
        case 'registro':
                $result = $ClienteTarefa->registro($_POST['nome'], $_POST['cpf'], $_POST['telefoneFixo'], $_POST['telefoneCelular'], $_POST['logradouro'], $_POST['numero'], $_POST['complemento'], $_POST['bairro'], $_POST['cidade'], $_POST['estado'], $_POST['cep']);
                if (!$result) {
                        echo '<div class="col alert alert-success text-center" role="alert">Dados salvos com sucesso!!</div>';
                } else {
                        echo '<div class="col alert alert-danger text-center" role="alert">Ops!! Encontramos um problema, favor comunicar o respossável!!</div>';
                }
                break;
}

class ClientesController
{
        private $conn;
        private $cliente;

        public function __construct() {
                $this->conn = new Conexao();
                $this->conn = $this->conn->getinstance();
                $this->cliente = new Clientes();
                
	}

        public function registro($nome, $cpf, $telefoneFixo, $telefoneCelular, $logradouro, $numero, $complemento, $bairro, $cidade, $estado, $cep)
        {
                $this->cliente->__set('nome', $nome)
                        ->__set('cpf', $cpf)
                        ->__set('telefoneFixo', $telefoneFixo)
                        ->__set('telefoneCelular', $telefoneCelular)
                        ->__set('logradouro', $logradouro)
                        ->__set('numero', $numero)
                        ->__set('complemento', $complemento)
                        ->__set('bairro', $bairro)
                        ->__set('cidade', $cidade)
                        ->__set('estado', $estado)
                        ->__set('cep', $cep);

                $clienteService = new ClienteService($this->conn, $this->cliente);
                return $clienteService->Registro();
        }

        public function searchAll()
        {
                $clienteService = new ClienteService($this->conn, $this->cliente);
                return $clienteService->searchAll();
        }
}
