<?php
	session_start();
?>
	 
<?php
	 
	$host_db = "127.0.0.1";
	$user_db = "ubuntu";
	$pass_db = "";
	$db_name = "OurBd";
	$port = 3306;
	 
	$conexion = new mysqli($host_db, $user_db, $pass_db, $db_name);
	 
	if ($conexion->connect_error) {	 die("La conexion falló: " . $conexion->connect_error);
	}
	 
	$email = $_POST['email'];
	$password = $_POST['password'];
	  
	$sql = "SELECT * FROM USUARIOS WHERE correo = '$email'";
	$sql1 = "SELECT * FROM USUARIOS WHERE contrasena = '$password'";
	
	$result = $conexion->query($sql);
	$result1 = $conexion->query($sql1); 
	
	if ($result->num_rows > 0) {    
		$row = $result->fetch_array(MYSQLI_ASSOC);
	 }
	 
	 if ($result1->num_rows > 0) {    
		$row1 = $result1->fetch_array(MYSQLI_ASSOC);
	 }
		
	 if ($password == $row1['contrasena']){ 
	  
	    $_SESSION['loggedin'] = true;
	    $_SESSION['email'] = $email;
	    $_SESSION['start'] = time();
	    $_SESSION['expire'] = $_SESSION['start'] + (5 * 6000);
	    header("Location: /PaginaWeb2.1Pruebas/php/main.php");
	 
	 } else { 
	   echo "Username o Password estan incorrectos.";
	   echo "<br><a href='../login.html'>Volver a Intentarlo</a>";
	 }
	 mysqli_close($conexion);	 
?>
