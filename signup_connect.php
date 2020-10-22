<?php

require_once 'db_connect.php';

if(isset($_POST['action'])){
    $firstName = mysqli_escape_string($connect, $_POST['first_name']);
    $lastName = mysqli_escape_string($connect, $_POST['last_name']);
    $email = mysqli_escape_string($connect, $_POST['email']);
    $password = mysqli_escape_string($connect, $POST['password']);
    
    $nome = $firstName.' '.$lastName;
    $securePassword = password_hash($password, PASSWORD_DEFAULT);
    
    $sql = "insert into client(name, email, password)values('$nome', '$email', '$securePassword')";
    
    if(mysqli_query($connect, $sql)){
        header('Location: index.php?Success');
    } else {
        header('Location: signup.php?Error');
    }
}

?>
