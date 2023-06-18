<?php

session_start();



?>





<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
<title>Cake Shop</title>
<meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="stylesheet" href="../style.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"/>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>

<link rel="shortcut icon" href="../images/nav-logo-new.png" type="image/x-icon">


<style>
</style>
<script src=""></script>
<body>



    <!--Navigation Bar-->

    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">

          <div class="navbar-header">
            <a class="navbar-brand" href="../index.php"><img src="../images/nav-logo-new.png" title="Google" style="height: 30px; width: 35px;"></a>

            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mynavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>                   
            </button>
          </div>


          <div class="collapse navbar-collapse" id="mynavbar">

            <ul class="nav navbar-nav">
                <li><a href="../index.html">Home</a></li>

                <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Cake Categories<span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="cupcakes.php">Cup Cakes</a></li>
                    <li><a href="icecream.php">Ice Cream</a></li>
                    <li><a href="cakes.php">Cakes</a></li>
                    <li><a href="baby cakes.php">Baby Cakes</a></li>
                    <li><a href="brownies.php">Brownies</a></li>
                    <li><a href="cookies.php">Cookies</a></li>
                    <li><a href="jars&truffles.php">Jars and Truffles</a></li>
                    <li><a href="vegan desserts.php">Vegan Desserts</a></li>
                    <li><a href="sweet bundles.php">Sweet Bundles</a></li>
                    <li><a href="other desserts.php">&OTHERDESSERTS</a></li>
                </ul>
                </li> 
                
           
                <li><a href="create_cake.php">Create A Cake</a></li>
                <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Policies<span class="caret"></span></a>
                  <ul class="dropdown-menu">
                      <li><a href="terms and condition.php">Terms and Conditions</a></li>
                      <li><a href="Privacy Policy.php">Privacy Policy</a></li>
                      <li><a href="refund policy.php">Refund Policy</a></li>
                      <li><a href="delivery policy.php">Delivery Policy</a></li>
                  </ul>
                  </li>
                <li><a href="contact.php">Contact Us</a></li>
                <li><a href="location.php">Locate Us</a></li>

                <!--
                  <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Contact Us <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                    <li><a href="#">CareerS</a></li>
                    <li><a href="#">FAQS</a></li>                     
                    </ul>
                  </li>
                -->
            </ul>
          


            <ul class="nav navbar-nav navbar-right">
            <?php
                  $count = 0;
                  if(isset($_SESSION['cart'])){
                    $count = count($_SESSION['cart']);
                  }
                  ?>
                    <li><a href="mycart.php" style="background-color: rgb(46, 130, 46);"><i class="fa fa-cart-shopping"></i> My Cart (<?php echo $count; ?>)</a></li>
                <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
            </ul>

          </div>


        </div>
      </nav>


      <!--Body Header-->

      <div class="container-fluid text-center" style="background-color:black">
        <strong><h1 style="font-family: cursive; color: white; line-height: 250px; font-size: 56px;">Terms and Conditions</h1></strong>
        <h5 style="color: white; margin-top: -80px; margin-bottom: 50px; font-family: cursive;">HOME / TERMS AND CONDITIONS.</h5>
      </div>

      <div>
        <pre style="padding-left: 150px; margin-bottom: 0; padding-top: 70px; padding-bottom: 40px; font-family: cursive; font-size: 15px; ">
            <span style="font-family: cursive; font-size: 30px; line-height: 10px; color: palevioletred;">T & Cs. about Online Payment.</span><br>
            &gt; “Happy Time Bakery LLC’’ maintains the https://pandoracake.ae/ Website (“Site”). >
            &gt; “United Arab of Emirates is our country of domicile” and stipulate that the governing law is the local law. All disputes arising in connection therewith shall 
            be heard only by a court of competent jurisdiction in U.A.E.
            &gt; Visa or MasterCard debit and credit cards in AED will be accepted for payment
            &gt; We will not trade with or provide any services to OFAC and sanctioned countries
            &gt; Customer using the website who are Minor /under the age of 18 shall not register as a User of the website and shall not transact on or use the website
            &gt; Cardholder must retain a copy of transaction records and Merchant policies and rules
            &gt; User is responsible for maintaining the confidentiality of his account
        </pre>

      </div>






    <!--Footer-->

    <div class="footer pt-5" style="height: 400px;">
    <div class="container" style="padding-top: 50px;">
        <div class="row">
        <div class="col-6 col-sm-6 col-md-4 col-lg-3 mb-5">
            <div class="footer_section">
            <h4>Links</h4>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Cakes</a></li>
                <li><a href="#">Custom Cakes</a></li>
                <li><a href="#">Icons</a></li>
                <li><a href="#">desserts</a></li>
                <li><a href="#">Donuts</a></li>
                <li><a href="#">Snacks</a></li>
            </ul>
            </div>
        </div>
        <div class="col-6 col-sm-6 col-md-4 col-lg-3 mb-5">
            <div class="footer_section">
            <h4>Guides</h4>
            <ul>
                <li><a href="#">Cash On Delivery</a></li>
                <li><a href="#">Secured Thawani Payment</a></li>
                <li><a href="#">Visa Card | Master Card (Debit or Credit Card)</a></li>
                <li><a href="#">EXCHANGE & REFUND POLICY</a></li>
                <li><a href="#">NUTRITION FACTS SUGARMOO</a></li>
            </ul>
            </div>
        </div>
        <div class="col-6 col-sm-6 col-md-4 col-lg-3 mb-5">
            <div class="footer_section">
            <h4>ABOUT COMPANY</h4>
            <ul>
                <li><a href="#">About Us</a></li>
                <li><a href="#">FNP Team</a></li>
                <li><a href="#">Careers</a></li>
                <li><a href="#">Testimonials</a></li>
                <li><a href="#">News Room</a></li>
            </ul>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-12 col-lg-3 mb-5">
            <div class="row">
            <div
                class="col-sm-12 col-md-6 col-lg-12 footer_section footer_section_contact"
            >
                <h4>Contact Us</h4>
                <div class="search">
                <form action="#" class="subscribe">
                    <input
                    type="email"
                    class="contact_input"
                    placeholder="E-mail address"
                    />
                    <button type="submit" class="submit_button">
                    <i class="fa fa-paper-plane"></i>
                    </button>
                </form>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-12 social_media">
                <h4>Follow Up</h4>
                <ul>
                <li>
                    <a href="https://www.facebook.com/sugarmoodesserts"><i class="fab fa-facebook-f"></i></a>
                </li>
                <li>
                    <a href="https://twitter.com/fnp_ind"><i class="fab fa-twitter"></i></a>
                </li>
                <li>
                    <a href=""><i class="fab fa-google-plus-g"></i></a>
                </li>
                <li>
                    <a href="https://www.instagram.com/sugarmoodesserts/"><i class="fab fa-instagram"></i></a>
                </li>
                
                </ul>
                
                <div>
                <h6 style="color: white;">©Sugarmoo 2023. All Rights Reserved</h6>
                </div>

            </div>
            </div>
        </div>
        </div>
    </div>
    </div>




</body>
</html>