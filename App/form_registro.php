<?php
require "../BD/clases/conexion.php";
require "../BD/clases/insertar_usuario.php";

if (isset($_POST['insertar']))
{
	$model=new insertar();
	
	$model->id=htmlspecialchars($_POST['txt_Usuario']);
	$model->pass=htmlspecialchars($_POST['txt_Pass']);
	$model->nombre=htmlspecialchars($_POST['txt_Nombre']);
	$model->apellido1=htmlspecialchars($_POST['txt_Apellido1']);
	$model->apellido2=htmlspecialchars($_POST['txt_Apellido2']);
	$model->email=htmlspecialchars($_POST['txt_Email']);
	$model->insert();

}
?>

<html>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<title>Registro</title>
</head>

<body>
	<h1>Nuevo usuario</h1>
    <div id="Registro">
	    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
		    <table>
			    <tr>
				    <td><label>Usuario</label></td>
				    <td><input name="txt_Usuario" type="text" required="required"></td>
			    </tr>
			    <tr>
				    <td><label>Contrase&ntilde;a</label></td>
				    <td><input name="txt_Pass" type="password" required="required"></td>
			    </tr>
			    <tr>
				    <td><label>Repita contrase&ntilde;a</label></td>
				    <td><input name="txt_PassValid" type="password" required="required" ></td>
			    </tr>
			    <tr>
                    <td><label>Nombre</label></td>
				    <td><input name="txt_Nombre" type="text" required="required"></td>
                    
			    </tr>
                <tr>
                    <td><label>Primer apellido</label></td>
				    <td><input name="txt_Apellido1" type="text" required="required"></td>
                </tr>
                <tr>
                    <td><label>Segundo apellido</label></td>
				    <td><input name="txt_Apellido2" type="text"></td>
                </tr>
                <tr>
                    <td><label>E-mail</label></td>
				    <td><input name="txt_Email" type="email" ></td>
                </tr>
                <tr>
                    <td><input name="bt_Registro" type="submit" value="Registrarse"></td>
                </tr>
		    </table>
		    <input type="hidden" name="insertar"/>
	    </form>
    </div>
</body>

</html>