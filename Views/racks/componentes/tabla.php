
<?php 

	require_once "../php/conexion.php";
	$conexion=conexion();

 ?>
<div class="row">
	<div class="col-sm-12">
	<h2>Denuncias Generadas</h2>
		<table class="table table-hover table-condensed table-bordered">
		<!--<caption>
			<button class="btn btn-primary" data-toggle="modal" data-target="#modalNuevo">
				Agregar nuevo 
				<span class="glyphicon glyphicon-plus"></span>
			</button>
		</caption>
	--><THEAD>
			<tr>
				<td>#</td>
				<td>#Usuario</td>
				<td>Fecha</td>
				<td>Lugar</td>
				<td>Dirección</td>
				<td>Hora</td>
				<td>Descripcion</td>
				<td>Evidencia</td>
				<td>Editar</td>
				<td>Eliminar</td>
			</tr>
		</THEAD><TBODY>
			<?php 

				$sql="SELECT *from denuncia WHERE id_Usuario=3";
				$result=mysqli_query($conexion,$sql);
				while($ver=mysqli_fetch_row($result)){ 

					$datos=$ver[0]."||".
						   $ver[1]."||".
						   $ver[2]."||".
						   $ver[3]."||".
						   $ver[4]."||".
						   $ver[5]."||".
						   $ver[6]."||".
						   $ver[7];
			 ?>

			<tr>
				<td data-label='#'><?php echo $ver[0] ?></td>
				<td data-label='#Usuario'><?php echo $ver[1] ?></td>
				<td data-label='Fecha'><?php echo $ver[2] ?></td>
				<td data-label='Lugar'><?php echo $ver[3] ?></td>
				<td data-label='Dirección'><?php echo $ver[4] ?></td>
				<td data-label='Hora'><?php echo $ver[5] ?></td>
				<td data-label='Descripción'><?php echo $ver[6] ?></td>
				<td data-label='Evidencia'><?php echo $ver[7] ?></td>
				<td>
					<button class="btn btn-warning glyphicon glyphicon-pencil" data-toggle="modal" data-target="#modalEdicion" onclick="agregaform('<?php echo $datos ?>')">
						
					</button>
				</td>
				<td>
					<button class="btn btn-danger glyphicon glyphicon-remove" data-toggle="modal" data-target="#modalEliminar" onclick="agregaformd('<?php echo $datos ?>')"></button>
				</td>
			</tr>
			<?php 
		}
			 ?>
			 </TBODY>
		</table>
	</div>
</div>