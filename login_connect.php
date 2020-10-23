<?php

require_once('db_connect.php');
session_start();

if(isset($_POST['action'])){
    //$name = mysqli_escape_string($connect, $_POST['name']);
    $email = mysqli_escape_string($connect, $_POST['email']);
    $password = mysqli_escape_string($connect, $_POST['password']);

    //$name = strtolower($name);
    


    $sql = "select * from client where email = '$email' AND password = '$password'";
    $result = mysqli_query($connect, $sql);

    if(mysqli_num_rows($result) > 0){
        //$_SESSION['name'] = $name;
        $_SESSION['email'] = $email;
        $_SESSION['password'] = $password;
        header('location:todolist.php');
    } else {
        //unset($_SESSION['name']);
        unset($_SESSION['email']);
        unset($_SESSION['password']);
        header('location:index.php');
    }

    

}

?>