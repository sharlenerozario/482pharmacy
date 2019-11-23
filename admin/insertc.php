<?php
require 'connection.php';

$c_name=$_POST["cname"];
$c_desc=$_POST["cdescription"];
//$lname=$_POST["lname"];

// $=$_POST[""];

$sql = "INSERT INTO category (c_name, c_desc)
VALUES ('$c_name', '$c_desc')";

if (mysqli_query($conn, $sql)) {
header("location:showcategory.php?success=1");
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
?>