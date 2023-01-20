let element, el;

function stacking(class1, class2, class3,event){
	document.getElementsByClassName(class1)[0].style.zIndex = "10";
	document.getElementsByClassName(class2)[0].style.zIndex = "0";
	document.getElementsByClassName(class3)[0].style.zIndex = "0";
	grab(event);			
}
function grab(event){
	element = event.currentTarget;
	document.addEventListener("mousemove", mover(element), true);
	document.addEventListener("mouseup", droper(element), true);
    console.log("grab")
}
function mover(event){
	element.style.left = event.clientX + "px";
	element.style.top = event.clientY + "px";
}
function droper(event){
	document.removeEventListener("mousemove", mover, true);
	document.removeEventListener("mouseup", droper, true);
}