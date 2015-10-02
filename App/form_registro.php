<html>
	<head>
		<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
		<title>Registro</title>
		<script type="text/javascript">
			function comrobarpass()
			{
				var pass1,pass2;
				pass1=document.getElementById('txt_Pass').value;
				pass2=document.getElementById('txt_PassValid').value;
				
				if(pass1!="")
				{
					if(pass2!="")
					{
						if(pass1!=pass2)
						{
							alert('No coinciden las contraseñas.');
							document.getElementById('txt_PassValid').focus();
							document.getElementById('txt_Pass').style.borderColor='#e52213';
							document.getElementById('txt_PassValid').style.borderColor='#e52213';
						}
					}else
					{
						alert('Vuelve a introducir la contraseña');
						document.getElementById('txt_PassValid').focus();
					}
					
				}
			}
		</script>
	</head>

	<body>
		<h1>Nuevo usuario</h1>
	    <div id="Registro">
		    <form action="./Logica/registro.php" method="post">
			    <table>
				    <tr>
					    <td><label>Usuario</label></td>
					    <td><input name="txt_Usuario" type="text" required="required"></td>
				    </tr>
				    <tr>
					    <td><label>Contrase&ntilde;a</label></td>
					    <td><input name="txt_Pass" id="txt_Pass" type="password" required="required"></td>
				    </tr>
				    <tr>
					    <td><label>Repita contrase&ntilde;a</label></td>
					    <td><input name="txt_PassValid" id="txt_PassValid" type="password" required="required" onblur="comrobarpass()" ></td>
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
		    </form>
	    </div>
	</body>

</html>