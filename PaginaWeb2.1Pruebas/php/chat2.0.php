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
          <a href="main.php" class="brand-logo left" aria-label="Enlace A Página Inicio">Diario De Clase</a> 
          <ul id="nav-mobile" class="right hide-on-med-and-down">
          </ul>
        </div>
      </nav>  
        
        <div class="container">
          <div class="section">
            <table class="responsive">
            <thead>
              <tr>
                  <th>
                    <?php
                    
                      $host_db = "127.0.0.1";
                      $user_db = "ubuntu";                     //Your Cloud 9 username
                      $pass_db = "";                                  //Remember, there is NO password by default!
                      $db_name = "OurBd";                                  //Your database name you want to connect to
                      $port = 3306;   
                    	  
                    	$conexion = new mysqli($host_db, $user_db, $pass_db, $db_name);
              
                      $result = $conexion->query("SELECT rango FROM USUARIOS WHERE correo='".$_SESSION['email']."'");
                        
              	      if ($result->num_rows > 0) 
              	    	   $rango = $result->fetch_array(MYSQLI_ASSOC);
  
                      $result2 = $conexion->query("SELECT bannned FROM USUARIOS WHERE correo='".$_SESSION['email']."'");
                        
                      if ($result->num_rows > 0) 
              	    	  $ban = $result->fetch_array(MYSQLI_ASSOC);
  
                    
                      if($ban["banned"] == 0){
                          
                          if(!isset($_SESSION))
                          {
                            header("Location:login.html");
                          } 
                          
                          else {
                              echo "";
                              echo "<h1>¡Bienvenido al chat!</h1>";
                              echo "Está usted en la zona de usuarios :<strong>";
                              echo "<a  href='../login.html'><i class='material-icons right'>power_settings_new</i></a>";
                              echo "<i class='material-icons right'>perm_identity</i>";
                              echo "<u class='right'></FONT><font color='blue'> ".$_SESSION['email']."</font></u>";
                          }
                          
                          $sql = "UPDATE USUARIOS SET estado=1 WHERE correo='".$_SESSION['email']."'";
                          mysqli_query($conexion,$sql);
                         }
                    ?>
                  </th>
                  <th></th>
              </tr>
            </thead>
    
            <tbody>
              <tr>
                <td scrolling="no">
                  <iframe src="/PaginaWeb2.1Pruebas/php/chatiframe.php" style="position: relative; width: 100%;" height="400"></iframe>
                </td>
                <td>
                  <label></label>
                  <label></label>
                </td>
              </tr>
            </tbody>
          </table>
          
            <div class="row">

            <form class="col s12" method="post" action="/PaginaWeb2.1Pruebas/php/ejecutar.php">
              <div class="row">
                <b>&ensp;El mensaje que desea enviar debe tener como máximo 100 caracteres.</b></br></br>
                <div class="input-field col s12">
                  <i class="material-icons prefix">mode_edit</i>
                  <textarea id="textarea1" name="mensaje" id="icon_prefix2" class="materialize-textarea" data-length="100"></textarea>
                  <label for="textarea1">Escribe aquí</label><br>
                </div>
              </div><br>
                <button class="btn-floating btn-large red right" type="submit" name="action">
                    <i class="material-icons right">send</i>
                </button>
            </form>
          </div>
          
        </div>
      </div>
      
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="/PaginaWeb2.1Pruebas/js/materialize.min.js"></script>
    </body>
  </html>
