<?php

session_start();

if (!isset($_SESSION['usuario'])) {
  echo '
  <script>
        alert("Por favor debes iniciar sesion");
        window.location = "index.php";
  </script>
  ';
  //header("location: index.php");
  session_destroy();
  die();
}
session_destroy();


?>



<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Virtual Software Chat Alfa 0.0.1</title>
</head>

<body>
  <header class="header" id="inicio">
    <img src="assets/images/bx-menu-alt-left.svg" alt="" class="Moon" />
    <nav class="nav menu-navegacion">
      <ul class="list">
        <li class="list__item">
          <div class="list__button">
            <img src="assets/images/inicio.svg" class="list__img" />
            <a href="#" class="nav__link">Inicio</a>
          </div>
        </li>

        <li class="list__item list__item--click">
          <div class="list__button list__button--click">
            <img src="assets/docs.svg" class="list__img" />
            <a href="#" class="nav__link">Servicios</a>
            <img src="assets/images/arrow.svg" class="list__arrow" />
          </div>

          <ul class="list__show">
            <li class="list__inside">
              <a href="#" class="nav__link nav__link--inside">Estoy dentro</a>
            </li>

            <li class="list__inside">
              <a href="#" class="nav__link nav__link--inside">Estoy dentro</a>
            </li>
          </ul>
        </li>

        <li class="list__item">
          <div class="list__button">
            <img src="assets/images/chat.svg" class="list__img" />
            <a href="#" class="nav__link">Mensajes</a>
          </div>
        </li>

        <li class="list__item list__item--click">
          <div class="list__button list__button--click">
            <img src="assets/images/bell.svg" class="list__img" />
            <a href="#" class="nav__link">Notificaciones</a>
            <img src="assets/images/arrow.svg" class="list__arrow" />
          </div>

          <ul class="list__show">
            <li class="list__inside">
              <a href="#" class="nav__link nav__link--inside">Estoy dentro</a>
            </li>

            <li class="list__inside">
              <a href="#" class="nav__link nav__link--inside">Estoy dentro</a>
            </li>

            <li class="list__inside">
              <a href="#" class="nav__link nav__link--inside">Estoy dentro</a>
            </li>
          </ul>
        </li>

        <li class="list__item">
          <div class="list__button">
            <img src="assets/images/message.svg" class="list__img" />
            <a href="#" class="nav__link">Contacto</a>
          </div>
        </li>
      </ul>
    </nav>
  </header>
  <a href="index.php">Cerrar Sesion</a>
  </body>

</html>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      background: #EAEBEF;
      font-family: 'Poppins', sans-serif;
    }

    .nav {
      width: 300px;
    }

    .nav__link {
      color: #303440;
      display: block;
      padding: 15px 0;
      text-decoration: none;
    }

    .nav__link--inside {
      border-radius: 6px;
      padding-left: 20px;
      text-align: left;
    }

    .nav__link--inside:hover {
      background: linear-gradient(to right top, #cf407e, #cc378d, #c6329e, #ba32b0, #a838c4, #9a40cf, #8848db, #7250e5, #6657ea, #5a5eee, #4b64f1, #396af4);
    }

    .list {
      width: 100%;
      height: 100vh;
      display: flex;
      justify-content: center;
      flex-direction: column;
      border-radius: 0 16px 16px 0;
      background: linear-gradient(to right bottom, #faa193, #f59197, #ec829e, #dd76a7, #c86eb2, #b362af, #9c58ad, #834faa, #6d3d9b, #562c8b, #3e1b7d, #23096e);
    }

    .list__item {
      list-style: none;
      width: 100%;
      text-align: center;
      overflow: hidden;
    }

    .list__item--click {
      cursor: pointer;
    }

    .list__button {
      display: flex;
      align-items: center;
      gap: 1em;
      width: 70%;
      margin: 0 auto;
    }

    .arrow .list__arrow {
      transform: rotate(90deg);
    }

    .list__arrow {
      margin-left: auto;
      transition: transform .3s;
    }

    .list__show {
      width: 80%;
      margin-left: auto;
      border-left: 2px solid #303440;
      list-style: none;
      transition: height .4s;
      height: 0;
    }

    .menu-navegacion {
      position: relative;
      transition: transform .3s ease-in-out;
      transform: translate(-230%);
    }

    .spread {
      transform: translate(0);
    }

    .menu-navegacion {
      color: white;
      text-decoration: none;
    }

    @media screen and (max-width:550px) {
      .nav {
        width: 100px;
      }

      .nav__link {
        display: none;
      }

      .lis_img {
        margin: 30px;
        padding: 30px;
      }
    }
  </style>
  <script>
    let listElements = document.querySelectorAll('.list__button--click');

    listElements.forEach(listElement => {
      listElement.addEventListener('click', () => {

        listElement.classList.toggle('arrow');

        let height = 0;
        let menu = listElement.nextElementSibling;
        if (menu.clientHeight == "0") {
          height = menu.scrollHeight;
        }

        menu.style.height = `${height}px`;

      })
    });
  </script>
  <script>
    const Moon = document.querySelector('.Moon');
    const Menu = document.querySelector('.menu-navegacion');
    //console.log(Menu)
    //console.log(Moon)

    Moon.addEventListener('click', () => {
      Menu.classList.toggle("spread")
    })
    /*window.addEventListener ('click' , e=>{
        if(Menu.classList.contains("spread")
            && e.target != Menu && e.target != Moon ){
                Menu.classList.toggle ("spread")

            }
    })*/
  </script>
  <script>
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

    function anchoPage() {

      if (window.innerWidth > 850) { //Si acortamos la pagina y esta es mayor a 850px
        caja_trasera_register.style.display = "block";
        caja_trasera_login.style.display = "block";
      } else { //Acortamos la pagina y esta es menor a 850px
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
    function iniciarSesion() {
      if (window.innerWidth > 850) { //si la pantalla tiene un mayor de 850px todo dentro del if se ejecuta
        formulario_login.style.display = "block";
        contenedor_login_register.style.left = "10px";
        formulario_register.style.display = "none";
        caja_trasera_register.style.opacity = "1"; //Aparece un texto por si no tenes cuenta
        caja_trasera_login.style.opacity = "0"; //Desaparece el texto de iniciar sesión
      } else { //Se ejecuta si la pantalla es menor a 850px
        formulario_login.style.display = "block";
        contenedor_login_register.style.left = "0px";
        formulario_register.style.display = "none";
        caja_trasera_register.style.display = "block";
        caja_trasera_login.style.display = "none";
      }
    }


    //La parte de register
    function register() {
      if (window.innerWidth > 850) { //si la pantalla tiene un mayor de 850px todo dentro del if se ejecuta
        formulario_register.style.display = "block";
        contenedor_login_register.style.left = "410px";
        formulario_login.style.display = "none";
        caja_trasera_register.style.opacity = "0"; //Cuando te registres se borra el texto
        caja_trasera_login.style.opacity = "1"; //Aparece un texto por si tenes cuenta
      } else { //Se ejecuta si la pantalla es menor a 850px
        formulario_register.style.display = "block";
        contenedor_login_register.style.left = "0px";
        formulario_login.style.display = "none";
        caja_trasera_register.style.display = "none";
        caja_trasera_login.style.display = "block";
        caja_trasera_login.style.opacity = "1";
      }
    }
  </script>
