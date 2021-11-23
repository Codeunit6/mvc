<?php 
require_once "conexion.php";
	$conexion=conexion();
	$id=$_POST['id2'];
	$n=$_POST['nombre'];
	$a=$_POST['apellido'];
	$e=$_POST['email'];
	$t=$_POST['telefono'];

	$sql="DELETE FROM denuncia
				WHERE id_Denuncia='$id'";
	echo $result=mysqli_query($conexion,$sql);

 ?>