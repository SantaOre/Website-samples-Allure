// -----------------------------kalkulators-------------------------//
function add(count){
    document.getElementById("calbox").value+=count;
}
function cal(){
    document.getElementById("calbox").value= eval(document.getElementById("calbox").value);
}

function clean(){
    document.getElementById("calbox").value = "";

 
}
function back(){
    var str= document.getElementById("calbox").value;
    str = str.substr(0, str.length-1);
    document.getElementById("calbox").value = str;
}
// -----------------------------kalkulators-------------------------//