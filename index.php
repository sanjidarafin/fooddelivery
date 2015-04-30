<!DOCTYPE html>

<html>
<head>
<title>Home</title>
<link type="text/css" rel="stylesheet" href="style.css">
<style type="text/css">
</style>
</head>

<body>

<div id="container">
<div id="header">
<h1 style="float:left">it is header part</h1>
<?php
session_start(); 
if(isset($_SESSION['user_email'])) {
  echo 'You are logged in';
?>
  
  <a href="logout.php">murgi logout</a>
  <?php

}
else { ?>
<div style="float:right"><ul><li><a href="login.php">Sign in</a></li><li><a href="register.php">Sign up</a></li></ul><div>
<?php
} ?>
  

</div>

<div id="body">
    <?php

require_once("container.php");
require_once("footer.php");

?>
 




</div>

