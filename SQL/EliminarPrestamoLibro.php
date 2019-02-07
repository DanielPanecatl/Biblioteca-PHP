<?php
	include ("Conexion.php");
	$IS=$_POST["NumP"];
	$Insercion="DELETE FROM PrestamoLibro WHERE IDPre='$IS'";
	$Resul=$Conexion ->query($Insercion);
	if($Resul)
	{
		echo"<script type=\"text/javascript\">alert('Registro eliminado correctamente !'); window.location='/Biblioteca/prestamolibro.html';</script>";
	}
    else
    {
      echo"<script type=\"text/javascript\">alert('El registro no se elimino intente nuevamente !'); window.location='/Biblioteca/prestamolibro.html';</script>";
    }
?>