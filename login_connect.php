<?php

require_once('db_connect.php');
session_start();

if(isset($_POST['action'])){
    $email = mysqli_escape_string($connect, $_POST['email']);
    $password = mysqli_escape_string($connect, $_POST['password']);

    $sql = "select * from client where email = '$email' and $password = '$password'";
    $result = mysqli_query($connect, $sql);

    if(mysqli_num_rows($result) > 0){
        $_SESSION['email'] = $email;
        $_SESSION['password'] = $password;
        header('location:todolist.php');
    } else {
        unset($_SESSION['email']);
        unset($_SESSION['password']);
        header('location:index.php');
    }
}

?>