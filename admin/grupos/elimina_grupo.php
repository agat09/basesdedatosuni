<?php
include('../conex.php');
$conex = mysqli_connect("myserveruni.mysql.database.azure.com", "agat@myserveruni", "Uni095359", "bd");

$id = $_POST['id'];

mysqli_query($conex, "DELETE FROM grupo WHERE idGrupo = '$id'");

$registro = mysqli_query($conex, "SELECT * FROM grupo ORDER BY idGrupo ASC");

echo '<table class="table table-striped table-condensed table-hover table-responsive">
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
                          </td>s>
			         	</tr>';
	}
echo '</table>';
?>