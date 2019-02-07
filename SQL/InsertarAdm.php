<?php
	include ("Conexion.php");
	$Nom=$_POST["Nombre"];
	$Us=$_POST["NomUsu"];
	$Pas=$_POST["Pass"];
	$App=$_POST["ApellidoP"];
	$ApM=$_POST["ApellidoM"];

	$Pas1 = password_hash ($Pas, PASSWORD_DEFAULT);
	if($Pas==$Pas1)
	{
		$Insercion="INSERT INTO Administrador(Nombre,Usuario,Contra,ApellidoP,ApellidoM) 
		values ('$Nom','$Us','$Pas','$App','$ApM')";
		$Resul=$Conexion ->query($Insercion);
		if($Resul)
		{
			echo"<script type=\"text/javascript\">alert('Registro completo !'); window.location='/Biblioteca/Administrador.html';</script>";  
		}
		else
		{
			echo"<script type=\"text/javascript\">alert('El registro fallo intente nuevamente !'); window.location='/Biblioteca/Administrador.html';</script>";  
		}
	}
    else
    {
    	echo"<script type=\"text/javascript\">alert('Las contaseñas no coinciden intente de nuevamete'); window.location='/Biblioteca/Administrador.html';</script>";  
    }
?>