<?php

// session_start();
// var_dump($_SESSION);


require_once('../vendor/autoload.php'); 
$myObj = new \App\DB();
$authObject = new \App\Authenticate();

// $authObject->redirectIfNotAuth();
$authObject->logout();
?>

<?php require($_SERVER['DOCUMENT_ROOT'] . '/PR_IA/Pages/Layout/Navbar.php')?> 
