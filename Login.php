<?php
	session_start();

	$User1=$_POST["Usuario"];
	$Pass1=$_POST["Contraseña"];
	include("Conexion.php");
	$Consulta = $Conexion->query("SELECT * FROM administrador WHERE Usuario='".$User1."' AND Contra='".$Pass1."'");
	if($Resul = mysqli_fetch_array($Consulta))
	{
		$_SESSION["u_User1"] = $User1;
		header("Location: Inicio.php");
	}
	else
	{
		echo"<script type=\"text/javascript\">alert('Contraseña o usuario invalido !'); window.location='index.html';</script>";
	}
?>