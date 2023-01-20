function validate() {
	let data = document.getElementById("input");
	if (data.value === "") {
	  alert ( "Please enter some text.");
	} else if (!/\d/.test(data.value)) {
	  alert("Please enter a text with atleast one number.");
	} 
}