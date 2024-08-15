<?php
class ClienteService{

    private $conn;
    private $cliente;
    private $name_table = "cliente";

    public function __construct($conn, clientes $cliente){
        $this->conn = $conn;
        $this->cliente = $cliente;
    }

    public function Registro() { //read
		$query = '
			INSERT INTO
                '.$this->name_table.'
                    (nome, cpf, telefoneFixo, telefoneCelular, logradouro, numero, complemento, bairro, cidade, estado, cep)
                VALUES
                    (?,?,?,?,?,?,?,?,?,?,?)';
                
                
		$stmt = $this->conn->prepare($query);
            $stmt->bindValue(1, $this->cliente->__get('nome'));
            $stmt->bindValue(2, $this->cliente->__get('cpf'));
            $stmt->bindValue(3, $this->cliente->__get('telefoneFixo'));
            $stmt->bindValue(4, $this->cliente->__get('telefoneCelular'));
            $stmt->bindValue(5, $this->cliente->__get('logradouro'));
            $stmt->bindValue(6, $this->cliente->__get('numero'));
            $stmt->bindValue(7, $this->cliente->__get('complemento'));
            $stmt->bindValue(8, $this->cliente->__get('bairro'));
            $stmt->bindValue(9, $this->cliente->__get('cidade'));
            $stmt->bindValue(10, $this->cliente->__get('estado'));
            $stmt->bindValue(11, $this->cliente->__get('cep'));
		$stmt->execute();
                
		$restemp = $stmt->fetchAll(PDO::FETCH_OBJ);
        $stmt = null;
        $this->conn = null;

        return $restemp;
	}

    public function searchAll() { //read
		$query = '
			SELECT
                    *
                FROM
                    '.$this->name_table.' ';
                
                
		$stmt = $this->conn->prepare($query);
		$stmt->execute();
                
		$restemp = $stmt->fetchAll(PDO::FETCH_OBJ);
        $stmt = null;
        $this->conn = null;

        return $restemp;
	}



}