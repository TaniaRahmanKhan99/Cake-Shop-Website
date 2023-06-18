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

            .responsive-map{
            overflow: hidden;
            padding-bottom:56.25%;
            position:relative;
            height:0;
            }
            .responsive-map iframe{
            left:0;
            top:0;
            height:100%;
            width:100%;
            position:absolute;
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
                    <li><a href="../index.php">Home</a></li>

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








          <!--Locate Us Form Division-->

            <div class="shadow-none p-3 mb-5 bg-body-tertiary rounded text-center" style="margin-top:80px;font-family: cursive; color: palevioletred;">
                <h1>Information:</h1><br>

                <div class="row" >

                    <div class="col-md-3">

                    </div>

                    <div class="col-md-6" style="background-color: pink; color:black; border-radius:10px">
                       <br><br>
                            <div class="row">

                                <div class="col-md-6">
                                    <h4><b>Phone:</b> +97154-734 6688</h4>
                                    <h4><b>E-mail:</b> Pandoracake.ae@gmail.com</h4> 
                                    <br><br>
                                    <h4><b>Delivery Service Available</b></h4>
                                    <h4><b>Across all UAE.</b></h4> 
                                    <br><br>
                                </div>

                                <div class="col-md-6">
                                    <h4><b>Working Hours</b></h4>
                                    <h4><b>from 09:00am to 11:00pm – Daily</b></h4> 
                                    <br><br>
                                    <h4><b>Address: </b>China Cluster, F-15, Shop-18,</h4>
                                    <h4>International City, Dubai. UAE</h4>  
                                    <br><br>
                                </div>

                            </div>
                            <h5>This website is belongs to <b>“Company Name: Happy Time Bakery LLC’’</b></h5>
                            <br><br>
                            <h4><b>Do you have questions about how we can help your company?</b></h4>
                            <h5><b>Send us an email and we’ll get in touch shortly.</b></h5>
                            <br><br>


                    </div>

                    <div class="col-md-3" style="margin-bottom:80px;">

                    </div>

                </div>


            </div>



            <div class="container-fluid" style="margin-top:80px;font-family: cursive; color: palevioletred; text-align:center;">
                <h1>Locate Us:</h1><br>
                <div class="responsive-map" style="border-radius:15px;">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2822.7806761080233!2d-93.29138368446431!3d44.96844997909819!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x52b32b6ee2c87c91%3A0xc20dff2748d2bd92!2sWalker+Art+Center!5e0!3m2!1sen!2sus!4v1514524647889" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>
  







          
          <!--Footer-->

          <div class="footer pt-5" style="height: 400px; margin-top:0px;">
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