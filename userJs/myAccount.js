const logOut = document.querySelector(".logOut__button");
const balance = document.querySelector(".form__balance");
const pass = document.querySelector(".form__pass");
const phone = document.querySelector(".form__phone");
const topUp = document.querySelector(".topUp__button");
const topUpForm = document.querySelector(".topUp__form");

logOut.addEventListener("click",e=>{
    location.assign("../php/logOut.php")});
    
topUp.addEventListener("click",e=>{
    topUpForm.classList.toggle("d-none"); 
    });

balance.setAttribute("required",true);
pass.setAttribute("required",true);
phone.setAttribute("required",true);