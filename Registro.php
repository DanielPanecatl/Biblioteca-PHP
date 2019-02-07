<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <!--Import Google Icon Font-->
  <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
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
  <div class="container">
  <form action="SQL/BuscarPrestamoFecha.php" method="POST" name="Form1">
    <div class="row" style="background-color: white">
      <div class="input-field col s6">
        <input name="Fe1" type="text" required class="validate">
        <label>Fecha 1</label>
      </div>
      <p>A</p>
      <div class="input-field col s6">
        <input name="Fe2" type="text" required class="validate">
        <label>Fecha 2</label>
      </div>
    </div>
    <button class="btn waves-effect waves-light" type="submit" name="action">Buscar
      <i class="material-icons right">send</i>
    </button>
  </form>
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




