<?php include ('conex.php'); 
session_start();
$codigo = $_SESSION["Codigo"];
$conex = mysqli_connect("myserveruni.mysql.database.azure.com", "agat@myserveruni", "Uni095359", "bd",3306);

$rutaservidor='images/fotos_perfil';
$rutatemporal=$_FILES['foto']['tmp_name'];
$nombrefoto=$_FILES['foto']['name'];
 $tipo = $_FILES['foto']['type'];
$rutadestino=$rutaservidor.'/'.$nombrefoto;
move_uploaded_file($rutatemporal, $rutadestino);

 if (($tipo == "image/jpeg") || ($tipo == "image/png") || ($tipo == "image/jpg")) 
     {  
		$sql="UPDATE usuarios SET Foto = '$rutadestino' where Codigo = '$codigo'";
		$res=mysqli_query($conex,$sql);
		if($res){ 
		 echo '<script> alert("Se ha actualizado su Foto.");</script>';
		 echo '<script> window.location="paneladmin.php"; </script>';			
		}
		else {
		 echo '<script> alert("Error al actualizar su Foto.");</script>';
		 echo '<script> window.location="paneladmin.php"; </script>';
			 }

    }
    
	else{
		 echo '<script> alert("Solo se permiten imagenes de Tipo PNG y JPG.");</script>';
		 echo '<script> window.location="paneladmin.php"; </script>';
	     }



?>
