<?php 
	require_once "conexion.php";
	$conexion=conexion();
	$id=$_POST['id'];
	$f=$_POST['Fecha'];
	$l=$_POST['Lugar'];
	$de=$_POST['Direccion'];
	$h=$_POST['Hora'];
	$d=$_POST['Descripcion'];
	$e=$_POST['Evidencia'];

	$sql="UPDATE denuncia set fecha='$f',
								Lugar='$l',
								direccion='$de',
								Horario='$h',
								Descripcion='$d',
								Evidencia='$e'
				where id_Denuncia ='$id'";
	echo $result=mysqli_query($conexion,$sql);

 ?>