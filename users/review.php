<?php 

include_once '../config/database.php';

$db = new Database();


if($_SERVER['REQUEST_METHOD'] == "POST"){

   $name = $_POST['name'];
   $email = $_POST['email'];
   $review = $_POST['review'];



   if(empty($name) || empty($email) || empty($review)){
      echo "<script>
         alert('Every required field must be fullfilled.')
         </script>";
   }else{

      $sql = "insert into reviews(name, email, review) values ('$name', '$email', '$review')";

      $result = $db->insert($sql);


      if($result){
         echo "<script>
         alert('Thank you for sending your review');

         window.location.href = '../index.html';

         </script>";

      }else{
         echo "<script>
         alert('Sending Failed!!')
         </script>";
      }


   }


}




?>








<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
<title>Cake Shop</title>
<meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="stylesheet" href="">

<link rel="shortcut icon" href="../images/nav-logo-new.png" type="image/x-icon">

<style>

    @import url('https://fonts.googleapis.com/css?family=Open+Sans:400,600,700&display=swap');
    * {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    }
    body {
    font-family: 'Open Sans', sans-serif;
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    background-color: #111;
    }
    .container {
    position: relative;
    display: flex;
    justify-content: center;
    align-items: center;
    width: 500px;
    height: 500px;
    }
    .login {
    position: absolute;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    width: 300px;
    height: 100px;
    gap: 20px;
    }
    .login h2 {
    font-size: 2em;
    color: #fff;
    }
    .input__box {
    position: relative;
    width: 100%;
    }
    .input__box input,
    .input__box button {
    position: relative;
    width: 100%;
    font-size: 1.2em;
    color: #fff;
    background: transparent;
    border: 2px solid #fff;
    border-radius: 40px;
    padding: 12px 20px;
    outline: none;
    box-shadow: none;
    }
    .input__box button {
    font-size: 1.2em;
    background: linear-gradient(45deg, #ff357a, #fff172);
    border: none;
    cursor: pointer;
    }
    .input__box input::placeholder {
    color: rgba(255, 255, 255, 0.75);
    }
    .input__links {
    position: relative;
    display: flex;
    justify-content: space-between;
    align-items: center;
    width: 100%;
    padding: 0 20px;
    }
    .input__links a {
    text-decoration: none;
    color: #fff;
    }
    .container i {
    position: absolute;
    inset: 0;
    border: 2px solid #fff;
    transition: 0.5s;
    }
    .container:hover i {
    border: 6px solid var(--clr);
    filter: drop-shadow(0 0 20px var(--clr));
    }
    .container i:nth-child(1) {
    border-radius: 66% 34% 67% 33% / 27% 65% 35% 73%;
    animation: animate 14s linear infinite;
    }
    .container i:nth-child(2) {
    border-radius: 53% 47% 53% 47% / 50% 40% 60% 50%;
    animation: animate 13s linear infinite;
    }
    .container i:nth-child(3) {
    border-radius: 41% 59% 43% 57% / 57% 30% 70% 43%;
    animation: animate 15s linear infinite;
    }
    @keyframes animate {
    0% {
        transform: rotate(0deg);
    }
    100% {
        transform: rotate(360deg);
    }
    }
    .container:hover i:nth-child(1) {
    animation: animate 5s linear infinite;
    }
    .container:hover i:nth-child(2) {
    animation: animate 7s linear infinite;
    }
    .container:hover i:nth-child(3) {
    animation: animate 6s linear infinite;
    }


</style>

<script src=""></script>

<body>


    <div class="container">
      <i style="--clr: #00ff0a"></i>
      <i style="--clr: #ff0057"></i>
      <i style="--clr: #fffd44"></i>
      <div class="login">
        <h2>Review</h2>

        <form action="" method="POST">
            <div class="input__box">
            <input type="text" class="input" name="name" id="name" required placeholder="Username" />
            </div>
            <br>
            <div class="input__box">
            <input type="email" class="input" name="email" id="email" required placeholder="E-mail" />
            </div>
            <br>
            <div >
            <textarea  type="text" class="input" name="review" id="review" required placeholder="Your Review" rows="5" cols="40" style="border-radius:5px; background-color:#ffe6ff;"></textarea>
            </div>
            <br>

            <div class="input__box">
            <button type="submit">Send</button>
            </div>

        </form>

      </div>
    </div>



</body>
</html>