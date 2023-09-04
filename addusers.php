<?php
require_once 'db_connect.php'; // Include your database connection file here
session_start();

if (!isset($_SESSION["username"]) || $_SESSION["role"] != 'admin') {
    header("Location: login.php");
    exit();
}

$username = $_SESSION["username"];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $new_userID = $_POST["userID"];
    $new_username = $_POST["username"];
    $new_password = $_POST["password"];
    $new_role = $_POST["role"]; // Assuming a dropdown with options

    $query = "INSERT INTO users (userID, username, password, role) VALUES ('$new_userID', '$new_username', '$new_password', '$new_role')";
    $result = mysqli_query($conn, $query);

    if ($result) {
        header("Location: viewusers.php");
        exit();
    } else {
        $error_message = "Error adding the user.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add User</title>
    <style>
        /* Add your styles here */
        /* Add your styles here */
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            max-width: 500px;
            padding: 25px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.1);
            height: 450px
        }

        h1 {
            text-align: center;
            margin-bottom: 0 0 20px;
            color: #333;
        }

        

        label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
            color: #666;
        }


        input {
            width: 30rem;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 14px;
            margin-bottom: 15px;
        }

        select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 14px;
            margin-bottom: 20px;
        }

        button {
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            padding: 12px 20px;
            cursor: pointer;
            width: 100%;
            font-size: 14px;
            padding bottom: 10px;
        }

        .error {
            color: #dc3545;
            font-size: 14px;
            margin-top: 5px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Add User</h1>
        </div>
        <form method="post" action="" class="add-form">
        <label for="userId">User ID:</label>
            <input type="text" name="userID" required>
            <label for="username">Username:</label>
            <input type="text" name="username" required>
            <label for="password">Password:</label>
            <input type="password" name="password" required>
            <label for="role">Role:</label>
            <select name="role" required>
                <option value="user">User</option>
                <option value="supplier">Supplier</option>
                <option value="admin">Admin</option>
            </select>
            <button type="submit" name="add_user">Add User</button>
        </form>
    </div>



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>
</html>

