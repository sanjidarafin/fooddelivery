<?php
require_once('connect.php');
  $nameErr = $product_name = $description = $price= $category = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {

   if (empty($_POST["product_name"])) {
    echo  $nameErr = "Product is required<br>";
   } else {
$product_name = $_POST["product_name"] ;
   }
  
     if (empty($_POST["description"])) {
    echo  $nameErr = "Description is required<br>";
   } else {
$description = $_POST["description"] ;
   }
  
     if (empty($_POST["price"])) {
  echo  $nameErr = "price is required<br>";
   } else {
 $price = $_POST["price"] ;
   }
  
       if (empty($_POST["category"])) {
  echo  $nameErr = "category is required<br>";
   } else {
  $category = $_POST["category"] ;
   }
}

if(!$nameErr){
    $sql="INSERT INTO `product` (`id`, `name`, `description`, `price`, `category_id`) VALUES (NULL, '$product_name', '$description', '$price', '$category')";
  
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