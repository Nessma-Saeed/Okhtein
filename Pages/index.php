
<?php

require_once('../vendor/autoload.php'); 
$myObj = new \App\DB();

?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="\viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Front/">
</head>
<body>
<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/IA/pages/Layout/Navbar.php' ?>
<h1>Welcome Back, <?php echo $_SESSION['Username'] ?></h1>
</body>
</html>