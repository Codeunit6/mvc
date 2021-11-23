<?php
/////// CONEXIÓN A LA BASE DE DATOS /////////
$mysqli= new mysqli("localhost", "root", "", "caminosegurobd");

//////////////// VALORES INICIALES ///////////////////////

$salida="";
$query="SELECT *FROM denuncia ORDER By id_Denuncia";

///////// LO QUE OCURRE AL TECLEAR SOBRE EL INPUT DE BUSQUEDA ////////////
if(isset($_POST['consulta']))
{
	$q=$mysqli->real_escape_string($_POST['consulta']);
	$query="SELECT *FROM denuncia WHERE 
		fecha LIKE '%".$q."%' OR Lugar LIKE '%".$q."%' OR
		Horario LIKE '%".$q."%' OR
		Descripcion LIKE '%".$q."%' OR
		Evidencia LIKE '%".$q."%'";
}

$resultado=$mysqli->query($query);
if ($resultado->num_rows > 0)
{
	$salida.= 
	"<table class='table'>
		<thead>
			<tr>
				<td>id_Denuncia</td>
				<td>id_Usuario</td>
				<td>fecha</td>
				<td>Lugar</td>
				<td>Horario</td>
				<td>Descripcion</td>
				<td>Evidencia</td>
			</tr>
		</thead>
		<tbody>";


	while($fila= $resultado->fetch_assoc())
	{
		$salida.=
		"<tr>
			<td data-label='id_Denuncia'>".$fila['id_Denuncia']."</td>
			<td data-label='id_Usuario'>".$fila['id_Usuario']."</td>
			<td data-label='fecha'>".$fila['fecha']."</td>
			<td data-label='Lugar'>".$fila['Lugar']."</td>
			<td data-label='Horario'>".$fila['Horario']."</td>
			<td data-label='Descripcion'>".$fila['Descripcion']."</td>
			<td data-label='Evidencia'>".$fila['Evidencia']."</td>
		 </tr>";
	}

	$salida.='</tbody></table>';
} else
	{
		$salida.="No se encontraron coincidencias con sus criterios de búsqueda.";
	}


echo $salida;
$mysqli->close();
?>
