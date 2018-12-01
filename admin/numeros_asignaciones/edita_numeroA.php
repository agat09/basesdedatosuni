<?php
include('../conex.php');
$conex = mysqli_connect("myserveruni.mysql.database.azure.com", "agat@myserveruni", "Uni095359", "bd");
$id = $_POST['id'];
$valores = mysqli_query($conex,"SELECT * FROM numeros_asignaciones WHERE idNumeroAsignacion = '$id'");
$valores2 = mysqli_fetch_array($valores);
$datos = array(
				0 => $valores2['numeroAsignado'], 
				1 => $valores2['IdProfesor'], 
				); 

echo json_encode($datos);
?>