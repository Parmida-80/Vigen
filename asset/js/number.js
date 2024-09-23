
let conter=1;
function addone(){
    conter++;
    document.getElementById("one").innerText=conter;
}
function subtract(){
    if(conter>1){
        conter--;
        document.getElementById("one").innerText=conter;
    }
}
