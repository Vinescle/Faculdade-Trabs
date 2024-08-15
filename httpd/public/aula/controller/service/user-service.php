<?php
class UserService{

    private $conn;
    private $user;
    private $name_table = "user";

    public function __construct($conn, User $user){
        $this->conn = $conn;
        $this->user = $user;
    }

    public function Registro() { //read
		$query = '
			INSERT INTO
                '.$this->name_table.'
                    (name)
                VALUES
                    (?)';
                
                
		$stmt = $this->conn->prepare($query);
            $stmt->bindValue(1, $this->user->__get('name'));
		$stmt->execute();
                
		$restemp = $stmt->fetchAll(PDO::FETCH_OBJ);
        $stmt = null;
        $this->conn = null;

        return $restemp;
	}

    public function Update()
    { 
        $query = '
			UPDATE
                '.$this->name_table.'
            SET
                name = ?
            WHERE
                id = ? ';


        $stmt = $this->conn->prepare($query);
        $stmt->bindValue(1, $this->user->__get('name'));
        $stmt->bindValue(2, $this->user->__get('id'));
        $stmt->execute();
        
        $restemp = $stmt->fetchAll(PDO::FETCH_OBJ);
        $stmt = null;
        return $restemp;
        
    }

    public function Delete(){
        $query = '
			delete from
                '.$this->name_table.'
                where
                    id = ?';
		$stmt = $this->conn->prepare($query);
            $stmt->bindValue(1, $this->user->__get('id'));
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

    public function searchID() { //read
		$query = '
			SELECT
                    *
                FROM
                    '.$this->name_table.'
                WHERE
                    id = ? ';
                
                
		$stmt = $this->conn->prepare($query);
        $stmt->bindValue(1, $this->user->__get('id'));
		$stmt->execute();
                
		$restemp = $stmt->fetchAll(PDO::FETCH_OBJ);
        $stmt = null;
        $this->conn = null;
        //retorna o único registro encontrado
        return $restemp[0];
	}



}