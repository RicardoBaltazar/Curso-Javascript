<?php

require_once 'db_connect.php';


if(isset($_POST['action-todolist'])){
    $item = mysqli_escape_string($connect, $_POST['item-description']);

    $item = strtolower($item);

    $sql = "insert into list(item)values('$item')";
    
    if(mysqli_query($connect, $sql)){
        header('Location: todolist.php?Success');
    } else {
        header('Location: todolist.php?Error');
    }

}




?>