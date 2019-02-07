<?php
	include ("Conexion.php");
	$IS=$_POST["ISBN12"];
	$NoCr=$_POST["Cre"];
	$Fech=$_POST["Fe"];
	$Ti=$_POST["Tipo"];
	$A="Foraneo";
	$B="Local";
	if (strlen($IS)>=10 && strlen($IS)<=13) 
	{
		if (strcmp($A, $Ti)==0 || strcmp($B, $Ti)==0 ) 
		{
			if (strlen($NoCr)>=10 && strlen($NoCr)<=11)
			{
				$Redu="UPDATE libro SET Exis=Exis-1 WHERE ISBN='$IS'";
				$Resu=$Conexion ->query($Redu);
				$Insercion="INSERT INTO prestamolibro(ISBN,NoCreedencial,Fecha,Tipo) values ('$IS','$NoCr','$Fech','$Ti')";
				$Resul=$Conexion ->query($Insercion);
				if($Resul)
				{
					echo"<script type=\"text/javascript\">alert('Registro completo !'); window.location='/Biblioteca/prestamolibro.html';</script>"; 
				}
				else
				{
					echo"<script type=\"text/javascript\">alert('Fecha incorrecta!'); window.location='/Biblioteca/prestamolibro.html';</script>"; 
				}
			}
			else
			{
				echo"<script type=\"text/javascript\">alert('Numero de matricula incorrecto intente nuevamente!'); window.location='/Biblioteca/prestamolibro.html';</script>"; 
			}
		}
		else
		{
			echo"<script type=\"text/javascript\">alert('Tipo de prestamo incorrecto verifique !'); window.location='/Biblioteca/prestamolibro.html';</script>";
		}
	}
	else
	{
		echo"<script type=\"text/javascript\">alert('ISBN incorrecto o inexistente !'); window.location='/Biblioteca/prestamolibro.html';</script>";
	}
?>