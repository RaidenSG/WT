function validate() {
	let name = document.getElementById("name");
	let email = document.getElementById("email");
	let phone = document.getElementById("phone");
	let country = document.getElementById("country");
	let password = document.getElementById("password");
	if (name.value === "" ) {
	  alert ( "Please enter your name.");
	}
	else if (email.value === "" || !email.checkValidity()) {
	  alert("Please enter a valid email.");
	}
	else if (phone.value === "" || !phone.checkValidity()) {
	  alert("Please enter a valid phone number.");
	}
	else if (country.value === "" ) {
	  alert("Please select a country.");
	}
	else if (password.value === "" ) {
	  alert("Please enter a password.");
	}
	else{
	  alert("Form submitted.");
	} 
  }
  