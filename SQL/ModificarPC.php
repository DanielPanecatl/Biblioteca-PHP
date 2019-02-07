<?php
	include ("Conexion.php");
	$Se1=$_POST["Serie2"];
	$Se=$_POST["Serie1"];
	$NuPc=$_POST["Num1"];
	$Fch=$_POST["FeR1"];

	$Consulta = $Conexion->query("SELECT * FROM pc WHERE NumE='$NuPC'");
	if ($Resul = mysqli_fetch_array($Consulta)) 
	{
		echo"<script type=\"text/javascript\">alert('El numero de pc ya esta registrado !'); window.location='/Biblioteca/Pc.html';</script>";
	}
	else
	{
		if ($NuPc>0 && $NuPc<=200) 
		{
			if (strlen($Se)<=11) 
			{
				$Insercion="UPDATE pc SET NoSerie='$Se', NumE='$NuPc',FeReg='$Fch'
				    WHERE NoSerie='$Se1'";
				$Resul=$Conexion ->query($Insercion);
				if($Resul)
				{
					echo"<script type=\"text/javascript\">alert('Modificaciones realizadas correctamente !'); window.location='/Biblioteca/Pc.html';</script>";
				}
				else
				{
					echo"<script type=\"text/javascript\">alert('Modificaciones incorrectas intenta nuevamente !'); window.location='/Biblioteca/Pc.html';</script>";
				}
			}
			else
			{
				echo"<script type=\"text/javascript\">alert('Las modificaciones no se realizaron intente nuevamente !'); window.location='/Biblioteca/Pc.html';</script>";
			}
		}
		else
		{
			echo"<script type=\"text/javascript\">alert('El numero de pc es incorrecto !'); window.location='/Biblioteca/Pc.html';</script>";
		}
	}

?>