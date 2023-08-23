//Ejecutando funciones
//Esto sirve para cuando le des al boton iniciar sesión
document.getElementById("btn__iniciar-sesion").addEventListener("click", iniciarSesion);
//Esto sirve para cuando le des al boton de registrarse
document.getElementById("btn__registrarse").addEventListener("click", register);
window.addEventListener("resize", anchoPage);

//Declarando variables
var formulario_login = document.querySelector(".formulario__login");
var formulario_register = document.querySelector(".formulario__register");
var contenedor_login_register = document.querySelector(".contenedor__login-register");
var caja_trasera_login = document.querySelector(".caja__trasera-login");
var caja_trasera_register = document.querySelector(".caja__trasera-register");

    //FUNCIONES

function anchoPage(){

    if (window.innerWidth > 850){//Si acortamos la pagina y esta es mayor a 850px
        caja_trasera_register.style.display = "block";
        caja_trasera_login.style.display = "block";
    }else{//Acortamos la pagina y esta es menor a 850px
        caja_trasera_register.style.display = "block";
        caja_trasera_register.style.opacity = "1";
        caja_trasera_login.style.display = "none";
        formulario_login.style.display = "block";
        contenedor_login_register.style.left = "0px";
        formulario_register.style.display = "none";   
    }
}

anchoPage();

//La parte de iniciar sesión
    function iniciarSesion(){
        if (window.innerWidth > 850){//si la pantalla tiene un mayor de 850px todo dentro del if se ejecuta
            formulario_login.style.display = "block";
            contenedor_login_register.style.left = "10px";
            formulario_register.style.display = "none";
            caja_trasera_register.style.opacity = "1";//Aparece un texto por si no tenes cuenta
            caja_trasera_login.style.opacity = "0";//Desaparece el texto de iniciar sesión
        }else{//Se ejecuta si la pantalla es menor a 850px
            formulario_login.style.display = "block";
            contenedor_login_register.style.left = "0px";
            formulario_register.style.display = "none";
            caja_trasera_register.style.display = "block";
            caja_trasera_login.style.display = "none";
        }
    }


    //La parte de register
    function register(){
        if (window.innerWidth > 850){//si la pantalla tiene un mayor de 850px todo dentro del if se ejecuta
            formulario_register.style.display = "block";
            contenedor_login_register.style.left = "410px";
            formulario_login.style.display = "none";
            caja_trasera_register.style.opacity = "0";//Cuando te registres se borra el texto
            caja_trasera_login.style.opacity = "1";//Aparece un texto por si tenes cuenta
        }else{//Se ejecuta si la pantalla es menor a 850px
            formulario_register.style.display = "block";
            contenedor_login_register.style.left = "0px";
            formulario_login.style.display = "none";
            caja_trasera_register.style.display = "none";
            caja_trasera_login.style.display = "block";
            caja_trasera_login.style.opacity = "1";
        }
}