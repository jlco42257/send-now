const name = document.getElementById("name");
const lastName = document.getElementById("lastName");
const userName = document.getElementById("userName");
const phone = document.getElementById("phone");
const email = document.getElementById("email");
const pass = document.getElementById("pass");
const confirmPass = document.getElementById("confirmPass");
const btn = document.querySelector(".form__btn");

email.setAttribute("required",true);
email.setAttribute("required",true);
email.setAttribute("required",true);
email.setAttribute("required",true);
email.setAttribute("required",true);
email.setAttribute("required",true);
email.setAttribute("required",true);

btn.addEventListener("click", e=>{
    location.assign("signIn.php");
});
