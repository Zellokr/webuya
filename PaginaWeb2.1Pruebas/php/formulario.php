<?php
	if(isset($_GET["respuestas"]))
		$respuestas = $_GET['respuestas'];
	else
		$respuestas = 0;
	if(isset($_GET["identificador"]))
		$identificador = $_GET['identificador'];
	else
		$identificador = 0;
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
          <a href="/PaginaWeb2.1Pruebas/php/main.php" class="brand-logo left"><i class="material-icons">home</i></a>
          <ul id="nav-mobile" class="right hide-on-med-and-down">
          </ul>
        </div>
      </nav>  
      
    <div class="container">
      <div class="section">
      
      <table class="responsive">
        <thead>
          <form name="form" action="/PaginaWeb2.1Pruebas/php/agregar.php" method="post">
          	<input type="hidden" name="identificador" value="<?php echo $identificador;?>">
          	<input type="hidden" name="respuestas" value="<?php echo $respuestas;?>">
              <tr>
          		  <td>Autor </td>
          		</tr>
          		<tr><td><input type="text" name="autor" class="validate" required></td></tr>
              <tr>
                <td>Titulo</td>
              </tr>
              <tr>
                <td><input type="text" name="titulo" class="validate" required></td>
              </tr>
              <tr>
                <td>Mensaje</td>
              </tr>
              <tr>
                <td><textarea name="mensaje" class="materialize-textarea"  class="validate" required></textarea></td>
              </tr>
              <tr>
                <td>
                  <button class="btn waves-effect waves-light" type="submit" name="submit">Enviar
                    <i class="material-icons right">send</i>
                  </button>
                </td>
              </tr>
            </form>
        </thead>
      </table>
      </div>
    </div>
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="/PaginaWeb2.1Pruebas/js/materialize.min.js"></script>
    </body>
  </html>