const email = document.querySelector(".form__email");
const pass = document.querySelector(".form__pass");
const btn = document.querySelector(".form__btn");

btn.addEventListener("click", e=>{
    location.assign("?page=signUp");
});

email.setAttribute("required",true);
pass.setAttribute("required",true);
