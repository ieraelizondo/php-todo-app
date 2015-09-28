<?php

class Conexion{

	public function conectar()
	{
		$usuario="apptarea";
		$password="apptarea";
		$host="localhost";
		$db="apptarea";

		return $conexion=new PDO("mysql:host=".$host.";dbname=".$db.",".$usuario.",".$password);
		echo $conexion;
	}
}



?>