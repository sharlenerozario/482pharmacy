function validateForm() {

	var fn = document.forms["billform"]["fname"].value;
	if (fn == "") {
		alert("Name must be filled out");
		return false;
	}

	var e = document.forms["billform"]["email"].value;
	if (e == "") {
		alert("Please add an email address");
		return false;
	}



	var a = document.forms["billform"]["adr"].value;
	if (a == "") {
		alert("Address field must not be empty");
		return false;
	}

	var c = document.forms["billform"]["city"].value;
	if (c == "") {
		alert("City name must be filled out");
		return false;
	}



}