
<?php
include('../conex.php');
$conex = mysqli_connect("myserveruni.mysql.database.azure.com", "agat@myserveruni", "Uni095359", "bd");

$id = $_POST['id-registro'];
$proceso = $_POST['pro'];
$numero = $_POST['numero'];
$nombre = $_POST['nombre'];

switch($proceso){
	case 'Registro': mysqli_query($conex, "INSERT INTO grupo (NumeroGrupo, NombreGrupo) VALUES('$numero','$nombre')");
	break;
	case 'Edicion': mysqli_query($conex, "UPDATE grupo SET NumeroGrupo = '$numero', NombreGrupo = '$nombre' where idGrupo = '$id'");
	break;
   }
    $registro = mysqli_query($conex, "SELECT * FROM grupo ORDER BY idGrupo ASC");

    echo '<table class="table table-striped table-condensed table-hover">
        	 <tr>
                         <th width="40%">Numero de Grupo</th>
                        <th width="40%">Nombre de Grupo</th>            
                        <th width="20%">Opciones</th>
                   </tr>';
	while($registro2 = mysqli_fetch_array($registro)){
		echo '<tr>
                        <td>'.$registro2['NumeroGrupo'].'</td>
                      <td>'.$registro2['NombreGrupo'].'</td>
                       <td> <a href="javascript:editarRegistro('.$registro2['idGrupo'].');">
                          <img src="../images/edita.jpg" width="25" height="25" alt="delete" title="Editar" /></a>
                          <a href="javascript:eliminarRegistro('.$registro2['idGrupo'].');">
                          <img src="../images/elimina.png" width="25" height="25" alt="delete" title="Eliminar" /></a>
                          </td>
                </tr>';
  }
	
   echo '</table>';
?>