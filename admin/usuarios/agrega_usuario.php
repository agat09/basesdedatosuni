<?php
include('../conex.php');
$conex = mysqli_connect("myserveruni.mysql.database.azure.com", "agat@myserveruni", "Uni095359", "bd");

$id = $_POST['id-registro']; 
$proceso = $_POST['pro'];
$nombre = $_POST['nombre'];
$pass = $_POST['pass'];
$nivel = $_POST['nivel'];
$codigo = $_POST['codigo'];

switch($proceso){
case 'Registro': mysqli_query($conex, "INSERT INTO usuarios (NombreUsuario, ContUsuario, idNiveles, Codigo, Foto) VALUES ('$nombre','$pass','$nivel','$codigo', 'images/fotos_perfil/perfil.jpg')");

	break;
	case 'Edicion': mysqli_query($conex, "UPDATE usuarios SET NombreUsuario = '$nombre', ContUsuario = '$pass', idNiveles = '$nivel', Codigo = '$codigo' where idUsuarios = '$id'");
    
	break;
   }
    $registro = mysqli_query($conex,"SELECT * FROM usuarios ORDER BY idUsuarios ASC")or die(mysqli_error($conex));

    echo '<table class="table table-striped table-condensed table-hover">
        	<tr>
                       <th width="20%">Nombre Usuario</th>
                         <th width="20%">Contraseña</th>
                         <th width="20%">Nivel usuario</th>
                         <th width="20%">Codigo</th>            
                        <th width="20%">Opciones</th>
            </tr>';
	while($registro2 = mysqli_fetch_array($registro)){
		echo '<tr>
                              <td>'.$registro2['NombreUsuario'].'</td>
                                <td>'.$registro2['ContUsuario'].'</td>
                                <td>'.$registro2['idNiveles'].'</td>
                                 <td>'.$registro2['Codigo'].'</td>
                               <td> <a href="javascript:editarRegistro('.$registro2['idUsuarios'].');">
                              <img src="../images/edita.jpg" width="25" height="25" alt="delete" title="Editar" /></a>
                              <a href="javascript:eliminarRegistro('.$registro2['idUsuarios'].');">
                              <img src="../images/elimina.png" width="25" height="25" alt="delete" title="Eliminar" /></a>
                  </td>
				</tr>';
	}
   echo '</table>';
?>