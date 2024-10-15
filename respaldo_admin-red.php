<?php 
	include("scripts/include/dbcon.php");
    require "scripts/clases/class.dbsession.php";
	include("scripts/clases/class.mysql.php");			
	
    $session = new dbsession();
	if( !isset($_SESSION["pase"]) ||  $_SESSION["pase"]!=="si")
	{
		header("Location: index.php");
	}

	include("scripts/clases/class.generar_eventos.php");

	
	function generaeventos($id,$idevento)
    {  
	  $generar_eventos = new generar_eventos();	  
      echo($generar_eventos->extraerEventos($id,$idevento));   
    }
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>RED | Registro Estatal de Deporte - QSERVICE - Integrate</title>
  <link rel="stylesheet" href="css/screen.css" type="text/css" media="screen, projection">
  <link rel="stylesheet" href="css/print.css" type="text/css" media="print">  
  <script type="text/javascript" src="js/jquery-1.3.1.js"></script>
  <script type="text/javascript" src="js/jquery.blockUI.js" ></script>
  
</head>
<body>
<div class="container">	
    <div id="header">
            <div id="user_id">Bienvenido <?php echo $_SESSION["nombre"]; ?> | <a title="salir del sistema" href="scripts/close-session.php">Salir</a></div><br /><div id="nombre_evento" style="float:right; margin-right:20px;"></div>
            <h1><img alt="Moms Book" src="img/logo.png" /> Control Automotriz</h1>
    </div>
    
    <div id="main">
        <ul id="menu">
        <?php
			include("scripts/menu-principal.php");
        ?>
        </ul>
        <div id="form">

        </div>       
    </div> 
    
    <div id="footer">
   		<p>&copy; <?php echo date("Y"); ?> <a title="Agendas para Mam&aacute;" href="http://www.momsbook.com.mx/" target="_blank">QSERVICE - Integrate</a> &reg;  - Todos los Derechos Reservados - Desarrollado por <a title="Reality in a digital world" href="#" target="_blank">- Empresa Autorizada -</a></p>
	</div>
	
	<div style="display:none;" id="evento_desplegado">
	<div class="span-18" style="text-align:left;">
	<p>
	<label for="evento">Selecciona el Evento: </label>
	<?php generaeventos("evento",""); ?>	
    <script type="text/javascript">    
       $('#evento').css('width','700px') 
	</script>
    			
	</p>
	</div>
	</div>	
    

    
</div>    
<script type="text/javascript">
$().ready(function() { 
        $.blockUI({message:  $('#evento_desplegado')});	
		
		$('#evento').change(function(){		
		    var evento = $('#evento').val(); 
			var nombreevento = $("#evento option[value="+$('#evento').val()+"]").text();
			$('#nombre_evento').html(nombreevento);
			$.ajax({
			 type: "POST",
			 url: "scripts/GeneraSessionEvento.php",
			 processData: true,
			 dataType: "json",		 
			 data: "evento="+evento+"&nombreevento="+nombreevento,		 
			 success: $.unblockUI()		 
		   }); 
	    });	
		
		
});
</script>
	   
</body>
</html>
