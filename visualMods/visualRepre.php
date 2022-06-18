<?php
    
    include("../connection.php");
    include("../funciones/segUrl.php");
    error_reporting(0);
    $con = conectame();
    session_start();
    destroyRepre();
    
?>


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
        <link rel="stylesheet" href="../css/styles.css">
    </head>
    <body>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
            <div class="container justify-content-start">
                <a class="navbar-brand" href="../index.html">Fútbol Argento</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse flex-grow-0 ml-auto" id="navbarResponsive">
                    <ul class="navbar-nav">
                        <li class="nav-item"><a class="nav-link" href="equipos.html">Equipos</a></li>
                        <li class="nav-item"><a class="nav-link" href="galeria.html">Galeria</a></li>
                    </ul>

                    <!--logout -->
                    <div>
                        <form action="../modules/logout.php">
                        <button class="btn btn-dark" type="submit">
                            <img style="height: 40px; width: 40px;" src="../assets/img/logout.png">
                        </button>
                        </form>
                    </div>
                    <!--!logout -->

                </div>
            </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        </nav>

        <header class="masthead text-center text-white">
            <div class="masthead-content">
                <div class="container">
                    <h1 class="masthead-heading mb-0">

                    <?php
                    // include("../connection.php");
                    // $con = conectame();

                    // session_start();

                    $_SESSION['id_session'] = session_id();

                    if(isset($_SESSION['nombre'])){
                        echo "Bienvenido " .$_SESSION['nombre']. "!";

                    }
                    else{
                        echo "Unloged!";

                        header("location:../index.html");
                    }

                    

                     ?>
                    

                    </h1>
                    <hr class="bg-white" style="border-width: 2px;">
                    <h2 class="masthead-subheading mb-0 font-italic">"Aqui podras ver tus Postulantes"</h2>
                    <button class="btn btn-primary btn-xl rounded-pill mt-5" onclick="document.getElementById('inicioDiv').scrollIntoView();">Comenzar</button>
                </div>
            </div>
        </header>
        <section>
            <div class="container" id="inicioDiv">
                <div class="row align-items-center">
                    <div class="col-lg-6 order-lg-2 text-center">
                        <div class="p-5"><img class="img-fluid rounded-circle round-width" src="../assets/img/representante.jpg" alt="..." /></div>
                    </div>
                    <div class="col-lg-6 order-lg-1">
                        <div class="p-5">
                            <h2 class="display-4 text-center">Por qué ser Representante?</h2>
                            <p class="text-justify">
                                Lo que esta en tus manos es su futuro y sus sueños y tambien es tu oportunidad de cumplirlas o abrir las puertas para mas gente con mas experiencia o la que creas indicada y si algun jugador de futbol le debe la fama a alguien es vos representante ya que vos le diste su primera oportunidad de ser alguien...
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="container">
                <div class="row align-items-center text-center">
                    <div class="col-lg-6">
                        <div class="p-5"><img class="img-fluid rounded-circle round-width" src="../assets/img/02.jpg" alt="..." /></div>
                    </div>
                    <div class="col-lg-6">
                        <div class="p-5">
                            <h2 class="display-4">Equipos</h2>
                            <p class="text-justify">
                                Contamos con una variada selección de equipos profesionales, al igual que diversos equipos regionales del partido de La Costa, donde podrás ingresar y clasificar por un lugar dentro de los clubes listados.
                            </p>

                            <!--boton para ver a los postulantes de interes -->
                            <a href="../dashboards/representados.php" class="btn btn-primary btn-lg rounded-pill px-4 py-3">Ver Post</a>
                            <br>
                            <br>

                            <!--boton para ver lista de postulantes que aceptaron solicitud de patrocinio -->
                            <a href="../dashboards/misRepresentados.php" class="btn btn-primary btn-lg rounded-pill px-4 py-3">Ver mis representados</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 order-lg-2 text-center">
                        <div class="p-5"><img class="img-fluid rounded-circle round-width" src="../assets/img/03.jpg" alt="..." /></div>
                    </div>
                    <div class="col-lg-6 order-lg-1">
                        <div class="p-5">
                            <h2 class="display-4">¿Por qué elegir Fútbol Argento?</h2>
                            <p class="text-justify">Incluso los más grandes empiezan desde lo más bajo y no tienen su futuro asegurado, empezando tal vez como una simple reserva o suplente, pero como dijo Messi una vez: "Tenes que luchar por tus sueños y vas a tener que sacrificarte y trabajar duro por el" demostrando que cualquiera, aunque ni siquiera sepa jugar futbol, o manejar una pelota en su total maestría, con trabajo duro, voluntad y sacrificio podés lograrlo ya que todos confían en vos, porque cargas con todas sus fuerzas en lograrlo...</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Footer-->
        <footer class="py-5 bg-black">
            <div class="container"><p class="m-0 text-center text-white small">Copyright &copy; Your Website 2022</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
        
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
        
        <script src="js/scripts.js"></script>
    </body>
    </html>