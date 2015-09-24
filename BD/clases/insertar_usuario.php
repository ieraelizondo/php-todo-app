<?php
class insertar
{
	public $id;
	public $pass;
	public $nombre;
	public $apellido1;
	public $apellido2;
	public $email;

	public function insert()
	{
		$modelo=new conexion();
		$conex=$modelo->conectar();
		/*INSERT INTO usuarios (id_usuario,nombre,pass,apellido1,apellido2,email)
    	SELECT 'ierai','ierai','papaa','','',''
        FROM DUAL
        WHERE NOT EXISTS (SELECT id_usuario
                              FROM usuarios
                              WHERE id_usuario='ierai')
        LIMIT 1;*/
        $comand="insert into usuarios(id_usuario,pass,nombre,apellido1,apellido2,email) ";
        $comand.="select '".$id."','".$pass."','".$nombre."','".$apellido1."','".$apellido2."','".$email."' ";
		
		//$comand.="select ':id',':pass',':nombre',':apellido1',':apellido2',':email' ";
		$comand.="FROM DUAL ";
		$comand.="WHERE NOT EXISTS (SELECT id_usuarioFROM usuarios FROM usuarios WHERE id_usuario='".$id."')";

		$consulta=$conex->prepare($comand);
		/*$consulta->bindParam(':id',$id);
		$consulta->bindParam(':pass',$pass);
		$consulta->bindParam(':nombre',$nombre);
		$consulta->bindParam(':apellido1',$apellido1);
		$consulta->bindParam(':apellido2',$apellido2);
		$consulta->bindParam(':email',$email);*/

		if(!$consulta)
		{
			echo "<script>alert(".$conex->errorInfo().")</script>";
		}
		else
		{
			echo $comand;
			$consulta->execute();
			echo "<script>alert('Usuario registrado correctamente.')</script>";
		}
	}

}
?>