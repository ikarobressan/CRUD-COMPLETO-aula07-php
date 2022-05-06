<?php

//define('HOST', 'localhost'); //como se eu estivesse criando uma variavel global
$host = 'localhost';

define('USER', 'root');

define('PASSWORD', '');

define('DB_NAME', 'aula'); //puxando o banco de dados

$banco = new PDO('mysql:host='.$host.';dbname='.DB_NAME, USER, PASSWORD);

?>