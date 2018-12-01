<?php
include('../conex.php');
$conex = mysqli_connect("myserveruni.mysql.database.azure.com", "agat@myserveruni", "Uni095359", "bd");
$id = $_POST['id'];
$valores = mysqli_query($conex, "SELECT * FROM asignaturas WHERE idAsignatura = '$id'");
$valores2 = mysqli_fetch_array($valores);
$datos = array(
				0=> $valores2['NombreAsignatura'], 
				); 

echo json_encode($datos);
?>