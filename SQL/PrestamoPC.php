<?php
	include ("Conexion.php");
	$NoSe=$_POST["Serie1"];
	$NoCr=$_POST["Cre"];
	$Obs=$_POST["textarea1"];
	$Fch1=$_POST["Fe2"];
	if (strlen($NoSe)>=9 && strlen($NoSe)<=15)
	{
		if (strlen($NoCr)>=10 && strlen($NoCr)<=11) 
		{
			if (strlen($Obs)<=150) 
			{
				$Insercion="INSERT INTO prestamopc (NoSerie,NoCreedencial,Obse,Fec) values ('$NoSe','$NoCr','$Obs','$Fch1')";
				$Resul=$Conexion ->query($Insercion);
				if($Resul)
				{
					echo"<script type=\"text/javascript\">alert('Registro completo !'); window.location='/Biblioteca/prestamopc.html';</script>";
				}
				else
				{
					echo"<script type=\"text/javascript\">alert('Fecha Incorrecta !'); window.location='/Biblioteca/prestamopc.html';</script>";
				}
			}
			else
			{
				echo"<script type=\"text/javascript\">alert('El campo de observacion contiene mas de 150 caracteres !'); window.location='/Biblioteca/prestamopc.html';</script>";
			}
		}
		else
		{
			echo"<script type=\"text/javascript\">alert('Numero de matricula incorrecto !'); window.location='/Biblioteca/prestamopc.html';</script>";
		}
	}
	else
	{
		echo"<script type=\"text/javascript\">alert('Numero de serie incorrecto !'); window.location='/Biblioteca/prestamopc.html';</script>";
	}
?>