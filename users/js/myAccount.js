const logOut = document.querySelector(".logOut__button");
const balance = document.querySelector(".form__balance");
const pass = document.querySelector(".form__pass");
const phone = document.querySelector(".form__phone");
const topUp = document.querySelector(".topUp__button");
const topUpForm = document.querySelector(".topUp__form");
// log out if the button is pressed    //
logOut.addEventListener("click",e=>{
    if(confirm("estas seguro de cerrar sesión?")){
    location.assign("global/php/logOut.php")
    }
});
//    to display the form    //
topUp.addEventListener("click",e=>{
    topUpForm.classList.toggle("d-none"); 
    });
//    requesting the data    //
balance.setAttribute("required",true);
pass.setAttribute("required",true);
phone.setAttribute("required",true);
