<?php 

    $hostName='localhost';
    $userName='root';
    $password='';
    $database='customers';

    $con=new mysqli($hostName,$userName,$password, $database);

    if($con -> connect_errno){
        echo "Connection Erorr : ".$con -> connect_error;
    }
    else{
        // echo "Connection Succesfull";
    }
?>