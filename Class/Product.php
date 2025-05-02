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
        
         //All Products
        $selectStatement = 'SELECT * FROM products';
        $myDBObject = new \App\DB();
        $queryObject = $myDBObject->Connection->prepare($selectStatement);
        $queryObject->execute();

        
        return $result = $queryObject->get_result(); //sqli object
    }


    public function getProductbyID($productId) {
        $selectStatement = 'SELECT * FROM `products` WHERE id=?';
        $myDBObject = new \App\DB();
        $queryObject = $myDBObject->Connection->prepare($selectStatement);
        $queryObject->bind_param('i', $productId);
        $queryObject->execute();

        return $result = $queryObject->get_result()->fetch_assoc();//sqli object
    }


    public function updateProduct($productId)
{
    if (isset($_POST['UpdateProductBtn'])) {
        $name = $_POST['Productinput'];
        $price = $_POST['productPrice'];
        $collection = $_POST['productCollection'];

        // Default to existing image
        $productData = $this->getProductbyID($productId);
        $image = $productData['image'];
    
        $updateStmt = "UPDATE `products` SET `name` = ?, `price` = ?, `image` = ?, `collection` = ? WHERE `id` = ?";
        $myDBObject = new \App\DB();
        $stmt = $myDBObject->Connection->prepare($updateStmt);
        $stmt->bind_param("ssssi", $name, $price, $image, $collection, $productId);

        if ($stmt->execute()) {
            header("Location: Product_View.php");
            exit();
        } else {
            \App\Alert::PrintMessage("Failed to update product", "danger");
        }
    }
}
        public function deleteProduct(){
            if (isset($_GET['deletedproduct'])) {

                $productId = $_GET['deletedproduct'];
                $deleteStatement = 'DELETE FROM `products` WHERE id = ?';
                $myDBObject = new \App\DB();
                $queryStmtObject = $myDBObject->Connection->prepare($deleteStatement);
                $queryStmtObject->bind_param('i', $productId);
                $checkQuery = $queryStmtObject->execute();
                if ($checkQuery)
                    header('location: Product_View.php');
                else
                    Alert::PrintMessage("Failed To Delete Product", "Danger");
            }
     }

}