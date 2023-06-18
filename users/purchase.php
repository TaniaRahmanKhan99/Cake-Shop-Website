<?php 
/*

session_start();
include_once '../config/database.php';

$db = new Database();


if($_SERVER['REQUEST_METHOD'] == "POST"){

   $name = $_POST['name'];
   $email = $_POST['email'];
   $phone = $_POST['phone'];
   $address = $_POST['address'];
   $payment = $_POST['payment'];
   



   if(empty($name) || empty($email) || empty($phone)|| empty($address)|| empty($payment)){
      echo "<script>
         alert('Every required field must be fullfilled.')
         </script>";
   }else{

      $sql1 = "insert into order_manager(name, email, phone, address, payment) values ('$name', '$email', '$phone', '$address', '$payment')";

      $result = $db->insert($sql1);


      if($result){

        $id = $db -> insert_id;
        //$id = $this->db -> insert_id;

        $sql2 = "insert into user_orders(id, name, price, Quantity) values (?, ?, ?, ?)";

        $stmt = $db -> prepare($sql2); 
        

        
        if($stmt){

         $stmt->bind_param("isss", $id, $name, $price, $Quantity);
         

         foreach($_SESSION['cart'] as $key => $value){

            $name = $value['name'];
            $price = $value['price'];
            $Quantity = $value['Quantity'];
            $stmt -> execute();

         }

         unset($_SESSION['cart']);

         echo "<script>
         alert('Your Order is placed')
         window.location.href = 'index.html';
         </script>";


        }else{

         echo "<script>
         alert('SQL query prepare error!!')
         window.location.href = 'mycart.php';
         </script>";

        }



      }else{
         echo "<script>
         alert('Message sending Failed!!')
         window.location.href = 'mycart.php';
         </script>";
      }


   }


}

*/


?>








<?php 

session_start();
include_once '../config/database.php';

$db = new Database();


if($_SERVER['REQUEST_METHOD'] == "POST"){

   $name = $_POST['name'];
   $email = $_POST['email'];
   $phone = $_POST['phone'];
   $address = $_POST['address'];
   $payment = $_POST['payment'];
   



   if(empty($name) || empty($email) || empty($phone)|| empty($address)|| empty($payment)){
      echo "<script>
         alert('Every required field must be fullfilled.')
         </script>";
   }else{

      $sql1 = "insert into order_manager(name, email, phone, address, payment) values ('$name', '$email', '$phone', '$address', '$payment')";

      $result = $db->insert($sql1);


      if($result){

         foreach($_SESSION['cart'] as $key => $value){

            //$id = $db -> insert_id;
            //$id = $this->db -> insert_id;

            $sql2 = "insert into user_orders(name, price, Quantity) values ('$value[name]', '$value[price]', '$value[Quantity]')";

            //$stmt = $db -> prepare($sql2); 
            
            $result2 = $db->insert($sql2);
            
            if($result2){

               //$stmt->bind_param("isss", $id, $name, $price, $Quantity);
              
               

               foreach($_SESSION['cart'] as $key => $value){

                  $name = $value['name'];
                  $price = $value['price'];
                  $Quantity = $value['Quantity'];
                  //$stmt -> execute();

               }

               unset($_SESSION['cart']);

               echo "<script>
               alert('Your Order is placed')
               window.location.href = '../index.php';
               </script>";


        }else{

         echo "<script>
         alert('SQL query prepare error!!')
         window.location.href = 'mycart.php';
         </script>";

        }

}

      }else{
         echo "<script>
         alert('Message sending Failed!!')
         window.location.href = 'mycart.php';
         </script>";
      }


   }


}




?>