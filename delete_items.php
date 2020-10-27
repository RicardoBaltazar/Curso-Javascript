<?php
require_once 'db_connect.php';

if(isset($_GET['delete-id'])){
    $id = $_GET['delete-id'];
    $id = mysqli_escape_string($connect, $_GET['delete-id']);
    
    $sql = "delete from list where id = '$id'";

    if(mysqli_query($connect, $sql)){
        header('Location: todolist.php');
    } else {
        header('Location: todolist.php?Error');
    }
}

?>