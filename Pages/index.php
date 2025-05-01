
<?php

require_once('../vendor/autoload.php'); 
$myObj = new \App\DB();
$authObject = new \App\Authenticate();

$authObject->redirectIfNotAuth();

$authObject->logout();

?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="\viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Front">
    <title>HOME Page</title>
</head>
<body>
    <!-- To access navbar once,,, .->"concatenation",,, Full path -->
<!--Depend on each user -->
<h1>Welcome Back, <?php echo $_SESSION['userName'] ?></h1>
</body>
</html>