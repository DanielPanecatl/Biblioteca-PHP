<?php
	include ("Conexion.php");
	$IS=$_POST["Usu"];
		$Insercion="DELETE FROM Administrador WHERE Usuario='$IS'";
		$Resul=$Conexion ->query($Insercion);
		if($Resul)
		{
			echo"<script type=\"text/javascript\">alert('Usuario eliminado correctamente !'); window.location='/Biblioteca/Administrador.html';</script>"; 
		}
    else
    {
      echo"<script type=\"text/javascript\">alert('El Proceso fallo intente nuevamente !'); window.location='/Biblioteca/Administrador.html';</script>"; 
    }
?>