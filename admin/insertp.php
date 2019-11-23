<?php
require 'connection.php';

$p_name=$_POST["pname"];
$p_img=$_POST["pimg"];
$p_price=$_POST["price"];
$p_desc=$_POST["pdescription"];
//$lname=$_POST["lname"];

// $=$_POST[""];

$sql = "INSERT INTO products (p_name, p_img, p_price, p_desc)
VALUES ('$p_name', '$p_img', '$p_price', '$p_desc')";

if (mysqli_query($conn, $sql)) {
	header("location:showproduct.php?success=1");
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
?>