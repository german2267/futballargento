<?php
    
    include("../connection.php");
    include("../funciones/segUrl.php");
    error_reporting(0);
    $con = conectame();
    session_start();
    destroyPat();

   
    
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
                <ul class="navbar-nav order-lg-1 ml-auto ml-lg-0">
                </ul>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse flex-grow-0 ml-auto" id="navbarResponsive">
                    <ul class="navbar-nav">
                        <!--dashboard de patrocinados -->
                        <li class="nav-item"><a class="nav-link" href="#">Patrocinados</a></li>
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
<!--!navbar -->

        <header class="masthead text-center text-white">
            <div class="masthead-content">
                <div class="container">
                    <h1 class="masthead-heading mb-0">

                    <?php
        
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
                    <h2 class="masthead-subheading mb-0 font-italic">"Aqui podras ver tus Patrocinados"</h2>
                    <button class="btn btn-primary btn-xl rounded-pill mt-5" onclick="document.getElementById('inicioDiv').scrollIntoView();">Comenzar</button>
                </div>
            </div>
        </header>
        <section>
            <div class="container" id="inicioDiv">
                <div class="row align-items-center">
                    <div class="col-lg-6 order-lg-2 text-center">
                        <div class="p-5"><img class="img-fluid rounded-circle round-width" src="../assets/img/patrocinador.jpg" alt="..." /></div>
                    </div>
                    <div class="col-lg-6 order-lg-1">
                        <div class="p-5">
                            <h2 class="display-4 text-center">¿Por qué ser un patrocinador?</h2>
                            <p class="text-justify">
                                Se que usted que esta leyendo esto ahora mismo, desde la comodidad de su casa o trabajo sea donde lo este leyendo yo, se que siempre quisiste ayudar a alguien por conseguir lo que ansia con su vida o con su corazon que es llegar a ser un ocupante, un jugador en algunos de los equipos mas prestigiosos pero nunca lo hiciste por que no tenias un medio, pero nosotros estamos aca para apoyarte en esas decisiones y puedas cumplirlo, ayudar a esa persona a cumplirlo y que sea gracias a tu esfuerzo y confianza en el...<?php echo $_SESSION['id'] ?>
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
                        <div class="p-5"><img class="img-fluid rounded-circle round-width" src="https://media.istockphoto.com/photos/seven-a-side-football-team-cheering-with-ball-in-the-air-picture-id963295624?k=20&m=963295624&s=612x612&w=0&h=jC5tHo6xbXLvRZ3SfPzWeL9loq0yAucMUmJip7ftYkU=" alt="..." /></div>
                    </div>
                    <div class="col-lg-6">
                        <div class="p-5">
                            <h2 class="display-4">Lista de posibles patrocinados</h2>
                            <p class="text-justify">
                                Esta es una lista de posibles jugadores que pueden llegar a ser de su interés, si le gusta algún jugador para patrocinar, solo enviele una solicitud de patrocinio
                            </p>

                            <!--redireccion a dashboard patrocinador -->
                            <a href="../dashboards/patrocinados.php" class="btn btn-primary btn-lg rounded-pill px-4 py-3">Ver prospectos</a>
                            <br>
                            <br>
                            <!--redireccion a "ver mis patrocinados"- -->
                            <a href="../dashboards/misPatrocinados.php" class="btn btn-primary btn-lg rounded-pill px-4 py-3">Ver mis patrocinados</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 order-lg-2 text-center">
                        <div class="p-5"><img class="img-fluid rounded-circle round-width" src="../assets/img/maradona.jpg" alt="..." /></div>
                    </div>
                    <div class="col-lg-6 order-lg-1">
                        <div class="p-5">
                            <h2 class="display-4">¿Por qué ser un patrocinador?</h2>
                            <p class="text-justify">Se que usted que esta leyendo esto ahora mismo, desde la comodidad de su casa o trabajo sea donde lo este leyendo yo, se que siempre quisiste ayudar a alguien por conseguir lo que ansia con su vida o con su corazon que es llegar a ser un ocupante, un jugador en algunos de los equipos mas prestigiosos pero nunca lo hiciste por que no tenias un medio, pero nosotros estamos aca para apoyarte en esas decisiones y puedas cumplirlo, ayudar a esa persona a cumplirlo y que sea gracias a tu esfuerzo y confianza en el...</p>
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