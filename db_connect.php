<?php

$host = 'localhost';
$user = 'root';
$password = '';
$database = 'todolist';

$connect = mysqli_connect($host, $user, $password, $database);

if(mysqli_connect_error()){
    echo 'Erro na conexão: '.mysqli_connect_error();
};

?>