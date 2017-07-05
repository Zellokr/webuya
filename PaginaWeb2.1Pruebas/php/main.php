<?php
	session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!--Google Analytics-->
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
    
      ga('create', 'UA-99110291-1', 'auto');
      ga('send', 'pageview');
    </script>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
    <title>Inicio</title>
  
    <!-- CSS  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="/PaginaWeb2.1Pruebas/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="/PaginaWeb2.1Pruebas/css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- nav -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/PaginaWeb2.1Pruebas/js/subir.js"></script>
    <script src="https://www.gstatic.com/firebasejs/4.1.3/firebase.js"></script>

    
    <!--Calendario-->
    <link rel="stylesheet" href="/PaginaWeb2.1Pruebas/css/calendario.css">
    
    <!-- subir imagenes a Firebase-->
    
</head>
  
<!--BODY ---------------------------------------------------------------------------------------------------------->
  <body ng-app>
    <!--nav -->
    <div class="container">
    <a href="main.php" class="brand-logo left" aria-label="Enlace A Página Inicio">Diario De Clase</a>
      <!--class="side-nav" id="mobile-demo"-->
      <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#home"><b>Inicio</b></a></li>
        <li><a data-toggle="tab" href="#menu1"><b>CHAT</b></a></li>
        <li><a data-toggle="tab" href="#menu2"><b>FORO</b></a></li>
        <li><a data-toggle="tab" href="#menu3"><b>ARCHIVOS</b></a></li>
      </ul>
     
      <br/>
      
      <div class="row">
        <i class="right"><?php echo $_SESSION["email"] ?> </i>
        
        <i class="material-icons right">perm_identity</i>
      </div>
      <div class="tab-content">
        <div id="home"  class="tab-pane fade in active top-buffer col-md-12">
    <!---->  
          <div class="section no-pad-bot" id="index-banner">
            <div class="container">
              <br>
              <div class="row">
                <div class="col s12 m12">
                  <h1 class="header center red-text">Tu Diario de Clase</h1>
                </div>

                <div class="row center">
                  <h2 class="header col s12 light">Tu información universitaria al instante.</h3>
                </div>
              </div>
            </div>
          </div>
        
          <div class="container">
            <div class="section">
              <div class="row">
        
                <div class="col-md-8 pull-left">
                  <i class="mdi-content-send brown-text"></i>
                  <h3>¿Qué somos?</h3><br>
                  <p class="left-align light">Estamos ante una página web dedicada a los alumnos de la Universidad de La Laguna, especialmente a los alumnos del grado de Ingeniería Informática.</p>
                  <p class="left-align light">Aquí se podrán consultar dudas, postear información, realizar chats con otros alumnos y muchas más funcionalidades que se irán añadiendo a medida que se irá desarrollando.</p>
                  <p class="left-align light">La página ha sido ideada para lograr un uso diferente y más sencillo, en cuanto a los contenidos compartidos en clase. Tiene como finalidad un uso continuo donde, consultar y subir informacón, sea un hábito de todos los participantes.</p>
                
                  <IMG SRC="/PaginaWeb2.1Pruebas/imagenes/ull.jpg" alt="Imágen Escuela Técnica Superior Inginiería Infórmatica">
                </div> <!-- Fin de la PRIMERA columna-->
                
                <div class="col-md-4 pull-left">
                  <div class="calendar-wrapper" longdesc="Calendario">
                    <button id="btnPrev" type="button">Anterior</button>
  	                <button id="btnNext" type="button">Siguiente</button>
                    <div id="divCal"></div>
                  </div>
                </div> <!-- Fin de la SEGUNDA columna-->
              </div> <!-- Fin de la seleccion de COLUMNAS -->
            </div>
          </div>
        </div> <!-- Fin de la pestaña HOME -->  
          
        <div id="menu1" class="fade tab-pane col-md-12">
          <div class="col-md-3 pull-left">
            <br><br>
            <ul>
              <li><a href="/PaginaWeb2.1Pruebas/php/chat2.0.php" id="download-button" class="btn-large waves-effect waves-light red">  CHATEA   </a></li><br>
              <li><a href="../terminos.html" id="download-button" class="btn-large waves-effect waves-light blue">Normativa de uso</a></li><br>
              <li><a href="../denuncia.html" id="download-button" class="btn-large waves-effect waves-light blue">Denunciar usuario</a></li><br>
            </ul>
          </div>
          <div class="col-md-8 pull-right"> 
            <h1>¡Bienvenido al Chat de Ingenieros!</h1>
            <p class="left-align light"> Disfruta, conversa, a tiempo real, con genete de Ingeniería Informática. Conoce gente nueva y aprovecha la posibilidad de facil acceso a conversaciones con miles de persona con tus mismos problemas e inquietudes. ¡Pueden ayudarte a salvar el curso!</p>  
            <center><IMG SRC="/PaginaWeb2.1Pruebas/imagenes/chat.png" class="img-responsive"></center>
            <br> <br>
          </div>
        </div><!-- Fin de la pestaña MENU1 -->
        <script>

        </script>
        
        <div id="menu2" class="tab-pane fade col-md-12">
          <div class="col-md-8 pull-right">
              <h1>FORO de la comunidad informática</h1>
              <p>Este foro nos permitirá interactuar entre los alumnos de la web 
              para hacer un puesta en común de las dudas, sugerencias o problemas 
              que vayan surgiendo durante el curso académico. Podrás exponer preguntas
              de los contenidos o actividades, tanto de dentro de la carrera como de
              la informática en general.</p>
              
              <h3>Para acceder haz </h3><a href="/PaginaWeb2.1Pruebas/php/foroprueba.php">Click aquí</a>
            <br/><br/>
          </div>
          <div class="col-md-4 pull-right">
            <center><IMG SRC="/PaginaWeb2.1Pruebas/imagenes/foro.jpg" class="img-responsive"></center> 
          </div>
          
          
        </div><!-- Fin de la pestaña MENU2 -->
        

        
        <div id="menu3" class="tab-pane fade col-md-12">
          <div class="col-md-12 pull-right"> 
            <h1>¡Descarga y comparte!</h1>
            <p class="left-align light">Encuentra aquello que ibas buscando, obten exámenes que no sabáan que no sabías que nadie tenía. Haz más fácil tu estudio, pero sobre todo ayuda con aquello que puedas compartir a aquellos que tambien lo necesitan.</p>
            <br>
          <div ng-app="myApp">
            <div class="col-sm-8">
              <form id="form-imagenes">
                <label class="btn btn-file">Subir
                  <input type="file" value="upload" id="fileButton" class="hidden"/>
                </label>
              </form>
              <br><br>
              <progress value="0" max="100" id="uploader">0%</progress>
            </div>
          </div>    
          </div>
        </div><!-- Fin de la pestaña MENU3 -->
              
          <script type="text/javascript">
          // Initialize Firebase
          var config = {
            apiKey: "AIzaSyDzcWtqOV97rJvXKM3X_edDJqGf4gLYci8",
            authDomain: "fir-test-d70ef.firebaseapp.com",
            databaseURL: "https://fir-test-d70ef.firebaseio.com",
            projectId: "fir-test-d70ef",
            storageBucket: "fir-test-d70ef.appspot.com",
            messagingSenderId: "126797685071"
            };
            firebase.initializeApp(config);
          
          var uploader = document.getElementById('uploader');
          var fileButton = document.getElementById('fileButton');
          
          fileButton.addEventListener('change', function(e){
          
            var file = e.target.files[0];
            
            var storageRef = firebase.storage().ref('mis_fotos/' + file.name);
            
            var task = storageRef.put(file);
            
            task.on('state_changed',
            
            function progress(snapshot){
              var pertentage = (snapshot.bytesTransferred / snapshot.totalBytes)*100;
              uploader.value = percentage;
            },
            
            function error(err){},
            
            function complete(){} ) 
            
            
          });
        </script>
      </div> <!-- FINAL DE TODAS LAS PESTAÑAS -->
    </div><!--FIN del contenedor general del contenido-->

