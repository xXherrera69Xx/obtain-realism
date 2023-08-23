<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Scaloneta</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/icono.png" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="estilos/estilohome.css" rel="stylesheet" />
    </head>
    <body>
        <!-- Responsive navbar-->
        <?php
        include "navbar.php";
        
        ?>
        <!-- Header - set the background image for the header in the line below-->
        <header  class="py-5 bg-image-full" >
            <div class="text-center my-5">
            </div>
        </header>
        <!-- Content section-->
        <section  class="py-5">
            <div  class="container my-5">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <h2><b>Pagina de la Scaloneta</b></h2>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Tienda</h5>
                  <p class="card-text">Acá podras comprar remeras, pantalones y mas de la seleccion Argentina.</p>
                  <a href="Tienda.php"><button type="button"  class="btn btn-primary">Botón</button></a>
                </div>
                <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Plantel</h5>
                  <p class="card-text">Acá podras ver informacion sobre los jugadores y el cuerpo tecnico de la selección.</p>
                  <a href="plantel.php"><button type="button"  class="btn btn-primary">Botón</button></a>
                </div>
              </div><div class="card">
                <div class="card-body">
                  <h5 class="card-title">Historia</h5>
                  <p class="card-text">En esta sección podras ver informacion relacionada a la historia de la Scaloneta.</p>
                  <a href="historia.php"><button type="button" class="btn btn-primary">Botón</button> </a>
                </div>
              </div><div class="card">
                <div class="card-body">
                  <h5 class="card-title">Sobre Nosotros</h5>
                  <p class="card-text">En este apartado te contamos un poco Sobre Nosotros.</p>
                  <button type="button" class="btn btn-primary">Botón</button>
                </div>
              </div><div class="card">
                <div class="card-body">
                  <h5 class="card-title">Registrate</h5>
                  <p class="card-text">Aca podras registrar tu cuenta.</p>
                  <a href="registrarse.php"><button type="button" class="btn btn-primary">Botón</button></a>
                </div>
              </div><div class="card">
                <div class="card-body">
                  <h5 class="card-title">Inicia Sesion</h5>
                  <p class="card-text">Iniciar sesion en tu cuenta.</p>
                  <a href="inicio_de_sesion.php"><button type="button" class="btn btn-primary">Botón</button></a>
                </div>
              </div>
        </section>
        <footer class="container py-5">
  <div class="row">
    <div class="col-12 col-md">
      <small class="d-block mb-3 text-body-secondary">&copy; Fuchi Company 2023–∞</small>

</footer>
    </body>
</html>
