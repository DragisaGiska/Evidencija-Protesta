var naziv = document.getElementsByName('organizator')[0];
var broj=document.getElementsByName('broj')[0];
var datum = document.getElementsByName('datum')[0];
var napomena= document.getElementsByName('napomena')[0];

function validate(){
    if(naziv.value.length<3 || broj.value<=0 || datum.value=="")
        return false;
    return true;
}

document.getElementById('ponisti').addEventListener("click", function () {
    naziv.value="";
    broj.value="";
    napomena.value="";
})