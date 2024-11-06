//preloader (para que "cargue la pantalla antes de enviar los datos")
window.addEventListener("load",() =>{
    setTimeout(function(){
        $('body').addClass('loaded');
    },200)
});

const miForm = document.querySelector("contact-form");
    miForm.addEventListener("submit", (e) => {
        e.preventDefault();

        let name = document.querySelector("name").value;
        let email = document.querySelector("email").value;
        let message = document.querySelector("message").value;

        console.log(name + ' - ' + email + ' - ' + message);

        if(name.length === '' || email.length <= 0 || message.length === ''){
            mensaje(tipoMensaje = 'CamposVacios');
            (email=='')? email.focus(): '';
            (name=='')? name.focus(): '';
            (message=='')? message.focus(): '';
            return;
        }

        btnEnviar.disabled = true; //desabilitamos el boton para que no se envien varias veces el dato
        btnEnviar.InnerHTML = "Enviando mi Form...";
        
        loader(true);

            axios({
                method: POST,
                url: "/PPP/html/contact.php",
                data:{
                    name: name,
                    email: email,
                    message: message
                },
                headers:{
                    "Content-Type": "multipart/form-data"
                },
            })

            .then((res))

    });