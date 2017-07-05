<?php
session_start();

header('refresh:10; url=/PaginaWeb2.1Pruebas/php/chatiframe.php');

?>

<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="/PaginaWeb2.1Pruebas/css/materialize.min.css"  media="screen,projection"/>
      
      <meta charset="UTF-8">
      <title>Chat</title>
    </head>

    <body>
        
        
        <div class="container">
          <div class="section">
            <table class="responsive">
            <thead>
              <tr>
                  <th>Sala principal... </th>
                  <th></th>
                  <th>              
                    <?php
    
                      $host_db = "127.0.0.1";
                      $user_db = "ubuntu";                     //Your Cloud 9 username
                      $pass_db = "";                            //Remember, there is NO password by default!
                      $db_name = "OurBd";                       //Your database name you want to connect to
                      $port = 3306;   
                    	  
                      $conexion = new mysqli($host_db, $user_db, $pass_db, $db_name);
                    	
                      $res = mysqli_query($conexion,"SELECT * FROM bienvenida");
                      $rango = mysqli_fetch_array($res);	
                    	
                    
                      $query = mysqli_query($conexion,"SELECT * FROM bienvenida");
                      $bnv = mysqli_fetch_array($query);
                      
                    ?>
                  </th>
              </tr>
            </thead>
    
            <tbody>
              <tr>
                <td>
                <?php
                    
                      $result = $conexion->query("SELECT rango FROM USUARIOS WHERE login='".$_SESSION['email']."'");
                        
              	       if ($result->num_rows > 0) 
              	    	   $rango = $result->fetch_array(MYSQLI_ASSOC);

                      $re = mysqli_query($conexion,"SELECT * FROM mensajes ORDER BY ID DESC");
                              
                      while($f=mysqli_fetch_array($re))
                      {
                        echo "<b> <scpan class='fecha'></span>".$f['fecha']." &nbsp;&nbsp;&nbsp;<span class='usuario'></b>".$f['alias']."</span>:&nbsp;&nbsp;&nbsp;<span class='mensaje'>".htmlentities($f['mensaje'])."</span><br/>";
                      }
           
                ?>
                
                </td>

              </tr>
              <tr>
            </tbody>
          </table>
          
          
        </div>
      </div>
      
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="/PaginaWeb2.1Pruebas/js/materialize.min.js"></script>
    </body>
  </html>