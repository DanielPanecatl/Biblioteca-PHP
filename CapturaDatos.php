<?php
	include ("Conexion.php");
	$IS=$_POST["ISBN"];
	$Tit=$_POST["Titulo"];
	$Aut=$_POST["Autor"];
	$Edi=$_POST["Editorial"];
	$AñEdi=$_POST["AñoE"];
	$NumPagi=$_POST["NumP"];
	$Existencia=$_POST["Exi"];
	$Anc=floatval($_POST["Ancho"]);
	$La=floatval($_POST["Largo"]);
	$Ti=$_POST["Tip"];
	$Fecha=$_POST["Fe"];
	$A="Donacion";
	$B="Compra";
	if (strcmp($A, $Ti)==0 || strcmp($B, $Ti)==0 ) 
	{
		if (strlen($IS)>=10 && strlen($IS)<=13) 
		{
			if ($Existencia>0) 
			{
				$Insercion="INSERT INTO libro (ISBN,Tit,Au,Edi,An_Ed,NumPag,Exis,An,Lar,Tip,Fec) values ('$IS','$Tit','$Aut','$Edi','$AñEdi','$NumPagi','$Existencia','$Anc','$La','$Ti','$Fecha')";
				$Resul=$Conexion ->query($Insercion);
				if($Resul)
				{
					echo"<script type=\"text/javascript\">alert('Registro completo !'); window.location='libro.html';</script>";  
				}
				else
				{
					echo"<script type=\"text/javascript\">alert('La Fecha es incorrecta'); window.location='libro.html';</script>";
				}
		    }
		    else
		    {
		    	echo"<script type=\"text/javascript\">alert('El campo Existencia no puede ser menor a 0 intente nuevamente!'); window.location='/Biblioteca/libro.html';</script>"; 
		    }
		}
		else
		{
			echo"<script type=\"text/javascript\">alert('El ISBN es invalido debe contener entre 10 y 13 digitos!'); window.location='/Biblioteca/libro.html';</script>";
		}
	}
	else
	{
		echo"<script type=\"text/javascript\">alert('El tipo de libro es incorrecto intente nuevamente!'); window.location='/Biblioteca/libro.html';</script>";
	}
?>