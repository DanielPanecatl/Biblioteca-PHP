<?php
	include ("Conexion.php");
	$UsA=$_POST["User"];
	$NomB=$_POST["Nombre1"];
	$Us=$_POST["NomUsu1"];
	$Pas=$_POST["Pass2"];
	$Pas1=$_POST["Pass3"];
	$App=$_POST["ApellidoP1"];
	$ApM=$_POST["ApellidoM1"];
	if($Pas==$Pas1)
	{
		$Insercion="UPDATE Administrador
		SET Nombre='$NomB',Usuario='$Us',Contra='$Pas',ApellidoP='$App',ApellidoM='$ApM'
		WHERE Usuario='$UsA'";
		$Resul=$Conexion ->query($Insercion);
		if($Resul)
		{
			echo"<script type=\"text/javascript\">alert('Cambios realizados !'); window.location='/Biblioteca/Administrador.html';</script>"; 
		}
		else
		{
			echo"<script type=\"text/javascript\">alert('No se efectuaron las modificaciones intente nuevamete !'); window.location='/Biblioteca/Administrador.html';</script>";
		}
	}
    else
    {
    	echo"<script type=\"text/javascript\">alert('Las contaseñas no coinciden intente de nuevamete'); window.location='/Biblioteca/Administrador.html';</script>";
    }
?>