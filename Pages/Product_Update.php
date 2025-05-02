<?php

use App\Product;

require_once('../vendor/autoload.php');

$authObj = new \App\Authenticate();
$authObj->redirectIfNotAuth();

// Check for valid product ID
if (empty($_GET['rowId'])) {
    App\Alert::PrintMessage("Cannot Access This Page", "danger");
    exit();
}

$productObj = new Product();
$productId = $_GET['rowId'];
$productToUpdatearr = $productObj->getProductbyID($productId);

// Call update function with actual ID
$productObj->updateProduct($productId);

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Product</title>
    <style>
        input, textarea { unicode-bidi: plaintext; }
        .container {
            margin: auto;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 8px;
            width: 450px;
            position: relative;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        label { font-weight: bold; }
        input[type="text"], input[type="number"], input[type="file"] {
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
        button:hover { background-color: brown; }
        #productCollection {
            height: 30px;
            width: 90%;
            margin: 5px 4px 15px;
        }
    </style>
</head>
<body>

<?php require($_SERVER['DOCUMENT_ROOT'] . '/PR_IA/Pages/Layout/Navbar.php'); ?>

<!-- Product Update Container Start -->
<div class="Product_Update">
    <h1 style="font-style: italic; text-align:center; margin: 20px 0;">Update Product</h1>
    <div class="container">
        <form method="POST" enctype="multipart/form-data">
            <fieldset>

                <label for="Productinput">Product Name:</label>
                <input type="text" value="<?php echo htmlspecialchars($productToUpdatearr['Name']); ?>" id="Productinput" name="Productinput" required>

                <label for="productPrice">Price:</label>
                <input type="number" value="<?php echo htmlspecialchars($productToUpdatearr['price']); ?>" id="productPrice" name="productPrice" required>

                <label for="productIamge">Product Image:</label>
                <input type="file" id="productIamge" name="productIamge" accept="image/*">

                <label for="productCollection">Collection Name:</label><br>
                <select id="productCollection" name="productCollection" required>
                    <option value="">-- Select Collection --</option>
                    <option value="TOP PICKS" <?php if($productToUpdatearr['collection'] == "TOP PICKS") echo "selected"; ?>>TOP PICKS</option>
                    <option value="THE JASMINE CAPSULE" <?php if($productToUpdatearr['collection'] == "THE JASMINE CAPSULE") echo "selected"; ?>>THE JASMINE CAPSULE</option>
                    <option value="THE GODDESS COLLECTION" <?php if($productToUpdatearr['collection'] == "THE GODDESS COLLECTION") echo "selected"; ?>>THE GODDESS COLLECTION</option>
                    <option value="GOLDEN COLLECTION" <?php if($productToUpdatearr['collection'] == "GOLDEN COLLECTION") echo "selected"; ?>>GOLDEN COLLECTION</option>
                    <option value="JEWELRY" <?php if($productToUpdatearr['collection'] == "JEWELRY") echo "selected"; ?>>JEWELRY</option>
                </select>

                <br>
                <button type="submit" name="UpdateProductBtn">Update Product</button>
            </fieldset>
        </form>
    </div>
</div>

</body>
</html>
