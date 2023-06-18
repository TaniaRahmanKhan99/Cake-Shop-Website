<?php

session_start();



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

        <link href="style.css" rel="stylesheet" >
        <link rel="shortcut icon" href="images/nav-logo-new.png" type="image/x-icon">

        <style>



        .coverPageSlide {
        height: 100vh;
        width: 100vw;
        background-image: url("images/2661059-1536x864-[DesktopNexus.com].jpg");
        background-size: cover;
        animation: myAnimation alternate infinite 14s;
        -webkit-animation: myAnimation alternate infinite 14s;
        -moz-animation: myAnimation alternate infinite 14s;
        -ms-animation: myAnimation alternate infinite 14s;
        -o-animation: myAnimation alternate infinite 14s;
        }
        @keyframes myAnimation {
        33.33% {
            background-image: url("images/slider2.jpg");
        }
        66.66% {
            background-image: url("images/slider5.jpg");
        }
        99.99% {
            background-image: url("images/slider4.jpg");
        }
        }


        /* all categoreies*/

          .employee-container {
            margin-top:80px;
          }
          .employee {
            width:100%;
            background-color:black;
            margin:10px auto;
            display:block;
            overflow:hidden;
            height:400px;
            border-radius:10px;
            -webkit-box-shadow: 0px 0px 31px -19px rgba(0,0,0,0.75);
          -moz-box-shadow: 0px 0px 31px -19px rgba(0,0,0,0.75);
          box-shadow: 0px 0px 31px -19px rgba(0,0,0,0.75);
          }
          .employee:hover > .employee-image {
            margin-top:-100px;
          }
          .employee-image {
            background-color:#fff;
            height:400px;
            width:100%;
            transition:0.5s;
          }
          .employee-image img {
            height:100%;
          }
          .employee-name {
            color:#fff;
            font-weight:bold;
            padding:5px;
          }
          .employee-name h1 {
            font-size:30px;
          }
          .employee-name span {
            font-size:20px;
            color:yellow;
            padding:0px;
          }
          .employee-social-link ul li {
            position:relative;
            bottom:-120px;
          }
          .employee-social-link ul{
            text-align:center;
            list-style:none;
          }
          .employee-social-link ul li {
            display:inline-block;
            margin:7px;
            background-color:#000;
            padding:10px;
            border-radius:50%;
            line-height:0.1;
            margin-left:-5px;
          }
          .employee-social-link i {
            font-size:15px;
            color:#fff;
            animation-name:rotate-icon;
          }

          .employee-social-link ul li:nth-child(1) {
            transition:1.0s;
          }
          .employee-social-link ul li:nth-child(2) {
            transition:1.3s;
          }
          .employee-social-link ul li:nth-child(3) {
            transition:1.6s;
          }
          .employee-social-link ul li:nth-child(4) {
            transition:1.9s;
          }
          .employee-social-link ul li:nth-child(5) {
            transition:2.2s;
          }
          .employee:hover > .employee-details .employee-social-link ul li{
            bottom:250px;
          }


          /* leave a review*/
          * {box-sizing: border-box}
          body {font-family: Verdana, sans-serif; margin:0}

          /* Slideshow container */
          .slideshow-container {
            position: relative;
            background: #f59fc1;
          }

          /* Slides */
          .mySlides {
            display: none;
            padding: 80px;
            text-align: center;
          }

          /* Next & previous buttons */
          .prev, .next {
            cursor: pointer;
            position: absolute;
            top: 50%;
            width: auto;
            margin-top: -30px;
            padding: 16px;
            color:white;
            font-weight: bold;
            font-size: 20px;
            border-radius: 0 3px 3px 0;
            user-select: none;
          }

          /* Position the "next button" to the right */
          .next {
            position: absolute;
            right: 0;
            border-radius: 3px 0 0 3px;
          }

          /* On hover, add a black background color with a little bit see-through */
          .prev:hover, .next:hover {
            background-color: rgba(0,0,0,0.8);
            color: white;
          }

          /* The dot/bullet/indicator container */
          .dot-container {
              text-align: center;
              padding: 20px;
              background: #683147;
          }

          /* The dots/bullets/indicators */
          .dot {
            cursor: pointer;
            height: 15px;
            width: 15px;
            margin: 0 2px;
            background-color: black;
            border-radius: 50%;
            display: inline-block;
            transition: background-color 0.6s ease;
          }

          /* Add a background color to the active dot/circle */
          .active, .dot:hover {
            background-color: #717171;
          }

          /* Add an italic font style to all quotes */
          q {font-size: 22px;}

          /* Add a blue color to the author */
          .author {color:white;}

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
                <a class="navbar-brand" href="index.html"><img src="images/nav-logo-new.png" title="Google" style="height: 30px; width: 35px;"></a>

                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mynavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>                   
                </button>
              </div>
    

              <div class="collapse navbar-collapse" id="mynavbar">

                <ul class="nav navbar-nav">
                    <li><a href="index.html">Home</a></li>

                    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Cake Categories<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="users/cupcakes.php">Cup Cakes</a></li>
                        <li><a href="users/icecream.php">Ice Cream</a></li>
                        <li><a href="users/cakes.php">Cakes</a></li>
                        <li><a href="users/baby cakes.php">Baby Cakes</a></li>
                        <li><a href="users/brownies.php">Brownies</a></li>
                        <li><a href="users/cookies.php">Cookies</a></li>
                        <li><a href="users/jars&truffles.php">Jars and Truffles</a></li>
                        <li><a href="users/vegan desserts.php">Vegan Desserts</a></li>
                        <li><a href="users/sweet bundles.php">Sweet Bundles</a></li>
                        <li><a href="users/other desserts.php">&OTHERDESSERTS</a></li>
                    </ul>
                    </li> 
                    
                    
                    <li><a href="users/create_cake.php">Create A Cake</a></li>
                    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Policies<span class="caret"></span></a>
                      <ul class="dropdown-menu">
                          <li><a href="users/terms and condition.php">Terms and Conditions</a></li>
                          <li><a href="users/Privacy Policy.php">Privacy Policy</a></li>
                          <li><a href="users/refund policy.php">Refund Policy</a></li>
                          <li><a href="users/delivery policy.php">Delivery Policy</a></li>
                      </ul>
                      </li>
                    <li><a href="users/contact.php">Contact Us</a></li>
                    <li><a href="users/location.php">Locate Us</a></li>
                    

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
                    <li><a href="users/mycart.php" style="background-color: rgb(46, 130, 46);"><i class="fa fa-cart-shopping"></i> My Cart (<?php echo $count; ?>)</a></li>
                    <li><a href="users/signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                    <li><a href="users/login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                </ul>

              </div>


            </div>
          </nav>







        <!--Image slider-->

        <div class="coverPageSlide"></div>
        <br>
        <br>


        <!--
        <div class="container-fluid">

          <div id="myCarousel" class="carousel slide" data-ride="carousel" style="margin-top: -20px; margin-left: -15px; margin-right: -15px;">



           
            <ol class="carousel-indicators">
              <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
              <li data-target="#myCarousel" data-slide-to="1"></li>
              <li data-target="#myCarousel" data-slide-to="2"></li>
              <li data-target="#myCarousel" data-slide-to="3"></li>
            </ol>

           



            <div class="carousel-inner">

              <div class="item active">
                <img src="images/2661059-1536x864-[DesktopNexus.com].jpg" alt="Los Angeles" style="width:100%; height: 700px;"> 
                <div class="carousel-caption">
                  <h3><a href="#" style="background-color: rgb(52, 116, 50); color: white; padding: 15px; border-radius: 30px; margin-left: -950px; margin-bottom: 250px;">
                    Shop Now <i class="fa-sharp fa-solid fa-bag-shopping"></i> </a></h3>
                </div> 
              </div>

              <div class="item">
                <img src="images/2315163-1536x864-[DesktopNexus.com].jpg" alt="Chicago" style="width:100%; height: 700px;">  
                <div class="carousel-caption">
                  <h3><a href="#" style="background-color: rgb(52, 116, 50); color: white; padding: 15px; border-radius: 30px; margin-left: -950px; margin-bottom: 250px;">
                    Shop Now <i class="fa-sharp fa-solid fa-bag-shopping"></i> </a></h3>
                </div>                 
              </div>
            
              <div class="item">
                <img src="images/2573895-1536x864-[DesktopNexus.com].jpg" alt="New York" style="width:100%; height: 700px;">  
                <div class="carousel-caption">
                  <h3><a href="#" style="background-color: rgb(52, 116, 50); color: white; padding: 15px; border-radius: 30px; margin-left: -950px; margin-bottom: 250px;">
                    Shop Now <i class="fa-sharp fa-solid fa-bag-shopping"></i> </a></h3>
                </div>               
              </div>

              <div class="item">
                  <img src="images/cake-dessert.jpg" alt="New York" style="width:100%; height: 700px;">   
                  <div class="carousel-caption">
                    <h3><a href="#" style="background-color: rgb(52, 116, 50); color: white; padding: 15px; border-radius: 30px; margin-left: -950px; margin-bottom: 250px;">
                      Shop Now <i class="fa-sharp fa-solid fa-bag-shopping"></i> </a></h3>
                  </div>              
                </div>
          
            </div>

         



            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>



      -->





          <!-- CAKES section-->

          <div class="container text-center">
            <br>
            <h1 style="font-family: cursive; color: palevioletred;">All Categories</h1>
            <br>
            <h4 style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif">Every cake has a texture and flavor story to tell your taste buds. From fluffy sponges and silky-smooth cheesecakes to fruity, fudgy, nutty, coffee, chocolatey, vanilla and confetti, consider yourself covered
            </h4>
            <h4 style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif"></h4>
         




          <div class="container">
            <div class="employee-container">
              <div class="row">
                <div class="col-lg-4 employee-1">
                  <div class="employee">
                    <div class="employee-image">
                      <a href="users/cupcakes.php"><img src="images/cupk2.jpg" class="img-fluid d-block m-auto" alt="employee-image"></a>
                      </div>
                    <div class="employee-details">
                      <div class="employee-name">
                        <h1 class="text-center"><a href="users/cupcakes.php" style="color: white; font-family: cursive;">Cup Cakes</h1></a>
                        </div>
                      
                    </div>
                  </div>
                  </div>


          <div class="col-lg-4 employee-1">
          <div class="employee">
            <div class="employee-image">
              <a href="users/icecream.php"><img src="images/ice7.jpg" class="img-fluid d-block m-auto" alt="employee-image"></a>
              </div>
            <div class="employee-details">
              <div class="employee-name">
                <h1 class="text-center"><a href="users/icecream.php" style="color: white; font-family: cursive;">Ice-cream</h1></a>
                </div>
              
            </div>
          </div>
          </div>


          <div class="col-lg-4 employee-1">
            <div class="employee">
              <div class="employee-image">
                <a href="users/cakes.php"><img src="images/3.png" class="img-fluid d-block m-auto" alt="employee-image"></a>
                </div>
              <div class="employee-details">
                <div class="employee-name">
                  <h1 class="text-center"><a href="users/cakes.php" style="color: white; font-family: cursive;">Cakes</h1></a>
                  </div>
                
              </div>
            </div>
            </div>


            <br>
            <br>

          <div class="col-lg-4 employee-1">
            <div class="employee">
              <div class="employee-image">
                <a href="users/baby cakes.php"><img src="images/bc4.jpg" class="img-fluid d-block m-auto" alt="employee-image"></a>
                </div>
              <div class="employee-details">
                <div class="employee-name">
                  <h1 class="text-center"><a href="users/baby cakes.php" style="color: white; font-family: cursive;">Baby Cakes</h1></a>
                  </div>
                
              </div>
            </div>
            </div>



          <div class="col-lg-4 employee-1">
            <div class="employee">
              <div class="employee-image">
                <a href="users/brownies.php"><img src="images/br5.jpg" class="img-fluid d-block m-auto" alt="employee-image"></a>
                </div>
              <div class="employee-details">
                <div class="employee-name">
                  <h1 class="text-center"><a href="users/brownies.php" style="color: white; font-family: cursive;">Brownies</h1></a>
                  </div>
                
              </div>
            </div>
            </div>



          <div class="col-lg-4 employee-1">
            <div class="employee">
              <div class="employee-image">
                <a href="users/cookies.php"><img src="images/cookie3.jpg" class="img-fluid d-block m-auto" alt="employee-image"></a>
                </div>
              <div class="employee-details">
                <div class="employee-name">
                  <h1 class="text-center"><a href="users/cookies.php" style="color: white; font-family: cursive;">Cookies</h1></a>
                  </div>
                
              </div>
            </div>
            </div>



          <div class="col-lg-4 employee-1">
            <div class="employee">
              <div class="employee-image">
                <a href="users/jars&truffles.php"><img src="images/jar3.jpg" class="img-fluid d-block m-auto" alt="employee-image"></a>
                </div>
              <div class="employee-details">
                <div class="employee-name">
                  <h1 class="text-center"><a href="users/jars&truffles.php" style="color: white; font-family: cursive;">Jars & Truffles</h1></a>
                  </div>
                
              </div>
            </div>
            </div>



          <div class="col-lg-4 employee-1">
            <div class="employee">
              <div class="employee-image">
                <a href="users/vegan desserts.php"><img src="images/aboutusjpeg.jpeg" class="img-fluid d-block m-auto" alt="employee-image"></a>
                </div>
              <div class="employee-details">
                <div class="employee-name">
                  <h1 class="text-center"><a href="users/vegan desserts.php" style="color: white; font-family: cursive;">Vegan Desserts</h1></a>
                  </div>
                
              </div>
            </div>
            </div>



          <div class="col-lg-4 employee-1">
            <div class="employee">
              <div class="employee-image">
                <a href="users/sweet bundles.php"><img src="images/bc2.jpg" class="img-fluid d-block m-auto" alt="employee-image"></a>
                </div>
              <div class="employee-details">
                <div class="employee-name">
                  <h1 class="text-center"><a href="users/sweet bundles.php" style="color: white; font-family: cursive;">Sweet Bundles</h1></a>
                  </div>
                
              </div>
            </div>
            </div>



            <div class="col-lg-4 employee-1"></div>


          <div class="col-lg-4 employee-1">
            <div class="employee">
              <div class="employee-image">
                <a href="users/other desserts.php"><img src="images/other8.jpg" class="img-fluid d-block m-auto" alt="employee-image"></a>
                </div>
              <div class="employee-details">
                <div class="employee-name">
                  <h1 class="text-center"><a href="users/other desserts.php" style="color: white; font-family: cursive;">&OTHERDESSERTS</h1></a>
                  
                  </div>
                
              </div>
            </div>
            </div>
           






                
                  </div>
                </div>
              </div>
          </div>































          
