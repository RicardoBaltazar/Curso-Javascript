<?php

require_once 'db_connect.php';
require_once 'todolist.php';

if(isset($_POST['action-todolist'])){
    $item = mysqli_escape_string($connect, $_POST['item-description']);

    $item = strtolower($item);

    $sql = "insert into list(user ,item)values('$name' ,'$item')";
    
    //$data = mysqli_query($connect, $sql)or die(mysqli_error());
    
    if(mysqli_query($connect, $sql)){
        header('Location: todolist.php?Success');
    } else {
        
        header('Location: todolist.php?Error');
    }

}




?>