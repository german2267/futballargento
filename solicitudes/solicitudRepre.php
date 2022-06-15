<?php
//enlace de conexion 
session_start();
include("../connection.php");
$con = conectame();

$id_rep = $_SESSION['id'];
$id_pos = $_GET['id'];
$query = "SELECT * FROM solicitudes WHERE id_pos = '$id_pos' AND id_rep = '$id_rep'";

$sql = mysqli_query($con, $query);

if (!$sql->num_rows > 0) {

$query = "INSERT INTO solicitudes (id_rep, id_pos) VALUES ('". $id_rep ."', '". $id_pos ."')";
	$sql = mysqli_query($con, $query);

	if ($sql) {
		echo '<script type="text/javascript">alert("¡Solicitud enviada!")</script>';

		echo "solicitud de representacion enviada<br>";

		echo "<a href=../dashboards/representados.php>home</a>";

	}
} 

else {
		echo '<script type="text/javascript">alert("¡Ya enviaste una solicitud de representacion a este jugador!")</script>';

		echo "<br>";

		echo "<a href=../dashboards/representados.php>home</a>";	
}

?>