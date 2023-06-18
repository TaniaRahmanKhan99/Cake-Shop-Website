<?php 

session_start();
include_once '../config/database.php';

$db = new Database();


if($_SERVER['REQUEST_METHOD'] == "POST"){

   $name = $_POST['name'];
   $email = $_POST['email'];
   $phone = $_POST['phone'];
   $location = $_POST['location'];
   $flavors = $_POST['flavors'];
   $size = $_POST['size'];
   $payment = $_POST['payment'];
   $suggestion = $_POST['suggestion'];



   if(empty($name) || empty($email) || empty($phone)|| empty($location)|| empty($flavors)|| empty($size)|| empty($payment)){
      echo "<script>
         alert('Every required field must be fullfilled.')
         </script>";
   }else{

      $sql = "insert into create_cake(name, email, phone, location,	flavors, size, payment, suggestion) values ('$name', '$email', '$phone', '$location', '$flavors', '$size', '$payment', '$suggestion')";

      $result = $db->insert($sql);


      if($result){
         echo "<script>
         alert('Order Successful.');

         window.location.href = 'create_cake.php';

         </script>";

      }else{
         echo "<script>
         alert('Order Failed!!')
         </script>";
      }


   }


}




?>














<!DOCTYPE html>
<html>
    <head>
        <title>Cake Shop</title>
        <meta charset = "UTF-8">
        <meta name="Keyword" content="HTML, CSS, Python, JavaScript">
        <meta name="author" content="Tania Rahman Khan">
        <meta name="description" content="Web Development">   
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"/>

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
        <link rel="shortcut icon" href="../images/nav-logo-new.png" type="image/x-icon">
        <link href="../style.css" rel="stylesheet">
        

        <style>

body {
  width: 100%;
  height: 100vh;
  margin: 0;
  background: background-color: #FFD5C9;
background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='100%25' height='100%25' viewBox='0 0 800 400'%3E%3Cdefs%3E%3CradialGradient id='a' cx='396' cy='281' r='514' gradientUnits='userSpaceOnUse'%3E%3Cstop offset='0' stop-color='%23DDCFCC'/%3E%3Cstop offset='1' stop-color='%23FFD5C9'/%3E%3C/radialGradient%3E%3ClinearGradient id='b' gradientUnits='userSpaceOnUse' x1='400' y1='148' x2='400' y2='333'%3E%3Cstop offset='0' stop-color='%23FFFFFF' stop-opacity='0'/%3E%3Cstop offset='1' stop-color='%23FFFFFF' stop-opacity='0.5'/%3E%3C/linearGradient%3E%3C/defs%3E%3Crect fill='url(%23a)' width='800' height='400'/%3E%3Cg fill-opacity='0.5'%3E%3Ccircle fill='url(%23b)' cx='267.5' cy='61' r='300'/%3E%3Ccircle fill='url(%23b)' cx='532.5' cy='61' r='300'/%3E%3Ccircle fill='url(%23b)' cx='400' cy='30' r='300'/%3E%3C/g%3E%3C/svg%3E");
background-attachment: fixed;
background-size: cover;;
  color: #696563;
  font-family: Verdana;
  font-size: 15px;
}

h1, h2, p {
  margin: 1em auto;
  text-align: center;
}

p[id="logo"] {
  color: #fff;
  font-size: 60px;
  margin-bottom: -80px;
}

h1 {
  color: #fff;
  font-family: Didot;
  font-size: 60px;
}

p[id="description"] {
  font-family: Didot;
  font-size: 18px;
  font-style: italic;
  margin: -40px 0 40 0; 
}

h2 {
  font-family: Didot;
}

hr {
  border: none;
}

form {
  width: 60vw;
  max-width: 750px;
  min-width: 450px;
  margin: 0 auto;
  padding-bottom: 2em;
  background: #fcf5f2;
  margin-bottom: 60px;
}

fieldset {
  border: none;
  padding: 2rem 0;
  border-bottom: 3px dotted #ebd1c7;
  max-width: 400px;
  min-width: 300px;
  margin: auto;
}

fieldset:last-of-type {
  border-bottom: none;
}

label {
  display: block;
  margin: 1rem 0;
}

input,
textarea,
select {
  margin: 10px 0 0 0;
  width: 100%;
  min-height: 3em;
}

