<?php
    
    include("../connection.php");
    include("../funciones/segUrl.php");
    error_reporting(0);
    $con = conectame();
    session_start();
    destroyPost();


    
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Fútbol Argento - Inicio</title>
          <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
            <div class="container justify-content-start">
                <a class="navbar-brand" href="../index.html">Fútbol Argento</a>
                <ul class="navbar-nav order-lg-1 ml-auto ml-lg-0">
                </ul>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse flex-grow-0 ml-auto" id="navbarResponsive">
                    <ul class="navbar-nav">
                        <li class="nav-item"><a class="nav-link" href="aceptarPatDash.php">Solicitudes de Patrocinio</a></li>
                        <li class="nav-item"><a class="nav-link" href="aceptarRepreDash.php">Solicitudes de Representacion</a></li>

                <!--logout -->
                    <div>
                        <form action="../modules/logout.php">
                        <button class="btn btn-dark" type="submit">
                            <img style="height: 40px; width: 40px;" src="../assets/img/logout.png">
                        </button>
                        </form>
                    </div>
                   
                    </ul>
                </div>
            </div>
        </nav>
        <div class="hero-image">
          <div class="hero-text">
          </div>
        </div>
    <!-- /Navbar -->
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

        </div>
    </header>
    <section>   
    </head>
    <body>

       <div class="mb-4"> 

    <!-- Footer-->
    <footer class="py-5 bg-black">
        <div class="container">
            <p class="m-0 text-center text-white small">Copyright &copy; Your Website 2022</p>
        </div>
    </footer>

        <!--datatables css & bootstrap 4.6.1 framework -->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />

        <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet" />

        <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet" />

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css"/>

        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4-4.6.0/jq-3.6.0/jszip-2.5.0/dt-1.11.5/b-2.2.2/b-colvis-2.2.2/b-html5-2.2.2/b-print-2.2.2/date-1.1.2/r-2.2.9/sb-1.3.2/datatables.min.css"/>

        <link rel="stylesheet" href="../css/styles.css">

        <!--datatables scripts -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/v/bs4-4.6.0/jq-3.6.0/jszip-2.5.0/dt-1.11.5/b-2.2.2/b-colvis-2.2.2/b-html5-2.2.2/b-print-2.2.2/date-1.1.2/r-2.2.9/sb-1.3.2/datatables.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>

        <script>
            $(document).ready(function() {
            $('#tablaClientes').DataTable({
                buttons: ['copy', 'excel', 'pdf'],

                "ordering": false,
                "language": {
                    "url": "https://cdn.datatables.net/plug-ins/1.11.5/i18n/es-ES.json"
                }

            });
        });   

        </script>

    