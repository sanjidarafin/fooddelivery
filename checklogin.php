<?php
 require_once('admin/connect.php');

 
// checking the user

if(isset($_POST['login'])){

$email = mysqli_real_escape_string($conn,$_POST['email']);

$pass = md5(mysqli_real_escape_string($conn,$_POST['password']));

$sel_customer = "select * from customer where email='$email' AND password='$pass';";

$run_customer = mysqli_query($conn, $sel_customer);

$check_customer = mysqli_num_rows($run_customer);

if($check_customer>0){
  session_start(); //set session variable

$_SESSION['user_email']=$email;

echo "<script>window.open('index.php','_self')</script>";

}

else {

echo "<script>alert('Email OR password is not correct, Try again!')</script>";

}

}

?>