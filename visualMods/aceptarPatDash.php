<?php include("../connection.php");
                
                session_start();
                // error_reporting(0);
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
                  <!--back -->
                 <div>
                        
                        <button class="btn btn-dark" type="button" onclick="volver();">
                            <img style="height: 40px; width: 40px; border-radius: 7px;" src="../assets/img/logout.png">
                        </button>
                        
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
    <!--no se como hacer para que el nav se espacie de las tablas -->


	<div class="card mt-4" >
            <div class="card-body">
	<?php
				

                $id_pos = $_SESSION['id'];

                $query = "SELECT * FROM amigos WHERE id_pos = '$id_pos'";

                $sql = mysqli_query($con, $query);

                

                //estructura de la tabla
                if(!$sql->num_rows > 0){
                    echo '<div class="card mt-4">';
                        echo '<div class="card-body">';

	                echo '<table id="tablaClientes" class="table table-striped table-bordered" style="width:100%">
	                <thead>
	                    <tr>
	                        <th>Nombre</th>
	                        <th>Apellido</th>
	                        <th>Entidad Social</th>
	                        <th>Aceptar Patrocinio</th>
	                    </tr>
	                </thead>
	                <tbody>';

	             //!estructura de la tabla
                $sql6 = "SELECT * FROM solicitudes WHERE id_pos = '$id_pos'";

                        $sqlEX6 = mysqli_query($con, $sql6);

                            

                                $rowSql6 = mysqli_fetch_array($sqlEX6);

                                $id_pat = $rowSql6['id_pat'];
                                // echo $id_pat;


                                foreach ($sqlEX6 as $rowSql6){

                                    $sql2 = "SELECT * FROM patrocinadores WHERE id = '$id_pat'";

                                    $sqlEX2 = mysqli_query($con, $sql2);

                                    $rowSql2 = mysqli_fetch_array($sqlEX2);


                                    foreach ($sqlEX2 as $rowSql2) {
			                        echo "<tr>";
			                        echo '<td> '. $rowSql2['nombre'] .' </td>';
			                        echo '<td> '. $rowSql2['apellido'] .' </td>';
			                        echo '<td> '. $rowSql2['ent_soc'] .' </td>';
			                        echo '<td>
			                        <a id="edit" style = "height=9px; width=10px;"; href="../solicitudes/aceptarSolicitudPos.php?id='. $rowSql2["id"] .'">📩</a>
			                        </td>';
			                        echo "</tr>";
		                            }
		                        }
                            
                            echo   '</tbody>
                        </table>';

                        // echo '</div>';
                        // echo '</div>';

                        }
		        			
		        		
                    
                        
                    


                             // mis patrocinadores tabla
            echo '<table id="tablaClientes" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Entidad Social</th>
                        </tr>
                    </thead>
                    <tbody>';

            $sql = "SELECT * FROM amigos WHERE id_pos = '$id_pos'";

            $sqlEX = mysqli_query($con, $sql);

                if($sqlEX){

                    $rowSql = mysqli_fetch_array($sqlEX);

                    //dibujo de la tabla por dos foreach

                        foreach($sqlEX as $rowSql){

                            $id_pat = $rowSql['id_pat'];

                            $sql3 = "SELECT * FROM patrocinadores WHERE id = '$id_pat'";

                            $sqlEX3 = mysqli_query($con, $sql3);

                                if($sqlEX3){

                                    $rowSql3 = mysqli_fetch_array($sqlEX3);

                                    foreach($sqlEX3 as $rowSql3){

                                        echo "<tr>";
                                    echo '<td> '. $rowSql3['nombre'] .' </td>';
                                    echo '<td> '. $rowSql3['apellido'] .' </td>';
                                    echo '<td> '. $rowSql3['ent_soc'] .' </td>';
                                    echo "</tr>";


                                    }
                                }




                        }
 
                    

                    

                    

                    
                }
                        echo   '</tbody>
                        </table>'
                                    ;

                    //dibujo de la tabla por dos foreach
        

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



