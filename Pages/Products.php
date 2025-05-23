<!-- 

<?php

require_once('../vendor/autoload.php'); 
$myObj = new \App\DB();
$authObject = new \App\Authenticate();

$authObject->redirectIfNotAuth();
?>

<!doctype html>
<html>
    <head>
        <title>PRODUCTS.OKHTEIN</title>
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
            }
           
            .TOP_NAV a:hover{
                background-color: blanchedalmond;
                color: brown;
            }
            .TOP_NAV a.active{
                background-color: blanchedalmond;
                color: black;
            }
            .parent1{display: flex;
             justify-content: space-around;}
             
            .parent2,.parent3,.parent4, .top_picks{
                display: flex;
                justify-content: space-around;
            }
            /* display flex = display inlineblock, justifycontent: spaces around divs */
            .top_picks, .parent1,.parent2,.parent3,.parent4 p{
                text-align: center;
                font-size: larger;
            }
            h2{font-weight: 400;
               text-align: center;}
            .newsletter h3{
                text-align: left;
                font-weight: normal;
            }
            p:hover{
                font-weight:bold;
                color: brown;
            }
            a:hover{
                font-weight:bold;
            }/* footer links */
        </style>
    </head>
    <body>
        <?php require($_SERVER['DOCUMENT_ROOT'] . '/PR_IA/Pages/Layout/Navbar.php')?> 
        <!--navigation bar-->
        <hr><br>
        <h2><b>TOP PICKS</b></h2><hr>
        <div class="top_picks">
            <div>
                <img src="pictures/tblack1.jpg" height="350" width="405" style="margin: 2px;">
                <p>Mini Studded</p>
                <p>EGP 26,000.00</p>
            </div>
            <div>
                <img src="pictures/tbrown2.jpg" height="350" width="405" style="margin: 2px; ">
                <p>Dome Clutch</p>
                <p>EGP 30,000.00</p>
            </div>
            <div>
                <img src="pictures/tblack2.jpg" height="350" width="405" style="margin: 2px;">
                <p>Duo Top Handle Charm</p>
                <p>EGP 45,000.00</p>
            </div>
        </div><br>
        <h2><b>THE JASMINE CAPSULE</b></h2><hr>
          <div class="parent1">
                 <div>
                    <img src="pictures/yblack.jpg" height="350" width="405" style="margin: 2px;">
                    <p>YASMINE BAG</p>
                    <p>EGP 38,500.00</p>
                 </div>
               <div >
                   <img src="pictures/yred.jpg" height="350" width="405" style="margin: 2px;">
                        <p>YASMINE BAG</p>
                        <p> EGP 38,500.00</p> 
                </div>
               <div >
                 <img src="pictures/ybeige.jpg" height="350" width="405" style="margin: 2px;">
                 <P>YASMINE BAG</P>
                 <p>EGP 38,500.00</p>
                </div>
          </div><br>
          <h2><b>THE GODDESS COLLECTION</b></h2><hr>
         <div class="parent2">
             <div>
                <img src="pictures/ggreen.jpg" height="350" width="405" style="margin: 2px;">
                <p>Palmette Hexagon Minaudiere</p>
                <p> EGP 80,000.00</p>
             </div>
             <div>  
                <img src="pictures/gmint.jpg" height="350" width="405" style="margin: 2px;">
                <p>Palmette Oval Minaudiere</p>
                <p>EGP 80,000.00</p></div>
             <div>  
                <img src="pictures/gpink.jpg" height="350" width="405" style="margin: 2px;">
                <p>Palmette Oval Minaudiere</p>
                <p>EGP 70,000.00</p></div>
         </div><br>
         <h2><b>GOLDEN COLLECTION</b></h2><hr>
          <div class="parent3">
            <div class="x">
                <img src="pictures/bag1.jpg" height="350" width="405" style="margin: 2px;">
                <p>Mini Dome Embossed</p>
                <P>EGP 30,000</P>
            </div>
            <div class="x">
                <img src="pictures/bag2.jpg" height="350" width="405" style="margin: 2px;">
                <p>Mini Dome Embossed</p>
                <P>EGP 30,000</P>
            </div>
            <div class="x">
                <img src="pictures/bag3.jpg" height="350" width="405" style="margin: 2px;">
                <p>Mini Dome Embossed</p>
                <p>EGP 28,000</p>
            </div>
          </div><br>
        <h2><b>JEWELRY</b></h2><hr>
          <div class="parent4">
            <div class="x">
                <img src="pictures/gold pink1.jpg" height="350" width="405" style="margin: 2px;">
                <p>Oumoum Charm</p>
                <p>EGP 10,000.00</p>
            </div>
            <div class="x">
                <img src="pictures/gold red1.jpg" height="350" width="405" style="margin: 2px;">
                <p>Snake Rod Swirly Ring</p>
                <p>EGP 15,000.00</p>
            </div>
            <div class="x">
                <img src="pictures/goldsilver ring 1.jpg" height="350" width="405" style="margin: 2px;">
                <p>Oumoum Charm</p>
                <p>EGP 10,000.00</p>
            </div>
          </div>
          <footer><hr>
            <div class="newsletter" style="display: inline-block;"><h3>Newsletter</h3>
                <input type="email" placeholder="Your Email" style="height: 30px;width: 200px;"></div>
            <div style="display: inline-block; float:right; margin-right: 16px;"><br>
                <a href="https://www.instagram.com/okhtein/" style="text-decoration: none; color: black;font-size: 18px;">Instagram</a> <br>
                <a href="https://web.facebook.com/okhtein/?_rdc=1&_rdr" style="text-decoration: none; color: black; font-size: 18px;">Facebook</a><br>
                <a href="https://www.pinterest.com/okhtein/" style="text-decoration: none; color: black; font-size: 18px;">Pinterest</a>
            </div>
        </footer>
    </body>
</html> -->