<!-- PIE DE PAGINA -------------------------------------------------------------------------------------------->
    <footer class="page-footer red">
      <div class="container">
        <div class="row">
          <div class="col l6 s12">
            <h4 class="white-text">Universidad de La Laguna</h4>
            <p class="grey-text text-lighten-4">Pabellón de Gobierno, C/ Padre Herrera s/n</p>
            <p class="grey-text text-lighten-4">
              Apartado Postal 456
            </p>
            <p class="grey-text text-lighten-4">
              38200, San Cristóbal de La Laguna
            </p>
            <p class="grey-text text-lighten-4">
              Santa Cruz de Tenerife - España
            </p>
            <p class="grey-text text-lighten-4">
              Teléfono: (+34) 900 43 25 26
            </p>
          </div>
          <div class="col l3 s12">
            <!--COLUMNA VACIA -->
          </div>
          <div class="col l3 s12">
            <h4 class="white-text">Enlaces de interés</h4>
            <ul>
              <li><a class="white-text" href="https://www.ull.es/">ULL</a></li>
              <li><a class="white-text" href="https://www.portal.ull.es/">PORTAL</a></li>
              <li><a class="white-text" href="https://www.ull.es/view/centros/etsii/Inicio/es">ETSII</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="footer-copyright">
      </div>
    </footer>
  
    <!--  Scripts-->
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="/PaginaWeb2.1Pruebas/js/materialize.js"></script>
    <script src="/PaginaWeb2.1Pruebas/js/init.js"></script>
    <script src="/PaginaWeb2.1Pruebas/js/calendario.js"></script>

    <!--Scripts de la subida de la imagenes a Firebase-->
    <script src="/PaginaWeb2.1Pruebas/js/subir.js"></script>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js'></script>
    <script src='https://fezvrasta.github.io/bootstrap-material-design/dist/js/material.min.js'></script>
    <script src='https://fezvrasta.github.io/bootstrap-material-design/dist/js/ripples.min.js'></script>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/angular.js/1.5.2/angular.min.js'></script>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/angular-filter/0.5.8/angular-filter.js'></script>
    <script src='http://cdn.firebase.com/libs/angularfire/1.2.0/angularfire.min.js'></script>
          <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="/PaginaWeb2.1Pruebas/js/materialize.min.js"></script>
  
  </body>
</html>

