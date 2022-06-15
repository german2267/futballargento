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
    <div class="container mt-5">
      <?php
        include("../connection.php");
                $con = conectame();
                session_start();
                error_reporting(0);

                $id_rep = $_SESSION['id'];
                
                //estructura de la tabla
                //if($sql->num_rows > 0){
                    echo '<table id="tablaClientes" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Provincia</th>
                            <th>Edad</th>
                            <th>Posición</th>
                            <th>Jugada</th>
                        </tr>
                    </thead>
                    <tbody>';

                 //!estructura de la tabla

                    //dibujo de la tabla con dos foreach

                        $sql = "SELECT * FROM postrepresentados WHERE id_rep = '$id_rep'";
                        $sqlEX = mysqli_query($con, $sql);

                            if($sqlEX){

                                $rowSql = mysqli_fetch_array($sqlEX);

                                function calculaedad($fechanacimiento){
                                list($ano,$mes,$dia) = explode("-",$fechanacimiento);
                                $ano_diferencia  = date("Y") - $ano; 
                                $mes_diferencia = date("m") - $mes;
                                $dia_diferencia   = date("d") - $dia;
                                if ($dia_diferencia < 0 || $mes_diferencia < 0)
                                $ano_diferencia--;
                                return $ano_diferencia;
                            }


                                foreach ($sqlEX as $rowSql){

                                    $id_pos = $rowSql['id_pos'];

                                    $sql2 = "SELECT * FROM postulantes WHERE id = '$id_pos'";

                                    $sqlEX2 = mysqli_query($con, $sql2);

                                    $rowSql2 = mysqli_fetch_array($sqlEX2);

                                    foreach ($sqlEX2 as $rowSql2) {
                                    echo "<tr>";
                                    echo '<td> '. $rowSql2['nombre'] .' </td>';
                                    echo '<td> '. $rowSql2['apellido'] .' </td>';
                                    echo '<td> '. $rowSql2['provincia'] .' </td>';
                                    $edad =    calculaedad($rowSql2['fechan']);
                                    echo '<td> '. $edad .' </td>';
                                    echo '<td> '. $rowSql2['posicion'] .' </td>';
                                    echo '<td><a href='. $rowSql2['jugada'] .'>Ver</a></td>';
                                    echo "</tr>";
                                    }
                                }
                            

                        echo '</thead>
                              </tbody>
                        ';






                                }
                //!dibujo de la tabla con dos foreach

      ?>


    </div>

    </body>

    </html>
