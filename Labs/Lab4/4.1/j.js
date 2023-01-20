const i=document.getElementById("in");
function r(){
    var x=document.getElementById("in").value;
    let r = "";
    for(let i=x.length-1; i>=0; i--){
        r+=x[i];
    }
    document.getElementById("in").value=r;
};
document.onload(alert("Document is loaded"))