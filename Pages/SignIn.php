<?php

use App\Alert;
use App\DB;

require_once('../vendor/autoload.php');

$alertObject = new Alert();
$alertObject->alertAfterSignUp();
//in alert class

$authObject = new \App\Authenticate();
$authObject->signIn();

// $authObject->redirectIfAuth();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Front/SignIn.css">
    <title>Sign In</title>
</head>

<body>

<div class="TOP_NAV">
            <a href="Home.html">Home</a>
            <a href="about.html">About</a>
            <a href="Products.html">Products</a>
            <a class="active" href="signin.html">Sign In</a>
            <input type="text" placeholder="Search" style="height: 30px; position: absolute; top: 14px; right: 16px;"><br><br>
        </div>

        <div style="background-color: black; height: 70px; padding-top: 30px;">
            <marquee><img src="logo-white.png"></marquee>
        </div>
        <hr><br>

    <div class="signin-container">
        <h2>Sign In to Your Account</h2>
        <form method="POST">

                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input type="email" id="email" name="email" required>
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" required>
                </div>

                <button type="submit" name="SignInBtn" class="signin-btn">SIGN IN</button>

                <div class="signup-link">
                    Don't have an account? <a href="SignUp.php">Sign up</a>
                </div>

                
            </form>
    </div>

</html>