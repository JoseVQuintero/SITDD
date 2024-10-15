<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>RED Registro Estatal de Deporte</title>
  <link rel="stylesheet" href="css/screen.css" type="text/css" media="screen, projection">
  <link rel="stylesheet" href="css/print.css" type="text/css" media="print">
  <!--[if IE]><link rel="stylesheet" href="css/ie.css" type="text/css" media="screen, projection"><![endif]-->
  <script type="text/javascript" src="js/jquery-1.3.1.js"></script>
  <script type='text/javascript' src='js/jquery.highlightFade.js'></script>
  <script type="text/javascript" src="js/jquery-ui-personalized-1.6rc6.js"></script> 
  <script type='text/javascript' src='js/jquery.overlay.js'></script>
  <script type='text/javascript' src='js/controller-help.js'></script>
</head>
<body>
<div class="container">
<div id="header-login"><img alt="QSERVICE - Integrate" src="img/logo.png" style="vertical-align:middle;" /><h2>Acceso Privado</h2></div>
<div id="login-box">
	<?php
		if(isset($_GET["action"])){echo ($_GET["action"]=="bye")?"<div class=\"notice\">Has Salido del Sistema.</div>":"<div class=\"error\">Error Usuario/Contrase&ntilde;a</div>";}
    ?>
    <form action="scripts/session-auth.php" method="post">    
    <fieldset class="login-box-fieldset">
        <legend>Ingresa tus Datos</legend>
        <p><label for="user">Usuario</label><br /><input class="title" id="user" name="user" type="text" /></p>
        <p><label for="pass">Contrase&ntilde;a</label><br /><input class="title" id="pass" name="pass" type="password" /></p>
        <p><input id="boton" name="boton" type="submit" value="Entrar" /></p>
    </fieldset>    
    </form>
</div>
    <div class="overlay" id="overlay">
	<div style="width:100%; height:auto; color:#FFFFFF; text-align:center; font:Geneva, Arial, Helvetica, sans-serif; font-size:12px;">Manual de Usuario (Multimedia)<br />Control Automotriz</div>
	<ul class="link_ul" style="list-style:none; color:#FFFFFF; margin-left:15px;">
	    <li><a target="_blank" href="help/acceso-sistema/acceso-sistema.html" >Acceso al Sistema</a></li>
		<li><a target="_blank" href="help/menu-principal/menu-principal.html" >Men&uacute; Principal</a></li>
		<li>Registro de Participantes
		<ul>
			<li><a target="_blank" href="help/reg-participante-part1-(datos-requeridos-precarga-de-participantes)/reg-participante-part1.html" >Datos Requeridos y Precarga de Participantes</a></li>
		    <li><a target="_blank" href="help/reg-participante-part2(datos-del-registro)/reg-participante-part2(datos-del-registro).html" >Datos del Registro</a></li>
		    <li><a target="_blank" href="help/reg-participante-part3(datos-de-categoria)/reg-participante-part3(datos-de-categoria).html" >Datos de Categor&iacute;a</a></li>
		    <li><a target="_blank" href="help/reg-participante-part4(datos-generales)/reg-participante-part4(datos-generales).html" >Datos Generales</a></li>
		    <li><a target="_blank" href="help/reg-participante-part5(datos-adicionales)/reg-participante-part5(datos-adicionales).html" >Datos Adicionales</a></li>
		    <li><a target="_blank" href="help/reg-participante-part6(grabarparticipantes)/reg-participante-part6(grabar-participantes).html" >Grabar Participante</a></li>
		</ul>
		</li>
	</ul>
	</div>
    <div id="footer">
   		<p>&copy; <?php echo date("Y"); ?> <a title="- Empresa Autorizada -" href="#" target="_blank">QSERVICE - Integrate</a> &reg;  - Todos los Derechos Reservados - Desarrollado por QSERVICE - Integrate</p><p><a title="Ayuda (Manual de Usuario)" href="javascript:mostrar_help();">Ayuda Manual de Usuario</a></p>
	</div></div>

</body>
</html>