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
    </head>

    <body>
      
      <nav>
        <div class="nav-wrapper" arial-describedby="Barra de elementos">
        <a href="main.php" class="brand-logo left" aria-label="Enlace A Página Inicio">Diario De Clase</a>
          <ul id="nav-mobile" class="right hide-on-med-and-down">
          </ul>
        </div>
      </nav>  
      
    <div class="container">
      <div class="section">
      	<table class="responsive">
        	<thead>
						<th>
							Titulo
						</th>
						
						<th>
							Autor
						</th>
						
						<th>
							mensaje
						</th>
						
						<th>
							fecha
						</th>
						
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
								
							if(isset($_GET["id"]))
							$id = $_GET['id'];
							$query = "SELECT * FROM  foro WHERE ID = '$id' ORDER BY fecha DESC";
							$result = $conexion->query($query);
							while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
								$id = $row['ID'];
								$titulo = $row['titulo'];
								$autor = $row['autor'];
								$mensaje = $row['mensaje'];
								$fecha = $row['fecha'];
								$respuestas = $row['respuestas'];
								
								echo "<td>$titulo</td>";
								echo "<td>$autor</td>";
								echo "<td>$mensaje</td>";
								echo "<td>$fecha</td>";
								echo "<td><a href='/PaginaWeb2.1Pruebas/php/agregar.php?id&respuestas=$respuestas&identificador=$id'>Responder</a></td>";
							}
							?>
							

        		</tr>
        		<tr>
        			
        		<?php
        			if(isset($_GET["id"]))							
        			$id = $_GET['id'];
							$query2 = "SELECT * FROM  foro WHERE identificador = '$id' ORDER BY fecha DESC";
							$result2 = $conexion->query($query2);
							
							while($row = mysqli_fetch_array($result2, MYSQLI_ASSOC)){
								$id = $row['ID'];
								$titulo = $row['titulo'];
								$autor = $row['autor'];
								$mensaje = $row['mensaje'];
								$fecha = $row['fecha'];
								$respuestas = $row['respuestas'];
								echo "<tr>";
								echo "<td>$titulo</td>";
								echo "<td>$autor</td>";
								echo "<td>$mensaje</td>";
								echo "<td>$fecha</td>";
								echo "<td><a href='/PaginaWeb2.1Pruebas/php/agregar.php?id&respuestas=$respuestas&identificador=$id'>Responder</a></td>";
								echo "</tr>";
								
							}
						?>
        		</tr>
        	</tbody>
      	</table>
      </div>
    </div>
    
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="/PaginaWeb2.1Pruebas/js/materialize.min.js"></script>
    </body>
  </html>

        		