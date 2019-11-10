<html>



<head>
	<title>Add Category</title>
</head>

<link rel="stylesheet" type="text/css" href="adminstyle.css">

<meta charset="utf-9">
<script src="adminform.js" type="text/javascript"></script>



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
			
			<form name="adminform" action="addcategory.php" onsubmit="return validateForm()" method="post">
				<label><font size="6">Add Category</font></label><br><br>
				<label>	Category name	</label><br>
				<label><input style="width: 880px"  type="text" name="cname" value="" placeholder="Enter category name"><br><br></label>
				<label>	Category description	</label><br>
				<label>	<TEXTAREA type="text" Name="cdescription" ROWS="7" COLS="120" value=""  placeholder="Enter category description"></TEXTAREA></label>
				

				
				<label><input type="submit" name="submit" value="Submit Category"></label>
				

				



			</form>
		</div>
	</div>

</body>



</html>