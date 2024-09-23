function menu(){
    let menu=document.getElementById("menu2");
    menu.style.visibility="visible";
}
function cluse(){
    let nav=document.getElementById("menu2");
    nav.style.visibility="hidden";
}
function call(){
    alert("09391823255");
}
// slide header
 function cart(){
     alert("محصول شما به سبد خرید اضافه شد");
 }
//slide main
function off(){
    let off=document.getElementById("slid-category");
    let buttomof=document.getElementById("OFF");
    let buttomnew=document.getElementById("new");
    let sho=document.getElementById("slid-category2");
    sho.style.visibility="visible";
    off.style.visibility="hidden"; 
    buttomof.style.backgroundColor="#fe727282";
    buttomnew.style.backgroundColor="rgb(254 114 114 / 0%)";

}
function newo(){
    let off=document.getElementById("slid-category");
    let buttomnew=document.getElementById("new");
    let buttomof=document.getElementById("OFF");
    let sho=document.getElementById("slid-category2");
    sho.style.visibility="hidden";
    off.style.visibility="visible";
    buttomnew.style.backgroundColor="#fe727282";
    buttomof.style.backgroundColor="rgb(254 114 114 / 0%)";
}



