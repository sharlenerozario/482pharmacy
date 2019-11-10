function validateForm() {

	var un = document.forms["loginform"]["uname"].value;
	if (un == "") {
		alert("Please enter your username.");
		return false;
	}

	var p = document.forms["loginform"]["pass"].value;
	if (p == "") {
		alert("Please enter your password.");
		return false;
	}



}