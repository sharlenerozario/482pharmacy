<html>



<head>
	<title>Add product</title>
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
			
			<form name="adminform" action="addproduct.php" onsubmit="return validateForm()" method="post">
				<label><font size="6">Add Product</font></label><br><br>
				<label>	Product name	</label><br>
				<label><input style="width: 880px"  type="text" name="pname" value="" placeholder="Enter product name"><br><br></label>
				<label>	Product description	</label><br>
				<label>	<TEXTAREA type="text" Name="pdescription" ROWS="7" COLS="120" value=""  placeholder="Enter product description"></TEXTAREA></label><br><br>
				<label>	Add image	</label><br>
				<label><input type="file"  name="pimg"  ></label><br><br>
				<label>	Choose category	</label><br>
				<label>
					<SELECT name="chosencategory" required>
						<OPTION Value="category">Categories</OPTION>
						<OPTION Value="c1">Category 1</OPTION>
						<OPTION Value="c2">Category 2</OPTION>
						<OPTION Value="c3">Category 3</OPTION>
						<OPTION Value="c4">Category 4</OPTION>
					</SELECT>
				</label><br><br>

				
				<label><input type="submit" name="psubmit" value="Submit Product"></label>
				

				



			</form>
		</div>
	</div>

</body>



</html>