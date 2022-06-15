<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!--sweet alert cdn -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <title>Alta Patrocinador</title>
  </head>
  <body>
    

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>

<?php
session_start();
include("../connection.php");
$con = conectame();
//tomamos las variables session y form

$id_rep = $_SESSION['id'];
$id_pos = $_GET['id'];

//seleccionamos la fila a encontrar con las variables tomadas
$query = "SELECT * FROM solicitudRep WHERE id_pos = '$id_pos' AND id_rep = '$id_rep'";

$sql = mysqli_query($con, $query);

if (!$sql->num_rows > 0) {

//si no se encuentra ninguna ya existente, se insert adentro de la tabla
$query = "INSERT INTO solicitudRep (id_rep, id_pos) VALUES ('". $id_rep ."', '". $id_pos ."')";

	$sql = mysqli_query($con, $query);

	if ($sql) {

		echo '<script type="text/javascript">swal({
                                title: "Se envio una solicitud de representacion al jugador!⚽",
                                text: "",
                                icon: "success"
                            }).then(function(){
                              window.location="../dashboards/representados.php";
                              });</script>';

		

	}
} else {

		//sino, se notifica que ya existe una fila con esos valores
		echo '<script type="text/javascript">swal({
                                title: "Ya enviaste una solicitud a este jugador",
                                text: "",
                                icon: "warning"
                            }).then(function(){
                              window.location="../dashboards/representados.php";
                              });</script>';

			
}

?>