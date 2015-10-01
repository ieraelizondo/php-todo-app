<html>
<head><title>Ejemplo de formulario sencillo</title></head>
<body>
 
<h3>AppTareas</h3>
    <div id="Inisesion" style="margin-left:50%;" width="300px">
	    <form action="./App/Logica/iniciosesion.php" method="post">
		    <table>
			    <tr>
				    <td><label>Usuario: </label></td><br>
				    
			    </tr>
			    <tr>
			    	<td><input type="text" name="txtusuario" value="" required="required" placeholder="Usuario"/></td>
			    </tr>
			    <tr>
			    	<td>Contrase&ntilde;a: </td>
			    </tr>
			    <tr>	
			    	<td><input type="password" name="txtpass" value="" required="required" placeholder="Contrase&ntilde;a"/></td>
				</tr>
				<tr> 
				    <td><input type="submit" name="btIniSesion" value="Iniciar sesion" /></td>
			    </tr>
			    <tr>
			    	<td>
			    		<p>Si no estas registrado puedes hacerlo desde <a href="./App/form_registro.php" onclick="">aqu&iacute;.</a></p>
			    	</td>
			    </tr>
		    </table>
	    </form>
    </div>
</form> 
</body>
</html>