input, textarea {
  background-color: #fff;
  border: 1px solid #fff;
  color: #a39e9d;
}

.inline {
  width: unset;
  margin: 0 0.5em 0 0;
  vertical-align: middle;
  min-height: 1em;
}

select[id="dropdown"] {
  background-color: #fff;
  border: 1px solid #fff;
}

p[id="footer"] {
  color: #fff;
}

input[id="profile-picture"] {
  min-height: 1.1em;
  background: none;
  border: none;
}

input[type="submit"] {
  display: block;
  width: 60%;
  margin: 1em auto;
  height: 2em;
  font-size: 1.1rem;
  background-color: #e3baaf;
  border-color: #e3baaf;
  min-width: 300px;
  color: #fff;
  font-family: Didot;
}

a:link {
  color: #e3baaf;
}

a:visited {
  color: #e3baaf;
}

a:hover {
  color: #e3baaf;
}

a:active {
  color: #e3baaf;
}

        </style>










    </head>   
    
    




    <body>

        <!--LOGO

        <div class="container text-center">
            <img src="images/Google_2015_logo.svg.png" width="300px" title="Google">
        </div>

        -->


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
                    <li><a href="users/contact.php">Contact Us</a></li>
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








          <!--Contact Us Form Division-->


          <p id="logo">&#10045;</p>
    <h1 id="title">sugarmoo</h1>
    <p id="description" style="font-family: cursive;">CREATE A CAKE</p>
    <form id="survey-form" method="post" action='' style="font-family: cursive;">
      <fieldset>
        <h2>Your information</h2>
        <label for="name" id="name-label">Name <input id="name" name="name" type="text" placeholder="Enter your name" required /></label>
        <label for="email" id="email-label">Email <input id="email" name="email" type="email" placeholder="Enter your email" required /></label>
        <label for="phone" id="phone-label">Contact Number <input id="phone" name="phone" type="text" placeholder="Enter your Number" required /></label>
        <label for="suggestions">Delivery Location:
        <textarea class="input" type="text" name="location" placeholder="Location"></textarea>
        </label>
      </fieldset>
      <fieldset>
        <h2>Flavors</h2>
          <select id="dropdown" name="flavors">
            <option value="">(select one)</option>
            <option value="1">Chocolate Cake</option>
            <option value="2">Vanilla Cake</option>
            <option value="3">Strawberry Cake</option>
            <option value="4">Butterscotch Cake</option>
            <option value="5">Red velvet Cake</option>
            <option value="6">Fruit cake</option>
            <option value="7">Pineapple cake</option>
            <option value="8">Rasmalai Cake</option>
            <option value="9">Cheesecake</option>
            <option value="10">Kit kat Cake</option>
            <option value="11">Blueberry Cake</option>
            <option value="12">Mango Cake</option>
            <option value="13">Coffee Cake</option>
            <option value="14">Black Forest Cake</option>
            <option value="15">Ferrero Rocher Cake</option>
            <option value="16">Caramel Cake</option>
            <option value="17">Lemon</option>
          </select>
          <label for="size" id="name-label">Size of Cake <input id="size" name="size" type="text" placeholder="Type cake size " required /></label>
      </fieldset>
      <fieldset>
        <h2>Select Payment option for order</h2>
        <select id="dropdown" name="payment">
            <option value="">(select one)</option>
            <option value="1">Cash On delivery</option>
            <option value="2">bKash</option>
            <option value="3">Rocket</option>
            <option value="4">Nagad</option>
            <option value="5">Card</option>
        </select>

        <label for="suggestions">Special Instructions:
          <textarea id="suggestions" name="suggestion" rows="3" cols="30" placeholder="Type here..."></textarea>
        </label>
      </fieldset>
      <fieldset>
        <h2>News & terms and conditions</h2>
        <label for="newsletter">
          <input id="newsletter" type="checkbox"  required name="terms-and-conditions" class="inline" value="newsletter"/> I want to recieve the femfit newsletter
        </label>
        <label for="terms-and-conditions">
          <input id="terms-and-conditions" type="checkbox" required name="terms-and-conditions" class="inline" value="terms-and-conditions"/> I accept the <a href="terms and condition.php">terms and conditions</a>
        </label>
      </fieldset>
      <input id="submit" type="submit" value="Submit" />
    </form>
  




          
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