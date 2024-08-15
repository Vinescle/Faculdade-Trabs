<?php
class clientes{
    private $codigo;
    private $nome;
    private $cpf;
    private $telefoneFixo;
    private $telefoneCelular;
    private $logradouro;
    private $numero;
    private $complemento;
    private $bairro;
    private $cidade;
    private $estado;
    private $cep;
    
    public function __set($atributo, $valor){
        $this->$atributo = $valor; 
        return $this;
    }

    public function __get($atributo){
        return $this->$atributo;
    }

}