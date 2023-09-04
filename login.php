<?php

session_start();

require_once "db_connect.php";

//Get username and password from form

// Get username and password from form
$username = $_POST["username"];
$password = $_POST["password"];
$role = $_POST["role"];

// Query the database for the user
$sql = "SELECT * FROM users WHERE username='$username' AND password='$password' AND role = '$role'";
$result = mysqli_query($conn, $sql);

// Check if the user exists
if ((mysqli_num_rows($result) == 1)) {
    // User exists

    $row = mysqli_fetch_assoc($result);
    if ($row["role"] == "admin") {
        // Redirect to admin panel
        $_SESSION["username"] = $username;
        $_SESSION["role"] = "admin";
        header("Location: admin_panel.php");
    } elseif ($row["role"] == "supplier"){
        // Redirect to supplier panel
        $_SESSION["username"] = $username;
        $_SESSION["role"] = "supplier";
        header("Location: supplier_panel.php");
    } else {
        // Redirect to user panel
        $_SESSION["username"] = $username;
        $_SESSION["role"] = "user";
        header("Location: index.html");
    }

} else {
    // User does not exist
    echo "Invalid username or password.";
}

// Close the database connection
mysqli_close($conn);