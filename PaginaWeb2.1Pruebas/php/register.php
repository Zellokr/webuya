<?php
	 
    $host_db = "127.0.0.1";
    $user_db = "ubuntu";                     //Your Cloud 9 username
    $pass_db = "";                                  //Remember, there is NO password by default!
    $db_name = "OurBd";                                  //Your database name you want to connect to
    $port = 3306;   
	  
	 $conexion = new mysqli($host_db, $user_db, $pass_db, $db_name);
	 
	 if ($conexion->connect_error) {
	 die("La conexion falló: " . $conexion->connect_error);
	}
	 $email = $_POST['email'];
	 
	 $buscarUsuario = "SELECT * FROM USUARIOS
	 WHERE correo = '$email' ";
	 
	 $result = $conexion->query($buscarUsuario);
	 
	 $count = mysqli_num_rows($result);
	 
	 if ($count == 1) {
	 echo "<br />". "El Nombre de Usuario ya ha sido registrado." . "<br />";
	 
	 echo "<a href='../p2.html'>Por favor escoga otro Nombre</a>";
	 }
	 else{
	 
        $nombre = $_POST['firstname']; 
        $apellidos = $_POST['lastname'];
        $password = $_POST['password'];
        $email = $_POST['email'];
                
        $sql = "INSERT INTO USUARIOS (nombre,apellidos,contrasena,correo) VALUES ('$nombre','$apellidos','$password','$email')";
	 
	 if ($conexion->query($sql) == TRUE) {
	  
	 echo "<br />" . "<h2>" . "Usuario Creado Exitosamente!" . "</h2>";
	 echo "<h4>" . "Bienvenido: " . $_POST['username'] . "</h4>" . "\n\n";
	 echo "<h5>" . "Hacer Login: " . "<a href='../login.html'>Login</a>" . "</h5>"; 
	 }
	 
	 else {
		echo "Error al crear el usuario." . $sql . "<br>" . $conexion->error; 
	   }
	 }
	 mysqli_close($conexion);
?>
