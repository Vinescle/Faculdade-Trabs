<?php
class User{
    private $id;
    private $name;
    
    public function __set($atributo, $valor){
        $this->$atributo = $valor; 
        return $this;
    }

    public function __get($atributo){
        return $this->$atributo;
    }

}