<?php
require 'conn.php';

// Get the ID from the URL
$id = $_GET['id'];

// Fetch the existing data for the user with the given ID
$sql = "SELECT * FROM php_crud WHERE id = $id";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

$name = $row['name'];
$email = $row['email'];
$phone = $row['phone'];
$password = $row['password'];

// Update the record if the form is submitted
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];

    $sql = "UPDATE php_crud SET name='$name', email='$email', phone='$phone', password='$password' WHERE id=$id";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo "Record updated successfully";
        header("Location: list.php");
        exit();
    } else {
        echo "Failed to update record: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h2 class="navbar navbar-light justify-content-center fs-3 mb-5"
        style="background-color: green; color:white;">Edit User</h2>
    <div class="text-end mb-3">
        <a href="list.php" class="btn btn-success">User List</a>
    </div>
    <form method="post">
        <div class="mb-3">
            <label for="name" class="form-label">Name:</label>
            <input type="text" class="form-control" name="name" id="name" value="<?php echo $name; ?>" placeholder="Enter your name">
        </div>
        
        <div class="mb-3">
            <label for="email" class="form-label">Email:</label>
            <input type="email" class="form-control" name="email" id="email" value="<?php echo $email; ?>" placeholder="Enter your email">
        </div>
        
        <div class="mb-3">
            <label for="phone" class="form-label">Phone:</label>
            <input type="number" class="form-control" name="phone" id="phone" value="<?php echo $phone; ?>" placeholder="Enter your phone">
        </div>
        
        <div class="mb-3">
            <label for="password" class="form-label">Password:</label>
            <input type="password" class="form-control" name="password" id="password" value="<?php echo $password; ?>" placeholder="Enter your password">
        </div>
        
        <button type="submit" class="btn btn-primary" name="submit">Update</button>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
