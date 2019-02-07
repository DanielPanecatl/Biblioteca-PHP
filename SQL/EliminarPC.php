<?php
	include ("Conexion.php");
	$IS=$_POST["Serie3"];
		$Insercion="DELETE FROM PC WHERE NoSerie='$IS'";
		$Resul=$Conexion ->query($Insercion);
		if($Resul)
		{
			echo"<script type=\"text/javascript\">alert('Registro eliminado correctamente !'); window.location='/Biblioteca/Pc.html';</script>";
		}
    else
    {
      echo"<script type=\"text/javascript\">alert('El registro no se elimino intente nuevamente
        !'); window.location='/Biblioteca/Pc.html';</script>";
    }
?>