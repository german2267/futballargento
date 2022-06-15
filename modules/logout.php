<?php

//modulo de conexxion
include("../connection.php");
$con = conectame();

//continuamos la sesion
session_start();


//destruimos la sesion
session_destroy();


 ?>

<!--redirigimos al usuario al index.html -->
 <script type="text/javascript"> 
 	function back(){
 		window.location = "../index.html";
 	}
    
    back();
 </script>