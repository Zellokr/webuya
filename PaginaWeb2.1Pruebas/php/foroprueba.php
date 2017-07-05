<?php
session_start();
?>

<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="/PaginaWeb2.1Pruebas/css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      
      <link rel="stylesheet" href="/PaginaWeb2.1Pruebas/css/chat2.0.css">
      
      <meta charset="UTF-8">
      <title>Chat</title>
    </head>

    <body>
        
      <nav>
        <div class="nav-wrapper" arial-describedby="Barra de elementos">
          <a href="/PaginaWeb2.1Pruebas/php/main.php" class="brand-logo left" aria-label="Enlace Inicio">Diario de Clase</a>
          <ul id="nav-mobile" class="right hide-on-med-and-down">
          </ul>
        </div>
      </nav>  
        
        <div class="container">
          <div class="section">
            <table class="responsive">
              <thead>
                <tr>
                    <th></th>
                    <th>Título</th>
                    <th>Fecha</th>
                    <th>Respuestas</th>
                </tr>
              </thead>
      
              <tbody>
                <tr>
                  <?php 
                    
                    	$host_db = "127.0.0.1";
                    	$user_db = "ubuntu";
                    	$pass_db = "";
                    	$db_name = "OurBd";
                    	$port = 3306;
                    	 
                    	$conexion = new mysqli($host_db, $user_db, $pass_db, $db_name);
                    	$query = "SELECT * FROM  foro WHERE identificador = 0 ORDER BY fecha DESC";
                    	$result = $conexion->query($query);
                    	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
                    	{
                    		$id = $row['ID'];
                    		$titulo = $row['titulo'];
                    		$fecha = $row['fecha'];
                    		$respuestas = $row['respuestas'];
                    		echo "<tr>";
                    			echo "<td><a href='/PaginaWeb2.1Pruebas/php/foro.php?id=$id'>ver</a></td>";
                    			echo "<td>$titulo</td>";
                    			echo "<td>".date("d-m-y,$fecha")."</td>";
                    			echo "<td>$respuestas</td>";
                    		echo "</tr>";
                    	  
                    	}
      
                  ?>
                </tr>
              </tbody>
            </table><br><br>
              <a href="formulario.php" class="waves-effect waves-light btn right">Nuevo tema</a>
        </div>
      </div>
      
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="/PaginaWeb2.1Pruebas/js/materialize.min.js"></script>
    </body>
  </html>
