<?php
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

        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
            <div class="container">
                <a class="navbar-brand" href="../index.html">Fútbol Argento</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse flex-grow-0 ml-auto" id="navbarResponsive">
                    <ul class="navbar-nav">
                        <li class="nav-item"><a class="nav-link" href="../visualMods/visualRepre.php">Volver</a></li>
                        <!--<li class="nav-item"><a class="nav-link" href="../visualMods/visualRepre.php"><i class="fas fa-sign-out-alt"></i></a></li>-->
                        <!-- <li class="nav-item"><a class="nav-link" href="visualMods/galeria.html">Galeria</a></li> -->
                    </ul>
                </div>
            </div>
        </nav>

        <h1 class="text-center display-4 pb-5 mb-2 mt-5"  style="padding-top: 5rem;"><?php echo"Hola " . $_SESSION['nombre']; ?>, Aqui verás a tus prospectos de interés</h1>
     
        <div class="container mt-5">
            <div class="card mt-4">
                <div class="card-body">
            <table id="tablaClientes" class="table table-striped table-bordered" style="width:100%">
                 <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Provincia</th>
                        <th>Edad</th>
                        <th>Posicion</th>
                        <th>Video de jugada</th>
                        <th>Solicitar</th>
                    </tr>
                </thead>

                <tbody>
                    
                    <?php
                    //modulos de conexion
                    include("../connection.php");
                    $con = conectame();

                    //exlcuimos a los que aceptaron contrato
                    $sql = "SELECT * FROM postulantes WHERE representado != 'SI' ";
                    $sqlEX = mysqli_query($con, $sql);
                        if($sqlEX){
                        $rowSql = mysqli_fetch_array($sqlEX);

                        //calculo de edad por fechan
                        function calculaedad($fechanacimiento){
                          list($ano,$mes,$dia) = explode("-",$fechanacimiento);
                          $ano_diferencia  = date("Y") - $ano; //ññññ
                          $mes_diferencia = date("m") - $mes;
                          $dia_diferencia   = date("d") - $dia;
                          if ($dia_diferencia < 0 || $mes_diferencia < 0)
                            $ano_diferencia--;
                          return $ano_diferencia;
                                }

                             
                            //!calculo de edad por fechan

                        //dibujo de la tabla por 1 foreach

                        foreach ($sqlEX as $rowSql) {
                            // code...
                        echo "<tr>";


                        echo '<td> '. $rowSql['nombre'] .' </td>';
                        echo '<td> '. $rowSql['apellido'] .' </td>';
                        echo '<td> '. $rowSql['provincia'] .' </td>';
                        $edad =    calculaedad($rowSql['fechan']);
                        echo '<td> '. $edad .' </td>';
                        echo '<td> '. $rowSql['posicion'] .' </td>';
                        echo '<td><a href='. $rowSql['jugada'] .'>Ver</a></td>';


                        echo '<td>
                        <a id="edit" style = "height=9px; width=10px;"; href="../solicitudes/solicitudRep.php?id='. $rowSql["id"] .'">📩</a>

                      </td>';

                        echo "</tr>";

                                                    }

                                                }

                    //!dibujo de la tabla por 1 foreach

                     ?>  
                     
                </tbody>
            </table>

            
        </div>
    </div>
</div>
<!-- Footer-->
    <footer class="py-5 bg-black">
        <div class="container">
            <p class="m-0 text-center text-white small">Copyright &copy; Your Website 2022</p>
        </div>
    </footer>

    <script type="text/javascript">
    function volver(){
        window.location="../visualMods/visualRepre.php";
    }

</script>
    </body>

    </html>