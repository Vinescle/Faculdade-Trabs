<?php
//nome do arquivo:config.php
//Modo desenvolvimento
ini_set('display_errors', 1); 
error_reporting(E_ALL);

//Diretórios do ambiente
$controller = $_SERVER['DOCUMENT_ROOT'] ."/controller/";
$model = $_SERVER['DOCUMENT_ROOT'] ."/controller/model/";
$service = $_SERVER['DOCUMENT_ROOT'] ."/controller/service/";
$view = $_SERVER['DOCUMENT_ROOT'] ."/view/";
$js = "./view/assets/js/";

//Conexão com o Banco de dados
include_once($controller."conn.php");
