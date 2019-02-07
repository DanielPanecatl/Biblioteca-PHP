<?php
	include ("Conexion.php");
	$IS1=$_POST["ISBN2"];
	$IS=$_POST["ISBN1"];
	$Tit=$_POST["Titulo1"];
	$Aut=$_POST["Autor1"];
	$Edi=$_POST["Editorial1"];
	$AñEdi=$_POST["AñoE1"];
	$NumPagi=$_POST["NumP1"];
	$Existencia=$_POST["Exi1"];
	$Anc=floatval($_POST["Ancho1"]);
	$La=floatval($_POST["Largo1"]);
	$Ti=$_POST["Tip1"];
	$Fecha=$_POST["Fe1"];
	$A="Donacion";
	$B="Compra";
	if (strcmp($A, $Ti)==0 || strcmp($B, $Ti)==0 ) 
	{
		if (strlen($IS)>=10 && strlen($IS)<=13) 
		{
			if ($Existencia>0) 
			{
				$Insercion="UPDATE libro
				SET ISBN='$IS', Tit='$Tit', Au='$Aut',Edi='$Edi',An_Ed='$AñEdi',NumPag='$NumPagi',Exis='$Existencia',An='$Anc',Lar='$La',Tip='$Ti',Fec='$Fecha'
				    WHERE ISBN='$IS1'";
				$Resul=$Conexion ->query($Insercion);
				if($Resul)
				{
					echo"<script type=\"text/javascript\">alert('Modificaciones realizadas correctamente!'); window.location='/Biblioteca/libro.html';</script>"; 
				}
				else
				{
					echo"<script type=\"text/javascript\">alert('Las modificaciones no se realizaron intente nuevamente!'); window.location='/Biblioteca/libro.html';</script>"; 
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