<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="/Biblioteca/css/materialize.min.css"  media="screen,projection"/>
      <!--Let browser know website is optimized for mobile-->
      <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

<nav class="nav-extended" style="background-color: #ff6f00">
  <div class="nav-wrapper">
    <a href="#" class="brand-logo"><img class="responsive-img" src="/Biblioteca/img/photo.jpg" width="64" height="64"></a>
    <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
      <li><a href="/Biblioteca/Inicio.php">Inicio</a></li>
      </ul>
      <ul class="side-nav" id="mobile-demo">
      <li><a href="/Biblioteca/Inicio.php">Inicio</a></li>
    </ul>
  </div>
</nav>
    <body background="/Biblioteca/img/bilioteca.jpg">
        <div class="container">
          <h3 style="color: white">Registros</h3>
          <?php
            echo "<a href='/Biblioteca/Libro.html'>Regresar</a>";
          ?>
          <div>
            <table style="background-color: white">
              <thead>
                <tr>
                  <th>Libro</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>ISBN</td>
                  <td>Titulo</td>
                  <td>Autor</td>
                  <td>Editorial</td>
                  <td>Año de edición</td>
                  <td>Numero de paginas</td>
                  <td>Existencia</td>
                  <td>Ancho</td>
                  <td>Largo</td>
                  <td>Tipo</td>
                  <td>Fecha</td>
                </tr>
                <?php
                $Titulo2=$_POST["Titulo2"];
                  include("Conexion.php");
                  $query="SELECT * FROM libro WHERE Tit='$Titulo2'";
                  $Resul=$Conexion->query($query);
                  while($row=$Resul->fetch_assoc())
                  {
                ?>
                  <tr>
                    <td><?php echo $row['ISBN'];?> </td>
                    <td><?php echo $row['Tit'];?> </td>
                    <td><?php echo $row['Au'];?> </td>
                    <td><?php echo $row['Edi'];?> </td>
                    <td><?php echo $row['An_Ed'];?> </td>
                    <td><?php echo $row['NumPag'];?> </td>
                    <td><?php echo $row['Exis'];?> </td>
                    <td><?php echo $row['An'];?> </td>
                    <td><?php echo $row['Lar'];?> </td>
                    <td><?php echo $row['Tip'];?> </td>
                    <td><?php echo $row['Fec'];?> </td>
                  </tr>
                <?php
                  }
                ?>
              </tbody>
            </table>
          </div>
        </div>
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="/Biblioteca/js/materialize.min.js"></script>
      <script type="text/javascript" src="/Biblioteca/js/calendar.js"></script>
      <script type="text/javascript" src="/Biblioteca/js/Eventos.js"></script>
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