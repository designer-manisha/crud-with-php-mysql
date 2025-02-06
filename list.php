<?php
require 'conn.php';
$sql = "SELECT * FROM `php_crud`";
$result = mysqli_query($conn,$sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h2 class="navbar navbar-light justify-content-center fs-3 mb-5"
        style="background-color: green; color:white;">User List</h2>
    <div class="text-end mb-3">
        <a href="create.php" class="btn btn-success">Create New User</a>
    </div>
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Password</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>

        <?php
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>
                        <td>{$row['id']}</td>
                        <td>{$row['name']}</td>
                        <td>{$row['email']}</td>
                        <td>{$row['phone']}</td>
                        <td>{$row['password']}</td>
                        <td>
                            <a href='edit.php?id={$row['id']}' class='btn btn-sm btn-warning'>Edit</a>
                            <a href='delete.php?id={$row['id']}' class='btn btn-sm btn-danger' 
                            onclick='return confirm(\"Are you sure you want to delete this record?\");'>Delete</a>
                        </td>
                    </tr>";
                }
            } else {
                echo "<tr><td colspan='6' class='text-center'>No records found.</td></tr>";
            }
            ?>
        </tbody>
    </table>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
