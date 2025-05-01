<!-- //if auth access navbar

//Another way to make obj from class
//anonymous obj->
//(new \App\Authenticate())->isAuth() -->
<?php

require_once('../vendor/autoload.php'); 
$myObj = new \App\DB();
$authObject = new \App\Authenticate();

// $authObject->redirectIfNotAuth();
$authObject->logout();

?>



<!doctype html>
<html lang="en">
<head>
    <style>
            .TOP_NAV {
            background-color: black;
            overflow: hidden;
            }
            .TOP_NAV a{
                float:left;
                color: white;
                text-align:center;
                padding:14px 16px;
                text-decoration: none;
                font-size:17px;             
                /* display: ; */
            }
           
            .TOP_NAV a:hover{
                background-color: blanchedalmond;
                color: brown;
            }
            .TOP_NAV a.active{
                background-color: blanchedalmond;
                color: black;
            }
            li{
                display: inline;
            }
    </style>
</head>
<body>
<nav div class="TOP_NAV">
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link"  href="Products.php">Products</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="Product_View.php">Product_View</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="Product_Create.php">Product_Create</a>
            </li>
            <li>
            <?php if ((new \App\Authenticate())->isAuth()): ?>
                <li class="nav-item ">
                    <a style="color: red" class="nav-link" href="index.php?logout=1">LogOut</a>
                </li>
            <?php else: ?>
                <li class="nav-item ">
                    <a style="color: green" class="nav-link" href="SignIn.php">Sign In</a>
                </li>
                <li class="nav-item ">
                    <a style="color: cornflowerblue" class="nav-link" href="SignUp.php">Sign Up</a>
                </li>
            <?php endif; ?>
            </li>
        </ul>
    </div>
</nav>

          </div>
          <div style="background-color: black; height: 70px; padding-top: 30px;">
            <marquee><img src="pictures/logo-white.png"></marquee>
        </div>
        <!--navigation bar-->
    <!-- To access navbar once,,, .->"concatenation",,, Full path -->



</body>
</html>
