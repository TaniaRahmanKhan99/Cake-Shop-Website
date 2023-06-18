<?php 


include_once '../config/database.php';

$db = new Database();


if($_SERVER['REQUEST_METHOD'] == "POST"){

   $name = $_POST['name'];
   $email = $_POST['email'];
   $password = $_POST['password'];



   if(empty($name) || empty($email) || empty($password)){
      echo "<script>
         alert('Every required field must be fullfilled.')
         </script>";
   }else{

      $sql = "insert into user(u_name, u_email, u_password) values ('$name', '$email', '$password')";

      $result = $db->insert($sql);


      if($result){
         echo "<script>
         alert('Signed In');

         window.location.href = '../index.php';

         </script>";

      }else{
         echo "<script>
         alert('Failed!!')
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

@import url("https://fonts.googleapis.com/css2?family=Poppins&display=swap");

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Poppins", sans-serif;
}

body {
  background-color: #4b111b;
  width: 100%;
  min-height: 100vh;

  display: flex;
  align-items: center;
  justify-content: center;
}

button,
input {
  border: none;
  outline: none;
}

/****************
      FORM
*****************/
.signup {
  background-color: white;
  width: 100%;
  max-width: 500px;
  padding: 50px 70px;
  display: flex;
  flex-direction: column;
  justify-content: center;

  border-radius: 20px;
  box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1),
    0 4px 6px -2px rgba(0, 0, 0, 0.05);
}

h1 {
  text-align: center;
  color: #a4243b;
}
h2 {
  text-align: center;
  font-size: 1.2rem;
  font-weight: lighter;

  margin-bottom: 40px;
}

h2 span {
  text-decoration: underline;
  cursor: pointer;
  color: #a4243b;
}

/*  Field */
.signup__field {
  display: flex;
  flex-direction: column;
  width: 100%;
  position: relative;
  margin-bottom: 50px;
}

.signup__field:before {
  content: "";
  display: inline-block;
  position: absolute;
  width: 0px;
  height: 2px;
  background: #a4243b;
  bottom: 0;
  left: 50%;
  transform: translateX(-50%);
  transition: all 0.4s ease;
}

.signup__field:hover:before {
  width: 100%;
}

/*  Input */
.signup__input {
  width: 100%;
  height: 100%;
  font-size: 1.2rem;
  padding: 10px 2px 0;
  border-bottom: 2px solid #e0e0e0;
}

/*  Label */
.signup__label {
  color: #bdbdbd;
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  left: 2px;
  font-size: 1.2rem;
  transition: all 0.3s ease;
}

.signup__input:focus + .signup__label,
.signup__input:valid + .signup__label {
  top: 0;
  font-size: 1rem;
  background-color: white;
}

/*  Button */
button {
  background: #a4243b;
  color: white;
  padding: 12px 0;
  font-size: 1.2rem;
  border-radius: 25px;
  cursor: pointer;
}

button:hover {
  background: #4b111b;
}


</style>

<script src=""></script>

<body>


    <form class="signup" method="POST" action= "">
    <h1>Create account</h1>
    <h2>Already have an account? <span><a href="login.php">Login</span></a></h2>

    <div class="signup__field">
        <input class="signup__input" type="text" name="name" id="name" required />
        <label class="signup__label" for="username">Username</label>
    </div>

    <div class="signup__field">
        <input class="signup__input" type="text" name="email" id="email" required />
        <label class="signup__label" for="email">Email</label>
    </div>

    <div class="signup__field">
        <input class="signup__input" type="password" name="password" id="password" required />
        <label class="signup__label" for="password">Password</label>
    </div>

    <button type="submit">Sign up</button>
    </form>



</body>
</html>