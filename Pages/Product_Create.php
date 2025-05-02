<?php
use App\DB;
use App\Product;
use App\Task;

require_once('../vendor/autoload.php');

$authObj = new \App\Authenticate();
$authObj->redirectIfNotAuth();

//CRUD OP
(new Product())->createNewProduct();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
    <style>
        input,
        textarea {
            unicode-bidi: plaintext;
        }

        .container {
            margin: auto;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 8px;
            width: 450px;
            position: relative;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        label {
            font-weight: bold;
        }

        input[type="text"],
        input[type="number"],
        input[type="file"] {
            width: 90%;
            padding: 8px;
            margin: 5px 4px 10px;
        }

        button {
            padding: 10px 20px;
            background-color: black;
            color: white;
            border: none;
            cursor: pointer;
            margin: 5px 4px 15px;
            width: 40%;
        }

        button:hover {
            background-color: brown;
        }
        #productCollection{
            height: 30px; width:90%;
            margin: 5px 4px 15px;
        }
    </style>
</head>
<body>

<?php require($_SERVER['DOCUMENT_ROOT'] . '/PR_IA/Pages/Layout/Navbar.php'); ?>

<!-- Product create Container Start -->
<div class="Product_Create">
    <h1 style="font-style: italic; text-align:center; margin: 20px 0;">Add New Product</h1>
    <div class="container">
        <form method="POST" enctype="multipart/form-data" >
            <fieldset>
                <legend>Add New Product</legend>
                <label for="Productinput">Product Name:</label>
                <input type="text" id="Productinput" name="Productinput" required>

                <label for="productPrice">Price:</label>
                <input type="number" id="productPrice" name="productPrice" required>

                <label for="productIamge">Product Image:</label>
                <input type="file" id="productIamge" name="productIamge" accept="image/*" required>

                <label for="productCollection">Collection Name:</label><br>
                <select id="productCollection" name="productCollection" required>
                                <option value="">-- Select Collection --</option>
                                <option value="TOP PICKS">TOP PICKS</option>
                                <option value="THE JASMINE CAPSULE">THE JASMINE CAPSULE</option>
                                <option value="THE GODDESS COLLECTION">THE GODDESS COLLECTION</option>
                                <option value="GOLDEN COLLECTION">GOLDEN COLLECTION</option>
                                <option value="JEWELRY">JEWELRY</option>
                                 </select>
                <br>
                <button type="submit" name="addNewProductBtn" >Add Product</button>
            </fieldset>
        </form>
    </div>
</div>

</body>
</html>
