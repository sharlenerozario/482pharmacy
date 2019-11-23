<html>
<head>
	<title>Admin Panel</title>
</head>

<style>
	body{
		margin:0px;
		border:0px;
	}

	#header{
		width:100%;
		height:120px;
		background:black;
		color:white;
	}

	#sidebar{
		width:300px;
		height:600px;
		background:#00B7C3;
		float:left;
	}
	#data{
		height:600px;
		background:#68768A;
	}

	#adminLogo{
		
		width:120px;
		height:120px;
		border-radius: 80px;
	}

	ul li{
		padding:20px;
		border-bottom:2px solid grey;
	}

	ul li:hover{
		background: #2D7D9A;
		color:white;

	}


</style>




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

	<div>
		<div id="data">
	</div>



</html>