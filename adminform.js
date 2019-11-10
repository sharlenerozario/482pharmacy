function validateForm() {

	var pn = document.forms["adminform"]["pname"].value;
	if (pn == "") {
		alert("Product name must be filled out");
		return false;
	}

	var pi = document.forms["adminform"]["pimg"].value;
	if (pi == "") {
		alert("Please add an image of the product");
		return false;
	}
	
	// var cc = document.forms["adminform"]["chosencategory"].value;
	// if (cc == "") {
	// 	alert("A category must be selected");
	// 	return false;
	// }



	var cn = document.forms["adminform"]["cname"].value;
	if (cn == "") {
		alert("Category name must be filled out");
		return false;
	}

//-------------------------------------------------------------------------------------------------------------------------------------------
	var upn = document.forms["adminform"]["upname"].value;
	if (upn == "") {
		alert("Product name must be filled out");
		return false;
	}

	var ucn = document.forms["adminform"]["ucname"].value;
	if (ucn == "") {
		alert("Category name must be filled out");
		return false;
	}



}