<?php
	include("scripts/include/dbcon.php");
    require "scripts/clases/class.dbsession.php";
    $session = new dbsession();
	if( !isset($_SESSION["pase"]) ||  $_SESSION["pase"]!=="si")
	{
		include("login.php");
	}
	else	
	{ 
		header("Location: modulos/admin-sitd.php");		
		exit;
	}
?>