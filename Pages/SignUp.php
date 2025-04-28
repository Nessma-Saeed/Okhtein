<?php

use App\Authenticate;
require_once("../vendor/autoload.php");
$authObj= new Authenticate;
$authObj->signUp(); 

?>
<!doctype html> 
<html>
    <head> 
        <title>OKHTEIN - Sign Up</title>
        <style>
            .TOP_NAV {
                background-color: black;
                overflow: hidden;
                /*clip the content that overflows an element's box, making the rest of the content invisible */
            }
            .TOP_NAV a{
                float:left;
                color: white;
                text-align:center;
                padding:14px 16px;
                text-decoration: none;
                font-size:17px;
            }
            .TOP_NAV a:hover{
                background-color: blanchedalmond;
                color: brown;
            }
            .TOP_NAV a.active{
                background-color: blanchedalmond;
                color: black;
            }
            body {
                background-color: beige;
                font-family: Arial, sans-serif;
            }

            a:hover{
                font-weight:bold;
            }
            
            .signup-container {
                width: 400px;
                margin: 50px auto;
                padding: 30px;
                background-color: white;
                border-radius: 5px;
                box-shadow: 0 0 10px rgba(0,0,0,0.1);
            }
            
            .signup-container h2 {
                text-align: center;
                margin-bottom: 20px;
                color: #333;
            }
            
            .form-group {
                margin-bottom: 15px;
            }
            
            .form-group label {
                display: block;
                margin-bottom: 5px;
                font-weight: bold;
            }
            
            .form-group input {
                width: 100%;
                padding: 10px;
                border: 1px solid #ddd;
                border-radius: 4px;
                box-sizing: border-box;
            }
            
            .signup-btn {
                width: 100%;
                padding: 12px;
                background-color: black;
                color: white;
                border: none;
                border-radius: 4px;
                cursor: pointer;
                font-size: 16px;
            }
            
            .signup-btn:hover {
                background-color: #333;
            }
            
            .login-link {
                text-align: center;
                margin-top: 15px;
            }
        </style>
    </head>
    
    <body>
        <div class="TOP_NAV">
            <a href="Home.html">Home</a>
            <a href="about.html">About</a>
            <a href="Products.html">Products</a>
            <a class="active" href="signup.html">Sign Up</a>
            <input type="text" placeholder="Search" style="height: 30px; position: absolute; top: 14px; right: 16px;"><br><br>
        </div>

        <div style="background-color: black; height: 70px; padding-top: 30px;">
            <marquee><img src="logo-white.png"></marquee>
        </div>
        <hr><br>

        <div class="signup-container">
            <h2>Create Your Account</h2>
            <form method="POST">
                <div class="form-group">
                    <label for="name">Username</label>
                    <input type="text" required id="name" name="name" required>
                </div>
                
                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input type="email" required id="email" name="email" required>
                </div>
                
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" required id="password" name="password" required>
                </div>
                
                <div class="form-group">
                    <label for="confirm-password">Confirm Password</label>
                    <input type="password" required id="confirm-password" name="cpassword" required>
                </div>
                
                <button type="submit" name="signUpBtn" class="signup-btn">SIGN UP</button>
                
                <div class="login-link">
                    Already have an account? <a href="login.html">Log in</a>
                    <br>
                </div>

             </form>
        </div>
        
        <hr>
        
        <footer>
            <div style="display: inline-block;"><p>Newsletter</p>
                <input type="email" placeholder="Your Email" style="height: 30px;width: 200px;">
            </div>
            
            <div style="display: inline-block; float: right; margin-right: 16px;">
                <p>
                    <a href="https://www.instagram.com/okhtein/" style="text-decoration: none; color: black;font-size: 18px;">Instagram</a> <br>
                    <a href="https://web.facebook.com/okhtein/?_rdc=1&_rdr" style="text-decoration: none; color: black; font-size: 18px;">Facebook</a><br>
                    <a href="https://www.pinterest.com/okhtein/" style="text-decoration: none; color: black; font-size: 18px;">Pinterest</a>
                </p>
            </div>
        </footer>
    </body>
</html>