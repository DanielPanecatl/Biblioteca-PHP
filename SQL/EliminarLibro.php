<?php
	include ("Conexion.php");
	$IS=$_POST["ISBN3"];
	$Insercion="DELETE FROM Libro WHERE ISBN='$IS'";
	$Resul=$Conexion ->query($Insercion);
	
	if($Resul)
	{
		echo"<script type=\"text/javascript\">alert('registro eliminado correctamente!'); window.location='/Biblioteca/libro.html';</script>"; ;
	}
    else
    {
      echo"<script type=\"text/javascript\">alert('El registro no se elimino intente nuevamente!'); window.location='/Biblioteca/libro.html';</script>"; 
    }
?>