function a(){
	let x=prompt("Enter a number")
	let f=1;
	for(let i=1; i<=x; i++){
		f*=i;
	}
	document.getElementById("n").innerHTML=x;
	document.getElementById("f").innerHTML=f;
	console.log(5)
}
