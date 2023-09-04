<?php
require_once 'db_connect.php';
session_start();

// Check if user is logged in
if (!isset($_SESSION["username"]) || $_SESSION["role"] != 'supplier') {
    // Redirect to login page
    header("Location: login.php");
    exit();
}



if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $new_productID = $_POST["productID"];
    $new_product = $_POST["product"];
    $new_description = $_POST["description"];
    $new_price = $_POST["price"]; // Assuming a dropdown with options

    $query = "INSERT INTO products (productID, product, description, price ) VALUES ('$new_productID', '$new_product', '$new_description', '$new_price')";
    $result = mysqli_query($conn, $query);

    if ($result) {
        header("Location: view_products.php");
        exit();
    } else {
        $error_message = "Error adding the product.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Head content here -->
</head>
<body>
    <style>
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

        .supplier-container {
            max-width: 500px;
            padding: 25px;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.1);
        
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
    <div class="supplier-container">
        <h1>Add Product</h1>
        <form method="post" action="" class="add-form">
            <label for="productID">Product ID:</label>
            <input type="text" id="ProductID" name="productID" required><br>
            <label for="product">Product:</label>
            <input type="text" id="Product" name="product" required><br>
            <label for="description">Description:</label>
            <input type="text" id="Description" name="description" required><br>
            <label for="price">Price:</label>
            <input type="text" id="Price" name="price" required><br>
            <button type="submit">Add Product</button>
        </form>
        <?php if (isset($error_message)) { ?>
            <p><?php echo $error_message; ?></p>
        <?php } ?>
    </div>
    <!-- Script includes and other content -->
</body>
</html>




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