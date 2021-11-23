<?php 

	require_once "conexion.php";
	$conexion=conexion();
	/*$n=$_POST['nombre'];
	$a=$_POST['apellido'];
	$e=$_POST['email'];
	$t=$_POST['telefono'];

	$sql="INSERT into t_persona (nombre,apellido,email,telefono)
								values ('$n','$a','$e','$t')";*/

	$sql="SELECT *from t_persona where id=1";
	echo $result=mysqli_query($conexion,$sql);

 ?>