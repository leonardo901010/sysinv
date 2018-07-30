 <!DOCTYPE>
<html>
<head>
		<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
</head>
<body>
<center>
	<form action="registro.php" method="post"/>
		<h1>Agenda Electronica</h1>
		<h1>REGISTRO</h1>
			
		<label>Nombre:</label>
		<input type="text" name="nombre"/>
		<label>Apellidos:</label>
		<input type="text" name="apellidos"/></td></tr>
		<label>Tipo: </label>
		<select>
			  <option value="volvo">CC</option>
			  <option value="saab">CE</option>
			  <option value="mercedes">TI</option>
		</select>
		<label>Numero:</label>
		<input type="text" name="numerocc"/>
		<label>Email:</label>
		<input type="text" name="email"/>
		<label>Telefono: </label>
		<input type="text" name="telefono"/>
		<label>Usser:</label>
		<input type="text" name="usser"/>
		<label>Password:</label>
		<input type="password" name="password"/>
		<label>Confirmar Password:</label>
		<input type="password" name="password2"/>
		<br><br>
		<input type="submit" value="Registrar" name="registrar" class="boton2"> 
		<a class="boton" href="www.google.com" name="regresar">Regresar</a>
   		<input type="reset" value="Limpiar" name="limpiar" class="boton2">
	</form>
</center>
<?php
	IF(isset($_POST['registrar']))
	{
		include 'conexion.php';

		$nombre=$_POST['nombre'];
		$apellidos=$_POST['apellidos'];
		$numerocc=$_POST['numerocc'];
		$email=$_POST['email'];
		$telefono=$_POST['telefono'];
		$usser=$_POST['usser'];
		$password=$_POST['password'];
        if (preg_match('/^[a-z\d_]{4,28}$/i', $nombre))
        {
        	$query = "INSERT INTO usuarios (nombre,apellidos,numero,email,telefono,usser,contrasena) VALUES ('$nombre','$apellidos','$numerocc','$email','$telefono','$usser','$password')";
	        $resultado=$conexion ->query($query);
	        if ($resultado)
	        {
	            print "<FONT COLOR='red'>se ingresaron los datos correctamente</font>";
	        }
	        else
	        {
	        	print "<FONT COLOR='red'>ERROR AL INSERTAR LOS DATOS</font>";
	        }
        }
		print "<FONT COLOR='red'>Error en nombre</font>";
	}
?>
</body>
</html>