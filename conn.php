<?php

$surver_name = 'localhost';
$user_name = 'root';
$password = '';
$db_name = 'manisha_db';

$conn = mysqli_connect($surver_name, $user_name, $password, $db_name);

if (!$conn) {
    die ("Connection failed: " . mysqli_connect_error());
}else{
    // echo "db connected successfully";
}


?>