<!--
          <div class="container text-center" >
            <h1 style="font-family: cursive; color: palevioletred;">CAKES</h1>
            <br>
            <h4 style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif">Every cake has a texture and flavor story to tell your taste buds. From fluffy sponges and silky-smooth cheesecakes to fruity, fudgy, nutty, coffee, chocolatey, vanilla and confetti, consider yourself covered
            </h4>
            <h4 style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif"></h4>
            <br>
            <br>


            <div class="row text-center">

              <div class="col-md-4 thumbnail box"  style="border-radius: 20px; margin: 10px; width: 360px; height: 543;"> 
                <form>
                <img src="images/2.jpg" style="width: 100%; border-radius: 20px; height: 300px;">
                <div class="caption" style="padding: 15px;" >
                  
                    <h5 style="font-family: cursive; color: palevioletred;">
                      <b>Whipped Lemon and Raspberry Cake</b>
                      <br>
                      <br>
                      <br>
                      <button type="submit" style="font-family: cursive; background-color: palevioletred; color: white; padding: 12px; border-radius: 30px;">
                        <i class="fa fa-cart-shopping"></i> ADD TO CART
                      </button>
                      <input type="hidden" name="name" value="cake1">
                      <input type="hidden" name="price" value="220">

                    </h5>
                    <br>
                    <h4>AED220.00</h4>
                    <h4>This cake is the perfect balance of sweet raspberr...</h4>
                    <a href=""><h4 style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; color:palevioletred ;">Read more</h4></a>
                  </form>
                </div>
              </div>



              <div class="col-md-4 thumbnail box"  style="border-radius: 20px; margin: 10px; width: 360px; height: 543;"> 
                <img src="images/3.png" style="width: 100%; border-radius: 20px; height: 300px;">
                <div class="caption" style="padding: 15px;" >
                  
                    <h5 style="font-family: cursive; color: palevioletred;">
                      <b>Sticky Date Cake</b>
                      <br>
                      <br>
                      <br>
                      <button type="submit" style="font-family: cursive; background-color: palevioletred; color: white; padding: 12px; border-radius: 30px;">
                        <i class="fa fa-cart-shopping"></i> <a href="#" style="color: white;">ADD TO CART</a>
                      </button>
                    </h5>
                    <br>
                    <h4>AED200.00</h4>
                    <h4>We've transformed the classic British dessert into...</h4>
                    <a href="#home"><h4 style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; color:palevioletred ;">Read more</h4></a>

                </div>
              </div>


              <div class="col-md-4 thumbnail box"  style="border-radius: 20px; margin: 10px; width: 360px; height: 543;"> 
                <img src="images/pistach-yo_1.jpg" style="width: 100%; border-radius: 20px; height: 300px;">
                <div class="caption" style="padding: 15px;" >
                  
                    <h5 style="font-family: cursive; color: palevioletred;">
                      <b>Pistach-yo and Saffron Cake</b>
                      <br>
                      <br>
                      <br>
                      <button type="submit" style="font-family: cursive; background-color: palevioletred; color: white; padding: 12px; border-radius: 30px;">
                        <i class="fa fa-cart-shopping"></i> <a href="#" style="color: white;">ADD TO CART</a>
                      </button>
                    </h5>
                    <br>
                    <h4>AED230.00</h4>
                    <h4>This rustic-chic layered pistachio cake is full of...</h4>
                    <a href="#home"><h4 style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; color:palevioletred ;">Read more</h4></a>

                </div>
              </div>


              <div class="col-sm-4 thumbnail box"  style="border-radius: 20px; margin: 10px; width: 360px; height: 543;"> 
                <img src="images/6.png" style="width: 100%; border-radius: 20px; height: 300px;">
                <div class="caption" style="padding: 15px;" >
                  
                    <h5 style="font-family: cursive; color: palevioletred;">
                      <b>Lotus n' Honey Delight</b>
                      <br>
                      <br>
                      <br>
                      <sapn style="font-family: cursive; background-color: palevioletred; color: white; padding: 12px; border-radius: 30px;">
                        <i class="fa fa-cart-shopping"></i> <a href="#" style="color: white;">ADD TO CART</a>
                      </span>
                    </h5>
                    <br>
                    <h4>AED245.00</h4>
                    <h4>Four fluffy honey cake layers and filled with hone...</h4>
                    <a href="#home"><h4 style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; color:palevioletred ;">Read more</h4></a>

                </div>
              </div>


              <div class="col-sm-4 thumbnail box"  style="border-radius: 20px; margin: 10px; width: 360px; height: 543;"> 
                <img src="images/5.jpg" style="width: 100%; border-radius: 20px; height: 300px;">
                <div class="caption" style="padding: 15px;" >
                  
                    <h5 style="font-family: cursive; color: palevioletred;">
                      <b>Red Velvet Crunch Cake with Oreo</b>
                      <br>
                      <br>
                      <br>
                      <sapn style="font-family: cursive; background-color: palevioletred; color: white; padding: 12px; border-radius: 30px;">
                        <i class="fa fa-cart-shopping"></i> <a href="#" style="color: white;">ADD TO CART</a>
                      </span>
                    </h5>
                    <br>
                    <h4>AED215.00</h4>
                    <h4>Our irresistible best-selling cake. It's a fluff...</h4>
                    <a href="#home"><h4 style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; color:palevioletred ;">Read more</h4></a>

                </div>
              </div>


              <div class="col-sm-4 thumbnail box"  style="border-radius: 20px; margin: 10px; width: 360px; height: 543;"> 
                <img src="images/4.jpg" style="width: 100%; border-radius: 20px; height: 300px;">
                <div class="caption" style="padding: 15px;" >
                  
                    <h5 style="font-family: cursive; color: palevioletred;">
                      <b>NAKED STRAWBERRY SHORTCAKE</b>
                      <br>
                      <br>
                      <br>
                      <sapn style="font-family: cursive; background-color: palevioletred; color: white; padding: 12px; border-radius: 30px;">
                        <i class="fa fa-cart-shopping"></i> <a href="#" style="color: white;">ADD TO CART</a>
                      </span>
                    </h5>
                    <br>
                    <h4>AED290.00</h4>
                    <h4>An absolutely delicious and beautifully rustic, fl...</h4>
                    <a href="#home"><h4 style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; color:palevioletred ;">Read more</h4></a>

                </div>
              </div>


              <div class="col-sm-4 thumbnail box"  style="border-radius: 20px; margin: 10px; width: 360px; height: 543;"> 
                <img src="images/7.jpg" style="width: 100%; border-radius: 20px; height: 300px;">
                <div class="caption" style="padding: 15px;" >
                  
                    <h5 style="font-family: cursive; color: palevioletred;">
                      <b>White Velvet Party Cake</b>
                      <br>
                      <br>
                      <br>
                      <sapn style="font-family: cursive; background-color: palevioletred; color: white; padding: 12px; border-radius: 30px;">
                        <i class="fa fa-cart-shopping"></i> <a href="#" style="color: white;">ADD TO CART</a>
                      </span>
                    </h5>
                    <br>
                    <h4>AED205.00</h4>
                    <h4>Inspired by pure nostalgia, this Funfetti cake tas...</h4>
                    <a href="#home"><h4 style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; color:palevioletred ;">Read more</h4></a>

                </div>
              </div>


              <div class="col-sm-4 thumbnail box"  style="border-radius: 20px; margin: 10px; width: 360px; height: 543;"> 
                <img src="images/8.jpg" style="width: 100%; border-radius: 20px; height: 300px;">
                <div class="caption" style="padding: 15px;" >
                  
                    <h5 style="font-family: cursive; color: palevioletred;">
                      <b>Blueberry Cheesecake</b>
                      <br>
                      <br>
                      <br>
                      <sapn style="font-family: cursive; background-color: palevioletred; color: white; padding: 12px; border-radius: 30px;">
                        <i class="fa fa-cart-shopping"></i> <a href="#" style="color: white;">ADD TO CART</a>
                      </span>
                    </h5>
                    <br>
                    <h4>AED265.00</h4>
                    <h4>A silky smooth and creamy New York style cheesecak...</h4>
                    <a href="#home"><h4 style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; color:palevioletred ;">Read more</h4></a>

                </div>
              </div>


              <div class="col-sm-4 thumbnail box"  style="border-radius: 20px; margin: 10px; width: 360px; height: 543;"> 
                <img src="images/9.jpg" style="width: 100%; border-radius: 20px; height: 300px;">
                <div class="caption" style="padding: 15px;" >
                  
                    <h5 style="font-family: cursive; color: palevioletred;">
                      <b>Mocha Choca CheeseCake</b>
                      <br>
                      <br>
                      <br>
                      <sapn style="font-family: cursive; background-color: palevioletred; color: white; padding: 12px; border-radius: 30px;">
                        <i class="fa fa-cart-shopping"></i> <a href="#" style="color: white;">ADD TO CART</a>
                      </span>
                    </h5>
                    <br>
                    <h4>AED285.00</h4>
                    <h4>Layers of pure decadence -a moist chocolate sponge...</h4>
                    <a href="#home"><h4 style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; color:palevioletred ;">Read more</h4></a>

                </div>
              </div>


              <div class="col-sm-4 thumbnail box"  style="border-radius: 20px; margin: 10px; width: 360px; height: 543;"> 
                <img src="images/10.jpg" style="width: 100%; border-radius: 20px; height: 300px;">
                <div class="caption" style="padding: 15px;" >
                  
                    <h5 style="font-family: cursive; color: palevioletred;">
                      <b>Strawberry Cheesecake</b>
                      <br>
                      <br>
                      <br>
                      <sapn style="font-family: cursive; background-color: palevioletred; color: white; padding: 12px; border-radius: 30px;">
                        <i class="fa fa-cart-shopping"></i> <a href="#" style="color: white;">ADD TO CART</a>
                      </span>
                    </h5>
                    <br>
                    <h4>AED265.00</h4>
                    <h4>A silky smooth and creamy New York style cheesecak...</h4>
                    <a href="#home"><h4 style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; color:palevioletred ;">Read more</h4></a>

                </div>
              </div>


              <div class="col-sm-4 thumbnail box"  style="border-radius: 20px; margin: 10px; width: 360px; height: 543;"> 
                <img src="images/11.jpg" style="width: 100%; border-radius: 20px; height: 300px;">
                <div class="caption" style="padding: 15px;" >
                  
                    <h5 style="font-family: cursive; color: palevioletred;">
                      <b>Carrot Cake</b>
                      <br>
                      <br>
                      <br>
                      <sapn style="font-family: cursive; background-color: palevioletred; color: white; padding: 12px; border-radius: 30px;">
                        <i class="fa fa-cart-shopping"></i> <a href="#" style="color: white;">ADD TO CART</a>
                      </span>
                    </h5>
                    <br>
                    <h4>AED190.00</h4>
                    <h4>This is the best carrot cake in town. A definite c...</h4>
                    <a href="#home"><h4 style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; color:palevioletred ;">Read more</h4></a>

                </div>
              </div>


              <div class="col-sm-4 thumbnail box"  style="border-radius: 20px; margin: 10px; width: 360px; height: 543;"> 
                <img src="images/12.jpg" style="width: 100%; border-radius: 20px; height: 300px;">
                <div class="caption" style="padding: 15px;" >
                  
                    <h5 style="font-family: cursive; color: palevioletred;">
                      <b>Choco Loco Cake</b>
                      <br>
                      <br>
                      <br>
                      <sapn style="font-family: cursive; background-color: palevioletred; color: white; padding: 12px; border-radius: 30px;">
                        <i class="fa fa-cart-shopping"></i> <a href="#" style="color: white;">ADD TO CART</a>
                      </span>
                    </h5>
                    <br>
                    <h4>AED250.00</h4>
                    <h4>It took us a while to get this chocolate cake just...</h4>
                    <a href="#home"><h4 style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; color:palevioletred ;">Read more</h4></a>

                </div>
              </div>


              <div class="col-sm-4 thumbnail box"  style="border-radius: 20px; margin: 10px; width: 360px; height: 543;"> 
                <img src="images/13.jpg" style="width: 100%; border-radius: 20px; height: 300px;">
                <div class="caption" style="padding: 15px;" >
                  
                    <h5 style="font-family: cursive; color: palevioletred;">
                      <b>Cake Bites</b>
                      <br>
                      <br>
                      <br>
                      <sapn style="font-family: cursive; background-color: palevioletred; color: white; padding: 12px; border-radius: 30px;">
                        <i class="fa fa-cart-shopping"></i> <a href="#" style="color: white;">ADD TO CART</a>
                      </span>
                    </h5>
                    <br>
                    <h4>AED130.00</h4>
                    <h4>We've recreated our top selling cakes into delicio...</h4>
                    <a href="#home"><h4 style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; color:palevioletred ;">Read more</h4></a>

                </div>
              </div>


              <div class="col-sm-4 thumbnail box"  style="border-radius: 20px; margin: 10px; width: 360px; height: 543;"> 
                <img src="images/14.jpg" style="width: 100%; border-radius: 20px; height: 300px;">
                <div class="caption" style="padding: 15px;" >
                  
                    <h5 style="font-family: cursive; color: palevioletred;">
                      <b>Cake Bites</b>
                      <br>
                      <br>
                      <br>
                      <sapn style="font-family: cursive; background-color: palevioletred; color: white; padding: 12px; border-radius: 30px;">
                        <i class="fa fa-cart-shopping"></i> <a href="#" style="color: white;">ADD TO CART</a>
                      </span>
                    </h5>
                    <br>
                    <h4>AED130.00</h4>
                    <h4>We've recreated our top selling cakes into delicio...</h4>
                    <a href="#home"><h4 style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; color:palevioletred ;">Read more</h4></a>

                </div>
              </div>


              <div class="col-sm-4 thumbnail box"  style="border-radius: 20px; margin: 10px; width: 360px; height: 543;"> 
                <img src="images/15.jpg" style="width: 100%; border-radius: 20px; height: 300px;">
                <div class="caption" style="padding: 15px;" >
                  
                    <h5 style="font-family: cursive; color: palevioletred;">
                      <b>Cake Bites</b>
                      <br>
                      <br>
                      <br>
                      <sapn style="font-family: cursive; background-color: palevioletred; color: white; padding: 12px; border-radius: 30px;">
                        <i class="fa fa-cart-shopping"></i> <a href="#" style="color: white;">ADD TO CART</a>
                      </span>
                    </h5>
                    <br>
                    <h4>AED130.00</h4>
                    <h4>We've recreated our top selling cakes into delicio...</h4>
                    <a href="#home"><h4 style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; color:palevioletred ;">Read more</h4></a>

                </div>
              </div>


              <div class="col-sm-4 thumbnail box"  style="border-radius: 20px; margin: 10px; width: 360px; height: 543;"> 
                <img src="images/16.jpg" style="width: 100%; border-radius: 20px; height: 300px;">
                <div class="caption" style="padding: 15px;" >
                  
                    <h5 style="font-family: cursive; color: palevioletred;">
                      <b>Kunafeh Cheesecake</b>
                      <br>
                      <br>
                      <br>
                      <sapn style="font-family: cursive; background-color: palevioletred; color: white; padding: 12px; border-radius: 30px;">
                        <i class="fa fa-cart-shopping"></i> <a href="#" style="color: white;">ADD TO CART</a>
                      </span>
                    </h5>
                    <br>
                    <h4>AED130.00</h4>
                    <h4>Here’s our famous hybrid dessert, all the flavor...</h4>
                    <a href="#home"><h4 style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; color:palevioletred ;">Read more</h4></a>

                </div>
              </div>


              <div class="col-sm-4 thumbnail box"  style="border-radius: 20px; margin: 10px; width: 360px; height: 543;"> 
                <img src="images/17.jpg" style="width: 100%; border-radius: 20px; height: 300px;">
                <div class="caption" style="padding: 15px;" >
                  
                    <h5 style="font-family: cursive; color: palevioletred;">
                      <b>Ramadan Kareem Moon Cake</b>
                      <br>
                      <br>
                      <br>
                      <sapn style="font-family: cursive; background-color: palevioletred; color: white; padding: 12px; border-radius: 30px;">
                        <i class="fa fa-cart-shopping"></i> <a href="#" style="color: white;">ADD TO CART</a>
                      </span>
                    </h5>
                    <br>
                    <h4>AED250.00</h4>
                    <h4>A delicious chocolate cake designed especially for...</h4>
                    <a href="#home"><h4 style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; color:palevioletred ;">Read more</h4></a>

                </div>
              </div>


              <div class="col-sm-4 thumbnail box"  style="border-radius: 20px; margin: 10px; width: 360px; height: 543;"> 
                <img src="images/18_.jpg" style="width: 100%; border-radius: 20px; height: 300px;">
                <div class="caption" style="padding: 15px;" >
                  
                    <h5 style="font-family: cursive; color: palevioletred;">
                      <b>Sticky Date Cake</b>
                      <br>
                      <br>
                      <br>
                      <sapn style="font-family: cursive; background-color: palevioletred; color: white; padding: 12px; border-radius: 30px;">
                        <i class="fa fa-cart-shopping"></i> <a href="#" style="color: white;">ADD TO CART</a>
                      </span>
                    </h5>
                    <br>
                    <h4>AED200.00</h4>
                    <h4>We've transformed the classic British dessert into...</h4>
                    <a href="#home"><h4 style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; color:palevioletred ;">Read more</h4></a>

                </div>
              </div>











            </div>

          </div>
          <br>
          <br>

          -->




          <!--About the website(short intro)-->
          <div class="zoom-in">
          <div class="container-fluid bg-2 text-center" style="background-color: #462727; height: 420px; color: white; padding-top: 120px; font-family: cursive; margin-top: 100px;">
            <div class="container" style="border-color: white; border-style: solid; margin-top: -40px; margin-bottom: -30px;">

              
                <h2 style="border-color: rgb(238, 233, 228); margin-bottom: -10x;">
                    <br>
                    We pride ourselves on making real food the old fashioned
                    <br> way: from the best ingredients, by hand with dedication and
                    <br> love.
                    
                   
                    </h2>
                    <a href="https://www.google.com/search?q=sugarmoo&oq=sugarmoo&aqs=chrome..69i57j0i512l2j69i60l5.7413j0j7&sourceid=chrome&ie=UTF-8" class="btn btn-default btn-lg">Search</a>
                    <br>
                    <br>
                    <br>
                    
                   
                    
            </div>
          </div>
          </div>


          <!--Review-->


        <div class="slideshow-container" style="font-family: cursive; color: black; height: 500px;">

        <div class="mySlides">
            <h1>WHAT PEOPLE ARE SAYING ABOUT US</h1>
            <br><br>
            <q>SugarMoo has a great selection of brownies, cupcakes, cookies,
                cake pops…but it’s the cakes that are wow! Beautifully decorated,
                but the difference is that they also taste good! I’ve used them
                for several events and the service and products are always good.
                Red velvet is an absolute must!</q>
                <br>
                <br>
            <p class="author" style="font-size: 22px;">- Camilla Iman</p>
            <br>
            <br>

            <sapn style=" background-color: rgb(38, 125, 57); color: white; padding: 12px; border-radius: 30px;">
              <a href="users/review.php" style="color: white;">LEAVE A REVIEW</a>
            </span>
        </div>

        <div class="mySlides">
            <h1>WHAT PEOPLE ARE SAYING ABOUT US</h1>
            <br><br>
            <q>I ordered personalized cupcakes from them for an event for
                delivery and the lovely Nefeli from Sugarmoo contacted me 
                straight away to take my order and to make sure I got exactly what I wanted.</q>
                <br>
                <br>
                <p class="author" style="font-size: 22px;">- Reyma Abraham</p>
            <br>
            <br>

            <sapn style=" background-color:rgb(38, 125, 57); color: white; padding: 12px; border-radius: 30px;">
              <a href="users/review.php" style="color: white;">LEAVE A REVIEW</a>
            </span>
        </div>


        <div class="mySlides">
            <h1>WHAT PEOPLE ARE SAYING ABOUT US</h1>
            <br><br>
            <q>Sugarmoo – A play on the names ( sugar and milk – the essential ingredients in baking),
                Sugarmoo is definitely one of the best dessert places to order from Dubai! I have a couple
                 of favorites, the red velvet, and Oreo cookies medley is the best birthday cake I have 
                 ever had!</q>
                <br>
                <br>
                <p class="author" style="font-size: 22px;">- Nadia Vasele</p>
            <br>
            <br>

            <sapn style=" background-color: rgb(38, 125, 57); color: white; padding: 12px; border-radius: 30px;">
              <a href="users/review.php" style="color: white;">LEAVE A REVIEW</a>
            </span>
        </div>

        <div class="mySlides">
            <h1>WHAT PEOPLE ARE SAYING ABOUT US</h1>
            <br><br>
            <q>I ordered a birthday cake from Sugarmoo and I couldn’t be more satisfied.
                The cake was stunning. It was even better than the picture I sent them. 
                I was worried about the taste, since usually this type of cake is visually 
                pleasing but sickeningly sweet.</q>
                <br>
                <br>
                <p class="author" style="font-size: 22px;">- Shaddi Kabbesh</p>
            <br>
            <br>

            <sapn style=" background-color:rgb(38, 125, 57); color: white; padding: 12px; border-radius: 30px;">
              <a href="users/review.php" style="color: white;">LEAVE A REVIEW</a>
            </span>
        </div>

        
        
        
        <a class="prev" onclick="plusSlides(-1)">❮</a>
        <a class="next" onclick="plusSlides(1)">❯</a>
        
        </div>
        
        <div class="dot-container">
          <span class="dot" onclick="currentSlide(1)"></span> 
          <span class="dot" onclick="currentSlide(2)"></span> 
          <span class="dot" onclick="currentSlide(3)"></span> 
          <span class="dot" onclick="currentSlide(4)"></span> 
        </div>
        
        <script>
        var slideIndex = 1;
        showSlides(slideIndex);
        
        function plusSlides(n) {
          showSlides(slideIndex += n);
        }
        
        function currentSlide(n) {
          showSlides(slideIndex = n);
        }
        
        function showSlides(n) {
          var i;
          var slides = document.getElementsByClassName("mySlides");
          var dots = document.getElementsByClassName("dot");
          if (n > slides.length) {slideIndex = 1}    
          if (n < 1) {slideIndex = slides.length}
          for (i = 0; i < slides.length; i++) {
              slides[i].style.display = "none";  
          }
          for (i = 0; i < dots.length; i++) {
              dots[i].className = dots[i].className.replace(" active", "");
          }
          slides[slideIndex-1].style.display = "block";  
          dots[slideIndex-1].className += " active";
        }
        </script>


          



          <!--Make it Yours-->


          <div class=" container-fluid text-center" style="background-color:rgb(224, 184, 236);">
            <div class="row text-center" >

              <div class="col-md-5" style="padding-top: 220px; padding-left: 30px; font-family: cursive;">

                <h2 style="font-family:cursive;">
                  MAKE IT YOURS
                </h2>
                <h3 style="font-family:cursive;">
                  We love what we do and this why we take on a very personal approach
                  
                  to cater to any party you have: Birthdays, Weddings, Baby Showers,
                  
                  Corporate Events…you name it!
                  <br>
                  <br>
                  <br>
                </h3>
                

                <h4>

                  <sapn style="font-family: cursive; background-color: rgb(101, 80, 160); color: white; padding: 12px; border-radius: 30px;">
                    <a href="users/create_cake.php" style="color: white;">CREATE YOUR OWN CAKE</a>
                  </span>
                   


                </h4>
                
              
              
              </div>

              <div class="col-md-7" >

                <img class="images" src="images/make it yours.jpg" style="border-radius: 20px; margin: 50px; height: 600px; width: 650px; ">
                
              
              
              
              </div>
            </div>
            

          </div>






          <!--About Us-->


          <div class=" container-fluid text-center" style="background-color:palevioletred;">
            
            <div class="row text-center" >

              <div class="col-md-4">
               
                <img class="images" src="images/aboutusjpeg.jpeg" style="border-radius: 20px; margin: 50px; height: 500px;width: 500px; ">
                
              
              </div>

              <div class="col-md-8 "  style="margin-top: 120px; padding-left: 30px; color: white; font-family: cursive;">
                <h2 style="color: white; font-family: cursive;">
                  About Us
                </h2 style="color: white; font-family: cursive;">
                <h3>
                  We are the first online dessert & cake delivery business in Dubai UAE
                  <br>
                  that delivers desserts to your door. Our motto, ‘’You Crave. We Deliver.’’,
                  <br>
                  promises just that! Rated as one of Dubai’s best dessert spots, at
                  <br>
                  SugarMoo, we like to do things differently. All our desserts are freshly
                  <br>
                  baked daily at the SugarMoo HQ in Dubai, UAE and then delivered to
                  <br>
                  homes and businesses across Dubai (in) under 60 minutes. We are the
                  <br>
                  first unique dessert concept in the region. You can find our desserts
                  <br>
                  labs at Nakheel Mall on the Palm, at Gate District 2 in DIFC and at
                  <br>
                  Huna in Yas Mall in Abu Dhabi.
                </h3>
              
              
              </div>
            </div>
            
          
          </div>

          <script src="myscripts.js"></script>










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