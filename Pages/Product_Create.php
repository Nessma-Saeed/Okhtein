<?php

use App\Task;

require_once('../vendor/autoload.php');

$authObj = new \App\Authenticate();
$authObj->redirectIfNotAuth();

// (new Product())->createNewProduct();

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="\viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
    <style>
        input,
        textarea {
            unicode-bidi: plaintext;
        }
    </style>

</head>
<body>

<?php require($_SERVER['DOCUMENT_ROOT'] . '/PR_IA/Pages/Layout/Navbar.php')?> 



<!-- To-Do-List Container Start -->
<div class="To-Do-List Container">
    <h1 style="font-style: italic;margin:15px auto">Add New Task </h1>
    <div class="container col-4">
        <form action="" method="post">
            <div class="col">
                <div class="col">
                    <label style="font-weight: bold;" for="NoteIN"> Task :</label>
                    <input required id="AddData" class="form-control " type="text" name="taskInput" id="NoteIN"
                           placeholder="Enter Task Here">
                </div>
            </div>
            <div class="col">
                <div class="text-center">
                    <button style="margin-top: 20px;" type="submit" name="addNewTaskBtn"
                            class="btn btn-outline-primary text-center">Add task
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
<!-- To-Do-List Container End -->


</body>
</html>
