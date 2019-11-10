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
			<table>
				<tr>
					<th>  Product ID</th>
					<th>  Product Name</th>
					<th>  Update</th>
					<th>  Delete</th>
					

				</tr>
				<tr>
					<td>1</td>
					<td> Product1</td>
					<td> <img src="update.png" alt="updateicon" id="updateicon"></td>
					<td> <img src="delete.png" alt="deleteicon" id="deleteicon"></td>
				</tr>
				<tr>
					<td>2</td>
					<td> Product2</td>
					<td> <img src="update.png" alt="updateicon" id="updateicon"></td>
					<td> <img src="delete.png" alt="deleteicon" id="deleteicon"></td>
				</tr>
			</table>
			
		</div>
	</div>

</body>



</html>