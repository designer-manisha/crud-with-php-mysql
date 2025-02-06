<?php
require 'conn.php';
if(isset($_GET['id'])){
    $id = $_GET['id'];

    $sql = "DELETE FROM `php_crud` WHERE id = $id";
    $result = mysqli_query($conn,$sql);
    if($result){
        // echo "Deleted successfull";
        header("Location: list.php");
    }else{
        die(mysqli_error($conn));
    }
}
?> 