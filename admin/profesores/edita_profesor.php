<?php
include('../conex.php');
$conex = mysqli_connect("myserveruni.mysql.database.azure.com", "agat@myserveruni", "Uni095359", "bd");
$id = $_POST['id'];
$valores = mysqli_query($conex, "SELECT * FROM profesor WHERE idProfesor = '$id'");
$valores2 = mysqli_fetch_array($valores);
$datos = array(
				 
				0 => $valores2['NombresProfesor'], 
			    1 => $valores2['ApellidosProfesor'], 
				2 => $valores2['CedulaProfesor'], 
				3 => $valores2['CorreoProfesor'], 
				4 => $valores2['CelularProfesor'], 
			    5 => $valores2['TelefonoProfesor'], 
				6 => $valores2['DireccionProfesor'],
				7 => $valores2['Estado'],
				); 
echo json_encode($datos);
?>