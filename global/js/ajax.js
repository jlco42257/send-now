const formAjax=document.querySelectorAll(".formAjax");

function sendFormAjax(e){
    e.preventDefault();
    let send=confirm("Do you wanna send this?");
    if(send==true){
        let data= new FormData(this);
        let method=this.getAttribute("method");
        let action=this.getAttribute("action");
        let headers= new Headers();
        let config={
            method: method,
            headers: headers,
            mode: 'cors',
            cache: 'no-cache',
            body: data
        };
        fetch(action,config)
        .then(rest => rest.text())
        .then(rest =>{ 
            let container=document.querySelector(".formRest");
            container.innerHTML = rest;
        });
    }
}
formAjax.forEach(forms => {
    forms.addEventListener("submit",sendFormAjax);
});