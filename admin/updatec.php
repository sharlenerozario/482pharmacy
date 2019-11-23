
<?php
require 'connection.php';
session_start();

$uc_name=$_POST["cname"];
$uc_desc=$_POST["cdescription"];
//$p_id=$U_SESSION['upid'];


$ca_id=$_SESSION["cid"];


$sql = "UPDATE category SET c_name='$uc_name', c_desc='$uc_desc' WHERE c_id='$ca_id'";


if (mysqli_query($conn, $sql)) {
header("location:showcategory.php?success=1");
	//echo $ca_id;
} else {
echo "Error updating record: " . mysqli_error($conn);
}

					
?>
