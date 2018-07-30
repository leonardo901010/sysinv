<?php
		include 'conexion.php';

		$usuario = $_POST['user'];
		$password=$_POST['pwd'];

		$query = "SELECT usser,password FROM usuarios WHERE usser = '$usuario' and password = '$password'";
		$sql= $conexion->query($query);
		//$row = $sql->fetch_array(MYSQLI_ASSOC);
		$row=mysqli_fetch_array($sql);
		if (mysqli_num_rows($sql)>0)
		{
			$resp = array("status"=>200,"user"=>$row['usser'],"password"=>$row['password']);
			//$resp2 = json_encode($resp);
			print json_encode($resp);
		}else
		{
			$resp = array("status"=>400);
			print json_encode($resp);
		}
?>