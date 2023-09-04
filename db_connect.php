<?php
// Connect to MySQL database
$conn = mysqli_connect // include the servername, username, password and database name;

// Check if connection was successful
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
