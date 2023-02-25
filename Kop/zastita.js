const pogled = document.querySelectorAll(".view");
const radioBtn = Array.from(document.querySelectorAll(".slide"));
let k = 0;
pogled[k].style.display = "block";
radioBtn[k].checked = "true";
function idiDesno(){
    if(k == 3){
        pogled[k].style.display = "none";
        radioBtn[k].checked = "false";
        k = 0;
        radioBtn[k].checked = "true";
        pogled[k].style.display = "block";
    }
    else{
        pogled[k].style.display = "none";
        radioBtn[k].checked = "false";
        k++;
        radioBtn[k].checked = "true";
        pogled[k].style.display = "block";
    }
}
function idiLijevo(){
    if(k == 0){
        pogled[k].style.display = "none";
        radioBtn[k].checked = "false";
        k = 3;
        radioBtn[k].checked = "true";
        pogled[k].style.display = "block";
    }
    else{
        pogled[k].style.display = "none";
        radioBtn[k].checked = "false";
        k--;
        radioBtn[k].checked = "true";
        pogled[k].style.display = "block";
    }
}
radioBtn.forEach(e => {
    e.addEventListener("click", ()=>{
        radioBtn[k].checked = "false";
        pogled[k].style.display = "none";
        e.checked = "true";
        console.log(e);
        console.log(radioBtn);
        k = radioBtn.indexOf(e);
        pogled[k].style.display = "block";

    })
});

document.addEventListener("keydown", e=>{
    if(e.key == "ArrowRight") {
        idiDesno()
    }
    else if(e.key == "ArrowLeft"){
        idiLijevo();
    }
    else {
        console.log(e);
        console.log("gas");
    }
})