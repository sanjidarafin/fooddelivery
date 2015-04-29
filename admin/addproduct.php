<?php require_once('connect.php'); ?>
<div id="sidebar2">

         <h1>Add Product</h1><br />
		 <form action="productaction.php" method="POST">
	    Product Name:&nbsp; &nbsp; <input type="text" name="product_name"  size="50" value="maximum 50 characters" maxlength="50" /><br /><br />
		Description:&nbsp; &nbsp; &nbsp; &nbsp; <input type="text" name="description"  size="50" value="maximum 50 characters" maxlength="50" /><br /><br />
		Price per Kg:&nbsp; &nbsp; &nbsp; <input type="text" name="price" rows="3" cols="50"></input><br /><br />
<?php
  $sql = "SELECT * FROM `category`";
$result = $conn->query($sql);

if ($result->num_rows > 0) { ?>
<select name="category">
  <?php
    while($row = $result->fetch_assoc()) { ?>
  <option value='<?php echo $row["id"]?>'><?php echo $row["name"]?></option>
  <?php
    } ?>
  </select>
  <?php
} else {
    echo "0 results";
}
  ?>
   </br>    </br>
		<input type="submit" name="submit" value="submit"/>
</div>
