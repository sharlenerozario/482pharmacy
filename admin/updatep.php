
<?php
require 'connection.php';
session_start();

$up_name=$_POST["pname"];
$up_img=$_POST["pimg"];
$up_price=$_POST["price"];
$up_desc=$_POST["pdescription"];
//$p_id=$U_SESSION['upid'];


$pr_id=$_SESSION['pid'];


$sql = "UPDATE products SET p_name='$up_name', p_img='$up_img', p_desc='$up_desc', p_price='$up_price' WHERE p_id='$pr_id'";


if (mysqli_query($conn, $sql)) {
header("location:showproduct.php?success=1");
} else {
echo "Error updating record: " . mysqli_error($conn);
}

					
?>









