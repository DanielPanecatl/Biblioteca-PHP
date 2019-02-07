<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
      <!--Let browser know website is optimized for mobile-->
      <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

<nav class="nav-extended" style="background-color: #ff6f00">
  <div class="nav-wrapper">
    <a href="#" class="brand-logo"><img class="responsive-img" src="img/photo.jpg" width="64" height="64"></a>
    <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
      <li><a href="Inicio.php">Inicio</a></li>
      </ul>
      <ul class="side-nav" id="mobile-demo">
      <li><a href="Inicio.php">Inicio</a></li>
    </ul>
  </div>
</nav>
    <body background="img/bilioteca.jpg">
    <?php
      session_start();
      if (isset($_SESSION['u_User1'])) {
      }
      else
      {
        header("location: index.html");
      }
      echo "<a href='Cerrar_Sesion.php'>Cerrar Sesion</a>";
    ?>
        <div class="container">
            
          <ul class="collection with-header">
            <li class="collection-header"><h4>Administración de la biblioteca</h4></li>
            <li class="collection-item"><div>Administración Libros<a href="Libro.html" class="secondary-content"><i class="material-icons">send</i></a></div></li>
            <li class="collection-item"><div>Administración de computadoras<a href="Pc.html" class="secondary-content"><i class="material-icons">send</i></a></div></li>
            <li class="collection-item"><div>Prestamo de pc<a href="PrestamoPC.html" class="secondary-content"><i class="material-icons">send</i></a></div></li>
            <li class="collection-item"><div>Prestamo de libro<a href="PrestamoLibro.html" class="secondary-content"><i class="material-icons">send</i></a></div></li>
            <li class="collection-item"><div>Consultar inventario<a href="ControlInventario.php" class="secondary-content"><i class="material-icons">send</i></a></div></li>
            <li class="collection-item"><div>Consultar Registros<a href="Registro.php" class="secondary-content"><i class="material-icons">send</i></a></div></li>
            <li class="collection-item"><div>Gestion de cuentas<a href="Administrador.html" class="secondary-content"><i class="material-icons">send</i></a></div></li>
          </ul>
            
        </div>
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <script type="text/javascript" src="js/calendar.js"></script>
      <script type="text/javascript" src="js/Eventos.js"></script>
    </body>
    <footer class="page-footer" style="background-color: #ff6f00">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">Footer Content</h5>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Links</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="http://www.upamozoc.edu.mx/">UPAM</a></li>
                  <li><a class="grey-text text-lighten-3" href="https://twitter.com/upamozoc">Twitter</a></li>
                  <li><a class="grey-text text-lighten-3" href="https://www.facebook.com/upamofi?fref=ts">Facebook</a></li>
                  <li><a class="grey-text text-lighten-3" href="https://www.youtube.com/user/UPAMOZOC">Youtube</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            © 2015 Universidad Politécnica de  Amozoc
            <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
            </div>
          </div>
        </footer>
  </html>