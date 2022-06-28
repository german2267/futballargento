<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

    <title>Futbol</title>
  </head>
  <body>
  <!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Fútbol Argento - Inicio</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
        <link rel="stylesheet" href="css/styles.css">
    </head>
    <body class="bg-light">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
            <div class="container">
                <a class="navbar-brand" href="index.html">Fútbol Argento</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse flex-grow-0 ml-auto" id="navbarResponsive">
                    <ul class="navbar-nav">
                        <li class="nav-item"><a class="nav-link" href="equipos.html">Equipos</a></li>
                        <li class="nav-item"><a class="nav-link active" href="login.php">Ingresar</a></li>

                        <!-- <li class="nav-item"><a class="nav-link" href="visualMods/galeria.html">Galeria</a></li> -->
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Login -->
        <div class="container bg-white p-2 needs-validation registro" style="border: 1px solid #d0d0d0; max-width: 500px; height: 360px; margin-top: 100px;" novalidate>
            <h4 class="text-center my-4">Iniciar Sesión</h4>
            <!--form -->
            <form method="POST" action="modules/logMod.php" class="mx-2">
                <div class="form-group">
                    <label for="loginEmail">Correo Electronico</label>
                    <input type="email" name="email_login" class="form-control" id="loginEmail" aria-describedby="emailHelp" required>
                </div>
                <div class="form-group">
                    <label for="loginPass">Contraseña</label>
                    <input type="password" name="password_login" class="form-control" id="loginPass" required>
                </div>
                <button type="submit" name="login" value="login" class="btn btn-primary rounded-pill">Ingresar</button>
                <a class="text-primary ml-2 d-inline link pointer">No tengo cuenta</a>

                <a class="text-primary ml-2 d-inline" href="visualMods/recuperarCuenta.php">Olvidaste tu contraseña?</a>

            </form>
            <!--!form -->
        </div>
        <!-- /Login -->
        <!-- Registro -->

        <div class="container bg-white p-2 needs-validation logueo" style="border: 1px solid #d0d0d0; max-width: 500px; height: 360px; margin-top: 100px;">
            <button class="btn btn-primary linkSalir"><i class="fas fa-reply"></i></button>
            <hr>
            <a href="visualMods/regPost.php" class="d-block">Quiero registrarme como postulante</a>
            <hr>
            <a href="visualMods/regPat.php" class="d-block">Quiero registrarme como patrocinador</a>
            <hr>
            <a href="visualMods/regRepre.php" class="d-block">Quiero registrarme como representante</a>
            <hr>
        </div>
        <!-- /Registro -->
        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js" integrity="sha512-Tn2m0TIpgVyTzzvmxLNuqbSJH3JP8jm+Cy3hvHrW7ndTDcJ1w5mBiksqDBb8GpE2ksktFvDB/ykZ0mDpsZj20w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
        
        <!-- Core theme JS-->
        <script type="text/javascript">
            var aObjects = document.getElementById("bar").getElementsByTagName("a");

            for (var i = 0; i < aObjects.length; i++) {
                if (document.location.href.indexOf(aObjects[i].href) >= 0) {
                    aObjects[i].className += " active";
                }
            }
        </script>
        <script type="text/javascript">
            $(document).ready(function() {
                $(".logueo").hide();
            });

            $(".link").click(function(){
                $(".registro").hide();
                $(".logueo").show();
            });

            $(".linkSalir").click(function(){
                $(".registro").show();
                $(".logueo").hide();
            });
        </script>
    </body>
</html>