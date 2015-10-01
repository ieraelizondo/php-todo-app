<?php

class InsertarUsuario
{
	var $id;
	var $pass;
	var $nombre;
	var $apellido1;
	var $apellido2;
	var $email;

	function __construct($idusu,$passw,$nomb,$ape1,$ape2,$ema)
	{
		$this->id=$idusu;
		$this->pass=$passw;
		$this->nombre=$nomb;
		$this->apellido1=$ape1;
		$this->apellido2=$ape2;
		$this->email=$ema;

	}

	public function insert()
	{
		$modelo=new Conexion();
		$conex=$modelo->conectar();
		/*INSERT INTO usuarios (id_usuario,nombre,pass,apellido1,apellido2,email)
    	SELECT 'ierai','ierai','papaa','','',''
        FROM DUAL
        WHERE NOT EXISTS (SELECT id_usuario
                              FROM usuarios
                              WHERE id_usuario='ierai')
        LIMIT 1;*/
        $comand="insert into usuarios(id_usuario,pass,nombre,apellido1,apellido2,email) ";
        $comand.="select '".$this->id."','".$this->pass."','".$this->nombre."','".$this->apellido1."','".$this->apellido2."','".$this->email."' ";
		
		//$comand.="select :id,:pass,:nombre,:apellido1,:apellido2,:email ";
		$comand.="FROM DUAL ";
		$comand.="WHERE NOT EXISTS (SELECT id_usuario FROM usuarios WHERE id_usuario='".$this->id."')";
		//$comand.="WHERE NOT EXISTS (SELECT id_usuarioFROM usuarios FROM usuarios WHERE id_usuario=:id)";

		$consulta=$conex->prepare($comand);
		/*$consulta->bindParam(':id',$this->id);
		$consulta->bindParam(':pass',$this->pass);
		$consulta->bindParam(':nombre',$this->nombre);
		$consulta->bindParam(':apellido1',$this->apellido1);
		$consulta->bindParam(':apellido2',$this->apellido2);
		$consulta->bindParam(':email',$this->email);*/

		if(!$consulta)
		{
			echo "<script>alert(Error: ".$conex->errorInfo().")</script>";
		}
		else
		{
			try
			{				
				$consulta->execute();
			}
			catch (PDOException $ex)
			{
				echo "<script>alert(".$ex->getMessage().")</script>";
				return;
			}
						
			if($consulta->rowCount()==0)
			{
				echo "<script>alert('Usuario ya existe. Filas afectadas: ".$consulta->rowCount()."');</script>";
				echo "<script>location.href='../form_registro.php';</script>";

			}
			else
			{
				echo "<script>alert('Usuario registrado correctamente. Filas afectadas: ".$consulta->rowCount()."');</script>";
			}
		}
	}

}
?>