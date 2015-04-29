<?php
require_once('admin/connect.php');
$sql="SELECT * from product";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

     while($row = $result->fetch_assoc()) {
     $productvar=  $row["name"];
     $pricevar=  $row["price"] ;
$desvar=  $row["description"] ;?>
<div style="border: 1pc solid grey; width: 300px; float: left; margin-left: 3px;color: red; margin-bottom: 4px;">
  <?php echo $productvar ?> <br>
  <?php echo $desvar ?> </br>
  <?php echo $pricevar ?>
  
</div>  

<?php
     }
} else {
     echo "0 results";
}

$conn->close();


?>