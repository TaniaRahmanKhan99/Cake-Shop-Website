<?php

session_start();




?>













<!DOCTYPE html>
<html>
    <head>
        <title>Cart</title>
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

        <link href="../style.css" rel="stylesheet" >
        

        <style>
        </style>



    </head>     

    <body>

      <div id="preloader"></div>

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





        <!-- My Cart-->

        <div class="container">
            <div class="row">
                    <div class="col-lg-12 text-center border rounder bg-light"  style="margin-top:80px">
                    <h1>My Cart</h1>
                    <br>
                    <br>
                    </div>

                    <div class="col-lg-9"  style="">
                    <table class="table table-bordered">

                            <tr>
                                <th>Serial Number</th>
                                <th>Name</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Total</th>
                                <th>Action</th>


                            </tr>

                            <?php
                              
                                    if(isset($_SESSION['cart'])){

                                        foreach($_SESSION['cart'] as $key => $value){
                                            $sr = $key + 1;
                                           
                                            echo"
                                                <tr>
                                                    <td>$sr</td>
                                                    <td>$value[name]</td>
                                                    <th>$value[price]<input type='hidden' class='iprice' value='$value[price]'></th>
                                                    <td>
                                                      <form action='manage_cart.php' method='POST'>
                                                        <input class='iquantity' onchange='this.form.submit()' name='Mod_Quantity' type='number' value = '$value[Quantity]' min='1' max='15' style='text-align: center;'>
                                                        <input type='hidden' name='name' value='$value[name]'>
                                                      </form>
                                                    </td>
                                                    <td class='itotal'></td>
                                                    <td>
                                                        <form action='manage_cart.php' method='POST'>
                                                            <button type='submit' name='remove' class='btn btn-danger'> Remove </button>
                                                            <input type='hidden' name='name' value='$value[name]'>
                                                        </form>
                                                    </td>
                                                </tr>
                                            ";
                                        }
                                    }
                                
                            ?>





                        </table>
                    </div>

                    <div class="col-lg-3 text-center"  style="background-color:#ccccff; border-radius:10px">

                    <div>
                            <h3> Grand Total: </h3>
                            <h4 id="gtotal"></h4>
                            
                            <br>

                            <?php

                              if(isset($_SESSION['cart']) && count($_SESSION['cart']) > 0) {
                            
                            ?>
                         
                            <form action="purchase.php" method="POST">
                                <div class="form-group">
                                  <label >Name</label>
                                  <input type="text" class="form-control" id="name" name="name" required placeholder="Enter your Name">
                                </div>

                                <div class="form-group">
                                  <label>E-mail</label>
                                  <input type="text" class="form-control" id="email" name="email" required placeholder="Enter your Name">
                                </div>

                                <div class="form-group">
                                  <label>Phone</label>
                                  <input type="text" class="form-control" id="phone" name="phone" required placeholder="Enter your Name">
                                </div>

                                <div class="form-group">
                                  <label>Address</label>
                                  <textarea class="input" type="text" id="address" name="address" required placeholder="Your Address" rows="4" cols="34"></textarea>
                                </div>

                                <div class="form-check">
                                  <label> Choose Payment Method:</label>
                                  <label class="radio">
                                  <input type="radio" name="payment" value="Cash On Delivery">Cash On Delivery
                                  </label>
                                  <label class="radio">
                                  <input type="radio" name="payment" value="bKash">bKash
                                  </label>
                                  <label class="radio">
                                  <input type="radio" name="payment" value="Nagad">Nagad
                                  </label>
                                </div>



                                <br>
                                <button type="submit" class="btn btn-success" name="purchase">Make Purchase</button>
                                <br><br>
                            </form>

                            <?php
                              }
                            ?>
                    </div>
                
                
                    </div>

                </div>
            </div>
          



            <script>

              var gt=0;
              var iprice = document.getElementsByClassName('iprice');
              var iquantity = document.getElementsByClassName('iquantity');
              var itotal = document.getElementsByClassName('itotal');
              var gtotal = document.getElementById("gtotal");

              function subTotal(){
                
                gt=0;
                for(i=0; i<iprice.length; i++){

                  itotal[i].innerText = (iprice[i].value)*(iquantity[i].value);
                  gt = gt + (iprice[i].value)*(iquantity[i].value);

                }
                gtotal.innerText = gt;

              }

              subTotal();


          </script>









          



<!--Footer-->

<div class="footer pt-5" style="height: 400px; margin-top: 200px;">
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