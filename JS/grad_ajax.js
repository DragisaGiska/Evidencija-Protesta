var drzave=document.getElementsByClassName("drzava-select")[0];
var gradovi=document.getElementsByClassName("grad-select")[0];

var gradoviUpdate=function () {
    var izabranaDrzava=drzave.options[drzave.selectedIndex].value;
    var xhr=new XMLHttpRequest();
    xhr.onreadystatechange=function () {
        if(xhr.readyState==4 && xhr.status==200){
            gradovi.innerHTML=xhr.response;
        }
    }
    xhr.open("POST", "./gradovi_update.php?drzava="+izabranaDrzava, true);
    xhr.send();
}


drzave.addEventListener("change", gradoviUpdate);
