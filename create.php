<?php
require 'conn.php';

$name = '';
$email = '';
$phone = '';
$password = '';

// if(isset($_POST['submit'])){
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$password = $_POST['password']; 


$sql = "INSERT INTO `php_crud` (`name`, `email`, `phone`, `password`)
values('$name', '$email', '$phone', '$password')";
$result = mysqli_query($conn,$sql);

if($result){
    echo "Data inserted successfully";
}else{
    die(mysqli_error($conn));
}

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h2 class="navbar navbar-light justify-content-center fs-3 mb-5"
    style="background-color: green; color:white;">Create User</h2>
    <div class="text-end mb-3">
        <a href="list.php" class="btn btn-success">User List</a>
    </div>
    <form method="post">
        <div class="mb-3">
            <label for="name" class="form-label">Name :</label>
            <input type="text" class="form-control" name="name" id="name" placeholder="Enter your name" required>
        </div>
        
        <div class="mb-3">
            <label for="email" class="form-label">Email :</label>
            <input type="email" class="form-control" name="email" id="email" placeholder="Enter your email" required>
        </div>
        <div class="mb-3">
            <label for="phone" class="form-label">Phone :</label>
            <input type="num" class="form-control" name="phone" id="phone" placeholder="Enter your phone" required>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password :</label>
            <input type="password" class="form-control" name="password" id="password" placeholder="Enter your password" required>
        </div>
        
       
        
        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
