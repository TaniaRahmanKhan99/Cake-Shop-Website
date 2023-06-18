<?php


include_once '../config/database.php';
session_start();

if($_SESSION['name'] != "admin"){


    header("location: admin_login.php");

}



$id = $_SESSION['id'];






$db = new Database();




if(isset($_GET['deleteID'])){

    $dId = $_GET['deleteID'];

    $del_sql = "delete from admin where id = '$dId'";
    $del = $db->delete($del_sql);
    
    
    if($del){
        header("location: manage_admin.php");
    }else{

        echo "<script>
            alert('Delete Failed!!');
            </script>";
    }

}






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

    <style>

       /*
		.body {
		margin:0;
		padding:0;
		font-family: sans-serif;
		background: linear-gradient(#db70b8, #ff8080);
		}

		.login-box {
		position: absolute;
		top: 50%;
		left: 50%;
		width: 700px;
		padding: 40px;
		transform: translate(-50%, -50%);
		background: rgba(0,0,0,.5);
		box-sizing: border-box;
		box-shadow: 0 15px 25px rgba(0,0,0,.6);
		border-radius: 10px;
		}

		.login-box h2 {
		margin: 0 0 30px;
		padding: 0;
		color: #fff;
		text-align: center;
		}

		.login-box .user-box {
		position: relative;
		}

		.login-box .user-box input {
		width: 100%;
		padding: 10px 0;
		font-size: 16px;
		color: #fff;
		margin-bottom: 30px;
		border: none;
		border-bottom: 1px solid #fff;
		outline: none;
		background: transparent;
		}
		.login-box .user-box label {
		position: absolute;
		top:0;
		left: 0;
		padding: 10px 0;
		font-size: 16px;
		color: #fff;
		pointer-events: none;
		transition: .5s;
		}

		.login-box .user-box input:focus ~ label,
		.login-box .user-box input:valid ~ label {
		top: -20px;
		left: 0;
		color: #03e9f4;
		font-size: 12px;
		}




        */

		.a {
		position: relative;
		display: inline-block;
		padding: 10px 20px;
		color: #03e9f4;
		font-size: 16px;
		text-decoration: none;
		text-transform: uppercase;
		overflow: hidden;
		transition: .5s;
		margin-top: 40px;
		letter-spacing: 4px
		}

		.a:hover {
		background: #03e9f4;
		color: #fff;
		border-radius: 5px;
		box-shadow: 0 0 5px #03e9f4,
					0 0 25px #03e9f4,
					0 0 50px #03e9f4,
					0 0 100px #03e9f4;
		}

		.a span {
		position: absolute;
		display: block;
		}

		.a span:nth-child(1) {
		top: 0;
		left: -100%;
		width: 100%;
		height: 2px;
		background: linear-gradient(90deg, transparent, #03e9f4);
		animation: btn-anim1 1s linear infinite;
		}

		@keyframes btn-anim1 {
		0% {
			left: -100%;
		}
		50%,100% {
			left: 100%;
		}
		}

		.a span:nth-child(2) {
		top: -100%;
		right: 0;
		width: 2px;
		height: 100%;
		background: linear-gradient(180deg, transparent, #03e9f4);
		animation: btn-anim2 1s linear infinite;
		animation-delay: .25s
		}

		@keyframes btn-anim2 {
		0% {
			top: -100%;
		}
		50%,100% {
			top: 100%;
		}
		}

		.a span:nth-child(3) {
		bottom: 0;
		right: -100%;
		width: 100%;
		height: 2px;
		background: linear-gradient(270deg, transparent, #03e9f4);
		animation: btn-anim3 1s linear infinite;
		animation-delay: .5s
		}

		@keyframes btn-anim3 {
		0% {
			right: -100%;
		}
		50%,100% {
			right: 100%;
		}
		}

		.a span:nth-child(4) {
		bottom: -100%;
		left: 0;
		width: 2px;
		height: 100%;
		background: linear-gradient(360deg, transparent, #03e9f4);
		animation: btn-anim4 1s linear infinite;
		animation-delay: .75s
		}

		@keyframes btn-anim4 {
		0% {
			bottom: -100%;
		}
		50%,100% {
			bottom: 100%;
		}
		}

    </style>
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
            <div class="col-md-2 text-center" id="navDiv">

                <img src="../images/nav-logo-new.png" alt="Company Logo" width="100px;" height="100px;" style="margin-left: -30px; margin-top: 10px;">
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


            <!-- Change Password section -->

            <div class="col-md-9 " >
            
                <h2><b style="font-family: cursive; color: palevioletred; margin-left: 500px; ">Manage Admin</b></h2>
               

                <div class="card shadow">

                    <a href="add_admin.php" class="btn btn-info">Add New Admin</a>

                    <div class="card-header">

                        <div class="row">
                            <div class="col-md-6">
                                <h3 style="margin-left: -450px; color: palevioletred;">All Admin</h3>

                            </div>

                        </div>

                    </div>



                    <div class="card-body">


                        <table class="table table-bordered">

                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>E-mail</th>
                                <th>Phone</th>
                                <th>Address</th>
                                <th>Action</th>

                            </tr>



							<?php
                
						$query = "select * from admin";
						$result = $db->select($query);


						if($result){
							while($row = mysqli_fetch_assoc($result)){
						?>

						<tr>
							<td><?php echo $row['id']; ?></td>
							<td><?php echo $row['name']; ?></td>
							<td><?php echo $row['email']; ?></td>
							<td><?php echo $row['phone']; ?></td>
							<td><?php echo $row['address']; ?></td>

							<?php
							
							if($row['id'] == 3){
							?>

								<td><a href="" class="btn btn-danger disabled">Delete</a></td>

							<?php

							}else{

							?>
							<td><a href="?deleteID=<?php echo $row['id']; ?>" onclick="return confirm('Are you sure you want to delete?')" class="btn btn-danger">Delete</a></td>

							<?php

							}


							?>


							</tr>




							<?php
							}
							}


							?>





                        

                            




                        </table>

                    </div>

                </div>


            </div>








                <!-- footer copyright section -->

                <div class="container-fluid text-center" id="footerDiv" style="height:10%; margin-bottom:-500px ;">

                    <p><b style="font-family: cursive">©Sugarmoo 2023. All Rights Reserved</b></p>

                </div>


    





</body>

</html>