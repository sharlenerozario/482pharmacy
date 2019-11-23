<?php
require 'connection.php';
$sql = "SELECT * FROM products";
$result = mysqli_query($conn, $sql);



	echo '<table border="0" cellspacing="5" cellpadding="5"> 
      <tr> 
          <td>Product ID</td> 
          <td>Product Name</td> 
          <td>Product Update </td> 
          <td>Product Delete </td> 
        
      </tr>';


if (mysqli_num_rows($result) > 0) {
while($row = mysqli_fetch_assoc($result)) {
		$p_id = $row["p_id"];
        $p_name = $row["p_name"];
        echo '<tr> 
                  <td>'.$p_id.'</td> 
                  <td>'.$p_name.'</td> 
                  <td> <img src="update.png" alt="updateicon" id="updateicon" style="width:25px;height:25px;"></td>
                  <td><img src="delete.png" alt="deleteicon" id="deleteicon" style="width:25px;height:25px;"></td> 

              </tr>';
        
}
}
?>