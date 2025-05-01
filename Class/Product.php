<?php

namespace App;

class Product
{
    public function createNewProduct()
    {
        
        if (isset($_POST['addNewPrBtn'])) {
            $name = $_POST['NameInput'];
            $price=$_POST['PriceInput'];
            $image=$_POST['ImageInput'];
            $collection=$_POST['CollectionInput'];
            // $date = date("Y-m-d H:i:s");
            $insertStatement = 'INSERT INTO `products` VALUES(NULL,?,?,?,?)';
            $myDBObject = new \App\DB();
            $queryObject = $myDBObject->Connection->prepare($insertStatement);
            $queryObject->bind_param('siss', $name, $price, $image, $collection);
            $checkQuery = $queryObject->execute();
            if ($checkQuery)
                \App\Alert::PrintMessage("Done Inserting Product", "Normal");
            else
                Alert::PrintMessage("Failed To Insert Product", "Danger");
        }
    }

}