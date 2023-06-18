<?php 

session_start();
include_once '../config/database.php';

$db = new Database();


if($_SERVER['REQUEST_METHOD'] == "POST"){

   $name = $_POST['name'];
   $email = $_POST['email'];
   $message = $_POST['message'];



   if(empty($name) || empty($email) || empty($message)){
      echo "<script>
         alert('Every required field must be fullfilled.')
         </script>";
   }else{

      $sql = "insert into feedback(f_name, f_email, f_message) values ('$name', '$email', '$message')";

      $result = $db->insert($sql);


      if($result){
         echo "<script>
         alert('Your message sent Successfully.');

         window.location.href = 'contact.php';

         </script>";

      }else{
         echo "<script>
         alert('Message sending Failed!!')
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

          /*---------------------------------------------*/

          input {
            outline: none;
            border: none;
          }

          textarea {
          outline: none;
          border: none; 
          font-family: Helvetica Neue, "Montserrat", sans-serif;
          }

          textarea:focus, input:focus {
            border-color: transparent !important;
          }

          input::-webkit-input-placeholder { color: #bdbdd3;}
          input:-moz-placeholder { color: #bdbdd3;}
          input::-moz-placeholder { color: #bdbdd3;}
          input:-ms-input-placeholder { color: #bdbdd3;}

          textarea::-webkit-input-placeholder { color: #bdbdd3;}
          textarea:-moz-placeholder { color: #bdbdd3;}
          textarea::-moz-placeholder { color: #bdbdd3;}
          textarea:-ms-input-placeholder { color: #bdbdd3;}


          /*==================================================================
          [ Contact - Area]*/

          .container-contact {
            width: 100%;  
            min-height: 70vh;
            display: -webkit-box;
            display: -webkit-flex;
            display: -moz-box;
            display: -ms-flexbox;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
            padding: 15px;
            position: relative;
            background-color: transparent;
          }

          .wrap-contact {
            width: 700px;
            background: transparent;
            border: 1px solid #b3b3b3;
            padding: 40px 0px 20px 0px;
          }

          .wrap-contact-image {
            width: 600px;
            background: transparent;
            padding: 40px 0px 20px 0px;
          }

          /*==================================================================
          [ Contact - Form ]*/

          .contact-form {
            width: 100%;
          }

          .error {
            padding: 5px 9px;
            border: 1px solid red;
            color: red;
            border-radius: 3px;
          }
          
          .success {
            padding: 5px 9px;
            border: 1px solid green;
            color: green;
            border-radius: 3px;
          }


          /*------------------------------------------------------------------
          [ Input ]*/

          .wrap-input {
            width: 90%;
            background-color: #fff;
            border: 1px solid #b3b3b3;
            border-radius: 7px;
            margin-left: auto;
            margin-right: auto;
            margin-bottom: 16px;
            position: relative;
            z-index: 1;
          }


          .input {
            position: relative;
            display: block;
            width: 100%;
            background: #fff;
            border-radius: 31px;
            color: #8f8fa1;
            line-height: 1.2;
            font-family: "Montserrat";
            font-size: 18px;
            font-weight: 400;
            letter-spacing: 0.2em;
            height: 42px;
            padding-left: 10px;
            padding-right: 10px;
            text-transform: none;
          }

          /*---------------------------------------------*/

          input.input {
            height: 62px;
            padding: 0 15px 0 15px;
          }


          textarea.input {
            min-height: 169px;
            padding: 19px 15px 0 15px;
          }

          /*------------------------------------------------------------------
          [ Focus Input ]*/

          .focus-input {
            display: block;
            position: absolute;
            z-index: -1;
            width: 100%;
            height: 100%;
            top: 0;
            left: 50%;
            -webkit-transform: translateX(-50%);
            -moz-transform: translateX(-50%);
            -ms-transform: translateX(-50%);
            -o-transform: translateX(-50%);
            transform: translateX(-50%);
            border-radius: 31px;
            background-color: #fff;
            pointer-events: none;
            
            -webkit-transition: all 0.4s;
            -o-transition: all 0.4s;
            -moz-transition: all 0.4s;
            transition: all 0.4s;
          }

          .input:focus + .focus-input100 {
            width: calc(100% + 20px);
          }

          /*------------------------------------------------------------------
          [ Button ]*/
          .container-contact-form-btn {
            display: -webkit-box;
            display: -webkit-flex;
            display: -moz-box;
            display: -ms-flexbox;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            padding-top: 10px;
          }

          .contact-form-btn {
            display: -webkit-box;
            display: -webkit-flex;
            display: -moz-box;
            display: -ms-flexbox;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 0 20px;
            min-width: 250px;
            height: 50px;
            background-color: transparent;
            border-radius:7px;
            cursor: pointer;

            font-family: "Montserrat";
            font-size: 16px;
            color: #fff;
            line-height: 1.2;
            text-transform: uppercase;

            -webkit-transition: all 0.4s;
            -o-transition: all 0.4s;
            -moz-transition: all 0.4s;
            transition: all 0.4s;
            position: relative;
            z-index: 1;
          }

          .contact-form-btn::before {
            content: "";
            display: block;
            position: absolute;
            z-index: -1;
            width: 100%;
            height: 100%;
            top: 0;
            left: 50%;
            -webkit-transform: translateX(-50%);
            -moz-transform: translateX(-50%);
            -ms-transform: translateX(-50%);
            -o-transform: translateX(-50%);
            transform: translateX(-50%);
            border-radius: 7px;
            background-color: #9e8c7b;
            pointer-events: none;
            
            -webkit-transition: all 0.4s;
            -o-transition: all 0.4s;
            -moz-transition: all 0.4s;
            transition: all 0.4s;
          }

          .contact-form-btn:hover:before {
            background-color: #916439;
          }

          .validate-input {
            position: relative;
          }

          /*==================================================================
          [ Info Grid]*/

          .grid-container {
            display: grid;
            grid-template-columns: auto auto;
            grid-template-rows: 100px;
            grid-gap: 100px;
            padding: 10px 30px 0px 30px;
          }

          .grid-container > div {
            padding: 20px 0;
            font-size: 10px;
          }

          .left-align {
              text-align: left;
          }

          .right-align {
              text-align: right;
          }


          /*==================================================================
          [  Hero title ]*/


          .listing-hero {
              background: #F7F0EA;
              padding: 101px 0 30px;
          }

          .hero-heading {
              margin: 0 auto;
              width: 100%;
              max-width: 709px;
          }

          section#post-28 {
              padding-top: 155px;
          }

          .hero-large {
              display: inline-block;
              width: 40%;
              font-weight: 300;
              font-size: 50px;
              line-height: 56px;
              position: relative;
              top: -19px;
              color: #454545;
          }

          .hero-text {
              display: inline-block;
              width: 59%;
              vertical-align: top;
              border-left: 1px solid #8E8E8E;
              padding: 0 33px;
              font-size: 13px;
              line-height: 23px;
              /* or 153% */
              color: #454545;
              vertical-align: top;
          }


          .hero-text .btn.no-border {
              margin-top: 15px;
              margin-bottom: 6.5px;
              background-image: url(../images/Path3.png);
              background-repeat: no-repeat;
              background-size: 25px;
              display: block;
              background-position: right center;
              max-width: 99px;
          }

          .hero-text i {
              font-style: normal;
              margin-top: -6px;
              display: block;
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
                <a class="navbar-brand" href="../index.html"><img src="../images/nav-logo-new.png" title="Google" style="height: 30px; width: 35px;"></a>

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


          <section>

            <div class="listing-hero">
              <div class="hero-heading">
                  <div class="hero-large">Contact Us.</div>
                  <br>
                  <div class="hero-text"> <i>Got any Questions? Feel free to ask or visit our FAQ page </i> </div>       
                </div>
            </div>
          
          <div class="container-contact">
              <div class="wrap-contact">
          
                <form name="contact" class="contact-form validate-form" method="post" action= "contact.php">
          
                  <div class="wrap-input validate-input" data-validate="Please enter your name">
                    <input class="input" type="text" name="name" placeholder="Full Name">
                  </div>
          
                  <div class="wrap-input validate-input" data-validate = "Please enter your email">
                    <input class="input" type="text" name="email" placeholder="E-mail">
                  </div>
          
                  <div class="wrap-input validate-input" data-validate = "Please enter your message">
                    <textarea class="input" type="text" name="message" placeholder="Your Message"></textarea>
                  </div>
          
                  <div class="container-contact-form-btn">
                    <button type="submit" class="contact-form-btn">
                      <span>Send</span>
                    </button>
                  </div>
          
                  <div class="grid-container">
                    <div class="item1 left-align"><i class="fa fa-lg fa-map-marker-alt"></i> Warehouse #4, 318 Road, Al Asayel Street
                      Dubai, UAE</div>  
                    <div class="item4 right-align"><i class="fa fa-lg fa-phone"></i> info@sugarmoo.com | +(971) 4 399-7371</div>
          
                </div>
          
                </form>
          
              </div>
            </div>
          </div>
          
          </div>
          
          </section>








          
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