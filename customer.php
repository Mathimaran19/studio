<?php

 echo $_POST['firstname'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $birthday = $_POST['birthday'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $phoneNumber = $_POST['PhoneNumber'];
    $password = $_POST['password'];
    $options = $_POST['options'];


   $conn = new mysqli('localhost', 'root', ' ', 'customers');
   if($conn->connect_error){
    die('connection failed:' .$conn->connect_error);
   }
   else{
    $stmt = $conn->prepare("insert into Customers(firstname,lastname,birthday,gender,email,phoneNumber,password,opthions)
    values(?,?,?,?,?,?,?,?)");
    $stmt->bind_param("ssssssss",$firstname,$lastname,$birthday,$gender,$email,$phoneNumber,$password,$options);
    $stmt->execute();
    echo "registration successs";
    $stmt->close();
    $conn->close();
   }
?>