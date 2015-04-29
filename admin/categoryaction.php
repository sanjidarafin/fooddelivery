<?php
require_once('connect.php');
  $nameErr = $category_name = $description = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {

   if (empty($_POST["category_name"])) {
    echo  $nameErr = "category is required<br>";
   } else {
$category_name = $_POST["category_name"] ;
   }
  
     if (empty($_POST["description"])) {
    echo  $nameErr = "Description is required<br>";
   } else {
$description = $_POST["description"] ;
   }
  
}

if(!$nameErr){
    $sql="INSERT INTO `category` (`id`, `name`, `description`) VALUES (NULL, '$category_name', '$description')";
  
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