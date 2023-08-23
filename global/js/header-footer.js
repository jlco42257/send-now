const search = document.querySelector(".nav__form--button");
const input = document.querySelector(".nav__form--input");
const footer = document.querySelector(".footer");

search.addEventListener("click",e=>{
    e.preventDefault();
});

footer.innerHTML='<p>info@sendnow.com</p><p>+1 (800) 123-4567</p><p>1234 Main Street, Sendnow City, Shipment Status</p>';