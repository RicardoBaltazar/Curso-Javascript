<?php

require_once 'db_connect.php';
session_start();

if(isset($_POST['action'])){
    $firstName = mysqli_escape_string($connect, $_POST['first_name']);
    $lastName = mysqli_escape_string($connect, $_POST['last_name']);
    $email = mysqli_escape_string($connect, $_POST['email']);
    $password = mysqli_escape_string($connect, md5($_POST['password']));

    $name = $firstName.' '.$lastName;

    $name = strtolower($name);
    $email = strtolower($email);
    
    $sql = "insert into client(name, email, password)values('$name', '$email', '$password')";
    
    if(mysqli_query($connect, $sql)){
        header('Location: index.php?Success');
    } else {
        header('Location: signup.php?Error');
    }
}

?>
