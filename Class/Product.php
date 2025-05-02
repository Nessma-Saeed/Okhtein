<?php

namespace App;

class Product
{
    public function createNewProduct()
    {
         if (isset($_POST['addNewProductBtn'])) {
            
            $productName = $_POST['Productinput'];
            $productPrice = $_POST['productPrice'];
            $productCollection = $_POST['productCollection'];
        
            // Handle image upload
            $imageName = $_FILES['productIamge']['name'];
            $imageTmp = $_FILES['productIamge']['tmp_name'];
            $uploadDir = 'uploads/';
            $imagePath = $uploadDir . basename($imageName);
        
            // Create upload directory if it doesn't exist
            if (!is_dir($uploadDir)) {
                mkdir($uploadDir, 0777, true);
            }
            
                    //add images to project folder
            if (move_uploaded_file($imageTmp, $imagePath)) {
                // Insert product into the database
                $insertStatement = 'INSERT INTO `products` (`Name`, `price`, `image`, `collection`, `user_id`) VALUES (?, ?, ?, ?, ?)';
                $myDBObject = new \App\DB();
                $queryObject = $myDBObject->Connection->prepare($insertStatement);
                $queryObject->bind_param('sissi', $productName, $productPrice, $imagePath, $productCollection, $_SESSION['userID']);
                $CheckQuery=$queryObject->execute();

               if($CheckQuery) \App\Alert::PrintMessage("Done inserting New Product","Normal");
               else \App\Alert::PrintMessage("Failed TO Insert Product","Danger");
        }
        }
    }
    public function getProducts() {
        $myDBObject = new \App\DB();
         //All Products
        $selectStatement = 'SELECT * FROM products';

        $queryObject = $myDBObject->Connection->prepare($selectStatement);
        $queryObject->execute();

        $result = $queryObject->get_result();
        return $result;
    }
}