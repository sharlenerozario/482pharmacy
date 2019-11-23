<html>



<head>
	<title>Show Products</title>
</head>

<link rel="stylesheet" type="text/css" href="adminstyle.css">




<body>
	<div id="header">
		<center><img src="admin_icon.png" alt="adminLogo" id="adminLogo"></center>
	</div>

	<div>
		<div id="sidebar">
			<ul>
				<li><a href="addproduct.php">Add product</a></li>
				<li><a href="showproduct.php">Show products</a></li>
				<li><a href="updateproduct.php">Update product</a></li>

				<li><a href="addcategory.php">Add category</a></li>
				<li><a href="showcategory.php">Show categories</a></li>
				<li><a href="updatecategory.php">Update category</a></li>		
			</ul>
		</div>
	</div>

	
	<div id="data">
		<div class="container">

			
			<?php
			require 'connection.php';
			session_start();
			
    

			$sql = "SELECT * FROM products";
			$result = mysqli_query($conn, $sql);
			echo '<table border="0" cellspacing="5" cellpadding="5"> 
			<tr> 
			<td>Product ID</td> 
			<td>Product Name</td> 
			<td>Product Price</td>
			<td>Update </td> 
			<td>Delete </td> 
			</tr>';

			if (mysqli_num_rows($result) > 0) {
				while($row = mysqli_fetch_assoc($result)) {
					$p_id = $row["p_id"];
					$p_name = $row["p_name"];
					$p_price= $row["p_price"];
					$_SESSION["pid"] =$p_id;

					echo '<tr> 
					<td>'.$p_id.'</td> 

					<td>'.$p_name.'</td> 
					<td>'.$p_price.'</td> 
					<td> <a href="updateproduct.php"><img src="update.png" alt="updateicon" id="updateicon" style="width:25px;height:25px;"></a></td>
					<td><a href="updateproduct.php"><img src="delete.png" alt="deleteicon" id="deleteicon" style="width:25px;height:25px;"></td>
					</tr>';


				}
			}
			?>
			
		</div>
	</div>

</body>



</html>