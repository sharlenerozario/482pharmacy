function validateForm() {

	var yn = document.forms["signupform"]["yourname"].value;
	if (yn == "") {
		alert("Please enter your name.");
		return false;
	}


	var p = document.forms["signupform"]["pass"].value;
	if (p == "") {
		alert("Please enter your password.");
		return false;
	}


	

	var e = document.forms["signupform"]["email"].value;
	if (e == "") {
		alert("Email field must not be empty");
		return false;
	}


	var p = document.forms["signupform"]["confirmpass"].value;
	if (p == "") {
		alert("Please re-enter your password for confirmation.");
		return false;
	}



}