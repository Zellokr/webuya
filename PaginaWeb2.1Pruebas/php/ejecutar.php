<?php

    $host_db = "127.0.0.1";
    $user_db = "ubuntu";                     //Your Cloud 9 username
    $pass_db = "";                                  //Remember, there is NO password by default!
    $db_name = "OurBd";                                  //Your database name you want to connect to
    $port = 3306;   
	  


session_start();
$mensaje=$_POST['mensaje'];
$alias = $_SESSION['email'];
$ip=$_SERVER['REMOTE_ADDR'];
$fecha=date("H-i-s");
if($alias!="" and $mensaje!="") {
$conexion = new mysqli($host_db, $user_db, $pass_db, $db_name);
mysqli_query($conexion,"insert into mensajes(alias,mensaje,ip,fecha) values('$alias','$mensaje','$ip','$fecha')");
$conteo=mysqli_query($conexion,"select count(*) from mensajes group by fecha");
$primero=mysqli_query($conexion,"select min(id) from mensajes");
$repri=mysql_result($primero,0);
$registros=mysqli_num_rows($conteo);
if($registros>15) {
mysql_query($conexion,"delete from mensajes where id=$repri");
}
}
header("Location:chat2.0.php");
?>