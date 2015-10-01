<?php
require('../../BD/clases/conexion.php');
require('../../BD/clases/insertar_usuario.php');

	$id=htmlspecialchars($_POST['txt_Usuario']);
	$pass=htmlspecialchars($_POST['txt_Pass']);
	$nombre=htmlspecialchars($_POST['txt_Nombre']);
	$apellido1=htmlspecialchars($_POST['txt_Apellido1']);
	$apellido2=htmlspecialchars($_POST['txt_Apellido2']);
	$email=htmlspecialchars($_POST['txt_Email']);
	
	$model= new InsertarUsuario($id,$pass,$nombre,$apellido1,$apellido2,$email);
	
	
	$model->insert();
?>
