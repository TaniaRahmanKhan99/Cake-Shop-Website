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
        <strong><h1 style="font-family: cursive; color: white; line-height: 250px; font-size: 56px;">Refund Policy</h1></strong>
        <h5 style="color: white; margin-top: -80px; margin-bottom: 50px; font-family: cursive;">HOME / REFUND POLICY</h5>
      </div>

      <div>
        <pre style="padding-left: 150px; margin-bottom: 0; padding-top: 70px; padding-bottom: 40px; font-family: cursive; font-size: 15px; ">
            <span style="font-family: cursive; font-size: 30px; line-height: 10px; color: palevioletred;">Refund Policy | Wonderland.ae</span><br>
            The companies refund policies are applied to only those orders for which a payment has been made to the Pandoracake.ae. In order to ensure provision of 
            in-time delivery and quality of bakery items, we accept only those orders that are possible to process according to the requirements of the customers and 
            in the time allowed. In this regard, we may decline certain orders. Moreover, we also spend lots of time in understanding customers’ orders. This involves 
            working with customers on tasting, designing, researching, matching cake design with venue and ordering materials for the cake. For these reasons, it is not 
            possible for us to refund any money that customers have deposited at any time. We thank you for your understanding. 
            <br>
            In many instances, for customize orders, we have to make decorative elements beforehand. Generally, these decorative items are made at least 3 days before 
            the order so that these items can have proper drying and setting time. In this regard, we follow the following cancellation and refund policy.
            <br>
            If a customer cancels an order, at least 2 days before the actual delivery of the order, 100 % of the deposited money is returned to the customers; refunds 
            will be made back to the payment solution used initially by the customer. Please allow for up to 45 days for the refund transfer to be completed.
            <br>
            Refunds will be made onto the original mode of payment and will be processed within 10 to 45 days depends on the issuing bank of the credit card.
            <br>
            If a customer cancels an order, within 6 hours of the actual delivery of the order, no part of the deposited money is returned to the customers as store 
            credit. There is no exception to this policy and we sincerely apologize you for this. You can still collect your processed order on the promised time and 
            date of delivery and are obliged to pay the balance due to you.
            <br>
            If because of any reason, customer requests a reschedule of an order, then we will handle this on case-to-case basis. However, such requests are required 
            to be given at least 24 hours before actual delivery. We try our best to accommodate such request, yet it is always depending on the availability of resources 
            and our schedule so there is no guarantee that we will be able to meet the deadline that you award us. A reschedule may require customer to help us in 
            accommodating the customers’ requests.
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