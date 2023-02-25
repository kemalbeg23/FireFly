
function Prijavi(){
    console.log("gas");
}
function Prijava(){
    document.querySelector(".main").style.display = "none";
    document.querySelector(".form1").style.display = "flex";
}
function registracija(){
    document.querySelector(".form1").style.display = "none";
    document.querySelector(".form2").style.display = "flex";
}
document.querySelectorAll(".nazad").forEach(e => {
    
e.addEventListener("click", ()=>{
    e.parentElement.style.display="none";
    document.querySelector(".main").style.display = "flex";
})
});