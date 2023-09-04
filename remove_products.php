<?php
require_once 'db_connect.php'; // Include your database connection file here
session_start();

if (!isset($_SESSION["username"]) || $_SESSION["role"] != 'supplier') {
    header("Location: login.php");
    exit();
}

$username = $_SESSION["username"];

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["productID"])) {
    $productID = mysqli_real_escape_string($conn, $_POST["productID"]);

    $query = "DELETE FROM products WHERE productID = '$productID'";
    $result = mysqli_query($conn, $query);

    if ($result) {
        header("Location: view_products.php");
        exit();
    } else {
        $error_message = "Error deleting the product.";
    }
}

$sql = "SELECT productID, product, description, price FROM products";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Remove Product</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }

        .supplier-container {
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            margin: 20px;
            max-width: 400px;
            margin: auto;
        }

        h1 {
            margin: 0 0 20px;
        }

        label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        input {
            width: 24rem;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 14px;
            margin-bottom: 10px;
        }

        button {
            background-color: #dc3545;
            color: white;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            cursor: pointer;
        }
    </style>

</head>
 <body>

    <div class="supplier-container">
        <h1>Remove Product</h1>
        <form method="post">
            <label for="productID">Product ID:</label>
            <input type="text" id="productID" name="productID" required><br>
            <button type="submit">Remove Product</button>
        </form>
        <?php if (isset($error_message)) { ?>
            <p><?php echo $error_message; ?></p>
        <?php } ?>
    </div>
    <!-- Script includes and other content -->
</body>
</html>
