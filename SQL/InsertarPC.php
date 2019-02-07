<?php
	include ("Conexion.php");
	$NoS=$_POST["Serie"];
	$NoPC=$_POST["Num"];
	$Fch=$_POST["FeR"];
	$Consulta = $Conexion->query("SELECT * FROM pc WHERE NumE='$NoPC'");
	if ($Resul = mysqli_fetch_array($Consulta)) 
	{
		echo"<script type=\"text/javascript\">alert('El numero de pc ya esta registrado !'); window.location='/Biblioteca/Pc.html';</script>";
	}
	else
	{
		if ($NoPC>0 && $NoPC<=200) 
		{
			if (strlen($NoS)<=11) 
			{
				$Insercion="INSERT INTO PC (NoSerie,NumE,FeReg) values ('$NoS','$NoPC','$Fch')";
		        $Resul=$Conexion ->query($Insercion);
				if($Resul)
				{
					echo"<script type=\"text/javascript\">alert('Registro completo !'); window.location='/Biblioteca/Pc.html';</script>";
				}
				else
				{
					echo"<script type=\"text/javascript\">alert('La fecha ingresada es incorrecta !'); window.location='/Biblioteca/Pc.html';</script>";
				}
			}
			else
			{
				echo"<script type=\"text/javascript\">alert('El numero de serie sobre paso el tamaño !'); window.location='/Biblioteca/Pc.html';</script>";
			}
		}
		else
		{
			echo"<script type=\"text/javascript\">alert('El numero de pc es incorrecto !'); window.location='/Biblioteca/Pc.html';</script>";
		}
	}
?>