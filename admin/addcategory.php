<html>



<head>
	<title>Add category</title>
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
			
			<form name="myform" action="" method="post" onsubmit="validate()">
				<label><font size="6">Add Category</font></label><br><br>
				<label>	Category name	</label><br>
				<label><input style="width: 880px"  type="text" name="pname" value="" placeholder="Enter product name"><br><br></label>
				<label>	Category description	</label><br>
				<label>	<TEXTAREA type="text" Name="description" ROWS="7" COLS="120" value=""  placeholder="Enter product description"></TEXTAREA></label>
				

				
				<label><input type="submit" name="csubmit" value="Submit Category"></label>
				

				



			</form>
		</div>
	</div>

</body>



</html>