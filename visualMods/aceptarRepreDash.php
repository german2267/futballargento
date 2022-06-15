<?php
//enlaces de conexion
                include("../connection.php");
                $con = conectame();
                session_start();

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Fútbol Argento - Inicio</title>

        <!--datatables css & bootstrap 4.6.1 framework -->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />

        <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet" />

        <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet" />

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css"/>

        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4-4.6.0/jq-3.6.0/jszip-2.5.0/dt-1.11.5/b-2.2.2/b-colvis-2.2.2/b-html5-2.2.2/b-print-2.2.2/date-1.1.2/r-2.2.9/sb-1.3.2/datatables.min.css"/>

        <link rel="stylesheet" href="css/styles.css">

        <!--datatables scripts -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/v/bs4-4.6.0/jq-3.6.0/jszip-2.5.0/dt-1.11.5/b-2.2.2/b-colvis-2.2.2/b-html5-2.2.2/b-print-2.2.2/date-1.1.2/r-2.2.9/sb-1.3.2/datatables.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>

        <!-- Google fonts-->
            <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet" />
            <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet" />
            <!-- Core theme CSS (includes Bootstrap)-->
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
            <link rel="stylesheet" href="../css/styles.css">

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

    </head>

    




<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
            <div class="container justify-content-start">
                <a class="navbar-brand" href="../index.html">Fútbol Argento</a>
                <ul class="navbar-nav order-lg-1 ml-auto ml-lg-0">
                </ul>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse flex-grow-0 ml-auto" id="navbarResponsive">
                    <ul class="navbar-nav">
        
                       <!--back -->
                 <div>
                        
                        <button class="btn btn-dark" type="button" onclick="volver();">
                            <img style="height: 40px; width: 40px; border-radius: 7px;" src="../assets/img/logout.png">
                        </button>
                        
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
    <br>
    <br>
    <br>
    <br>
    <br>
    <!--no se como hacer para que el nav se espacie de las tablas -->

<div class="card">
        <div class="card-body">
<?php

                
                error_reporting(0);

                $id_pos = $_SESSION['id'];


                $query = "SELECT * FROM postrepresentados WHERE id_pos = '$id_pos'";

                $sql = mysqli_query($con, $query);
                
                if(!$sql->num_rows > 0){
                    //dibujo estructura de la tabla de solicitudes
                   //container
                    echo '<div class="card">';
                        echo '<div class="card-body">';
                   //tabla
                    echo '<table id="tablaClientes" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Club</th>
                            <th>Aceptar Representación</th>
                        </tr>
                    </thead>
                    <tbody>';
                    //!dibujo de estructura 

                    //dibujo de foreach
                        $sql = "SELECT * FROM solicitudRep WHERE id_pos = '$id_pos'";

                        $sqlEX = mysqli_query($con, $sql);

                            if($sqlEX){

                                $rowSql = mysqli_fetch_array($sqlEX);

                                    foreach($sqlEX as $rowSql){
                                        $id_rep = $rowSql['id_rep'];

                                        $sql = "SELECT * FROM representantes WHERE id = '$id_rep'";

                                        $sqlEX = mysqli_query($con, $sql);

                                        if($sqlEX){

                                            $rowSql = mysqli_fetch_array($sqlEX);

                                            foreach($sqlEX as $rowSql){

                                                    echo "<tr>";
                                                    echo '<td> '. $rowSql['nombre'] .' </td>';
                                                    echo '<td> '. $rowSql['apellido'] .' </td>';
                                                    echo '<td> '. $rowSql['club_rep'] .' </td>';
                                                    echo '<td>
                                                    <a id="edit" style = "height=9px; width=10px;"; href="../solicitudes/aceptarSolicitudRep.php?id='. $rowSql["id"] .'">📩</a>
                                                    </td>';
                                                    echo "</tr>";

                                            }




                                        }

                                    }
                                //     echo '</tbody>';

                                // echo '</table>';

                            echo '</div>';

                        echo '</div>';


                            }
                        }

                        //mis patrocinadores

                        echo '<h1 class="text-center display-4 pb-5 mb-2 mt-4"  style="padding-top: 5rem;">Hola '. $_SESSION['nombre'] .', Estas son tus solicitudes de representacion</h1>';

                     //dibujo de representante aceptados   
                    $sql = "SELECT * FROM postrepresentados WHERE id_pos = '$id_pos'";

                    $sqlEX = mysqli_query($con, $sql);

                    if($sqlEX){

                        $rowSql = mysqli_fetch_array($sqlEX);

                        $id_rep = $rowSql['id_rep'];

                        $sql = "SELECT * FROM representantes WHERE id = '$id_rep'";
                        $sqlEX = mysqli_query($con, $sql);
                        if($sqlEX){
                            $rowSql = mysqli_fetch_array($sqlEX);


                            echo '<h2>MI REPRESENTANTE</h2>';
                            echo '<h3>Nombre: '. $rowSql['nombre'] .'</h3>';
                            echo '<h3>Apellido: '. $rowSql['apellido'] .'</h3>';
                            echo '<h3>Club Representante: '. $rowSql['club_rep'] .'</h3>';
                        }
                    }
            ?>
</div>
</div>
<script type="text/javascript">
    function volver(){
        window.location="visualPost.php";
    }

</script>
</body>
</html>