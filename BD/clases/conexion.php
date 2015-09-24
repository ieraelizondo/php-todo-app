<?php

class Conexion{

	public function conectar()
	{
		$usuario="apptarea";
		$password="apptarea";
		$host="localhost";
		$bd="apptarea";

		return $Conexion=new PDO("mysql:host=$host;dbname=$db",$usuario,$password);
	}
}



?>