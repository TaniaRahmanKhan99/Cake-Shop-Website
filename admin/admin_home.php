<?php

session_start();

if($_SESSION['name'] != "admin"){


    header("location: admin_login.php");

}



$id = $_SESSION['id'];



?>







<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Cake Shop</title>


    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    
    
    
    <!--CKeditor Link -->
    <script type="text/javascript" src="../tools/ckeditor/ckeditor.js"></script>
    
    
    <!-- Fancybox Link -->
    <script type="text/javascript" src="fancyBox/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="fancyBox/jquery.fancybox.pack.js"></script>
    <link rel="stylesheet" type="text/css" href="fancyBox/jquery.fancybox.css" media="screen">

    <link rel="shortcut icon" href="../images/nav-logo-new.png" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <!-- Header Div

    <div class="container-fluid text-center" id="hDiv" style="height:100px;">

        <h1><b>A D M I N &nbsp;&nbsp; P A N E L</b></h1>

    </div>

     -->


     <!-- content div section -->




    <!-- body main container section -->

    <div class="container-fluid" style="height:80%; padding:0;">

        <div class="row" style="height:100%;">

            <!-- Navigation div section -->
            <div class="col-md-3 text-center" id="navDiv">

                <img src="../images/nav-logo-new.png" alt="Company Logo" width="100px;" height="100px;" style="margin-left: -150px; margin-top: 10px;">
                <h4 id="title" style="width: 200px; margin-bottom: 0; font-family: cursive">Admin Control</h4>

                <ul id="navList" >
                    
                    <li><a href="admin_home.php">Admin home</a></li>
                    <li><a href="edit_profile.php">Edit Profile</a></li>
                    <li><a href="change_password.php">Change Password</a></li>
                    <li><a href="manage_admin.php">Manage Admin</a></li>
                    <li><a href="manage_employee.php">Manage Employee</a></li>
                    <li><a href="manage_cupcakes.php">Cup Cakes</a></li>
					<li><a href="manage_icecream.php">Ice Cream</a></li>
					<li><a href="manage_cakes.php">Cakes</a></li>
					<li><a href="manage_babycakes.php">Baby Cakes</a></li>
					<li><a href="manage_brownies.php">Brownies</a></li>
					<li><a href="manage_cookies.php">Cookies</a></li>
					<li><a href="manage_jars&truffles.php">Jars & Truffles</a></li>
					<li><a href="manage_vegandesserts.php">Vegan Desserts</a></li>
					<li><a href="manage_sweetbundle.php">Sweet Bunbles</a></li>
					<li><a href="manage_product.php">OTHERDESSERTS</a></li>
                    <li><a href="customer_order.php">Customer Order</a></li>
                    <li><a href="reviews.php">Reviews</a></li>
                    <li><a href="show_feedbacks.php">Show Feedbacks</a></li>
					<li><a href="custom_cake.php">Custom Cake</a></li>
					<li><a href="user_signup.php">User SignUp</a></li>
                    <li><a href="logout.php">Log Out</a></li>
                </ul>


            </div>


            <!-- content div section -->

            <div class="col-md-8 text-center" >

            <br><br><br><br><br><br><br><br><br><br><br><br><br>

            
                <h2><b style="font-family: cursive; color: palevioletred; font-size: 56px">Welcome To Admin Control Panel</b></h2>


            </div>

            




        </div>

    </div>





    <!-- footer copyright section -->

    <div class="container-fluid text-center" id="footerDiv" style="height:8%; margin-bottom: -500px;">

        <p><b style="font-family: cursive">©Sugarmoo 2023. All Rights Reserved</b></p>

    </div>


    





</body>

</html>