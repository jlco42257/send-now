const email = document.querySelector(".form__email");
const pass = document.querySelector(".form__pass");
const btn = document.querySelector(".form__btn");

btn.addEventListener("click", e=>{
    location.assign("signUp.php");
});

email.setAttribute("required",true);
pass.setAttribute("required",true);
