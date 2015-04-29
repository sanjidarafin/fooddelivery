<?php
require_once('admin/connect.php');
  $nameErr = $customer_name = $email = $address = $birthday = $pass =  $sex = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {

   if (empty($_POST["customer_name"])) {
    echo  $nameErr = "Name is required<br>";
   } else {
$customer_name = $_POST["customer_name"] ;
   }
  
     if (empty($_POST["email"])) {
    echo  $nameErr = "email is required<br>";
   } else {
$email = $_POST["email"] ;
   }
  
     if (empty($_POST["address"])) {
  echo     $nameErr = "address is required<br>";
   } else {
 $address = $_POST["address"] ;
   }
  
     if (empty($_POST["birthday"])) {
    $nameErr = "birthday is required<br>";
   } else {
 $birthday = $_POST["birthday"] ;
   }
  
  
     if (empty($_POST["pass"])) {
     echo $nameErr = "password is required<br>";
   } else {
$pass =md5( $_POST["pass"]);
   }
  
     if (empty($_POST["sex"])) {
    echo $nameErr = "sex is required<br>";
   } else {
    $sex = $_POST["sex"] ;
   }
}

if(!$nameErr){
  $sql ="INSERT INTO `customer` (`customer_id`, `customer_name`, `email`, `address`, `birthday`, `password`, `sex`) VALUES (NULL, '$customer_name', '$email', '$address', '$birthday', '$pass', '$sex');";
    if($conn->query($sql) == TRUE)
    {
    echo "Inserted successfully";
  }
  else
    {
    echo "something is wrong";

  }
}
  else{
     echo "Access Denied";
  }
  
  

  ?>