<?php

require_once('./connection/db.php');

   $firstname = $_POST['firstname'];
   //  $lastname = $_POST['lastname'];
   //  $birthday = $_POST['birthday'];
   //  $gender = $_POST['gender'];
   //  $email = $_POST['email'];
   //  $phoneNumber = $_POST['PhoneNumber'];
   //  $password = $_POST['password'];
   //  $options = $_POST['options'];


   // insert to database
   $sqlQueryInsert = "INSERT INTO customers.customers
   (orderNo, firstname, lastname, birthday, genter, email, PhoneNumber, password, `options`)
   VALUES(0, '$firstname', '', '', '', '', '', '', '');";

   if ($con->query($sqlQueryInsert) === true) {
      echo '<script>window.alert("successfull");</script>';
   } else {
      echo '<script>window.alert("ERROR");</script>';
   }

   mysqli_close($con);
?>