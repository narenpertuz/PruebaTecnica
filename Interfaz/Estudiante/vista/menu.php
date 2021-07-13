<?php
session_start();
if (!isset($_SESSION['ID_USUARIO'])) {
    header("Location: ../../../index.html");
}
require_once("../../../Datos/mdb/mdbUsuario.php");
require_once(__DIR__."/../../../Entidad/dao/UsuarioDAO.php");
?>
<!DOCTYPE html>
<html lang="es">
<head>
    
		<meta charset="utf-8">
		<title>Prueba Naren Pertuz</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="css/style.css" media="screen" rel="stylesheet" type="text/css" />
		<link href="iconic.css" rel="stylesheet" type="text/css" />
		<script src="js/sweet-alert.min.js"></script>
		<link rel="stylesheet" href="css/sweet-alert.css">
	    <link rel="stylesheet" href="css/material-design-iconic-font.min.css">
	    <link rel="stylesheet" href="css/normalize.css">
	    <link rel="stylesheet" href="css/bootstrap.min.css">
	    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	    <script>window.jQuery || document.write('<script src="js/jquery-1.11.2.min.js"><\/script>')</script>
	    <script src="js/modernizr.js"></script>
	    <script src="js/bootstrap.min.js"></script>
	    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
	    <script src="js/main.js"></script>
</head>

                <script type="text/javascript">		
		function hora(){
			var dia = ["domingo", "lunes","martes","miércoles","jueves","viernes","sábado"];
			var mes = ["enero","febrero","marzo","abril","mayo","junio","julio","agosto","septiembre","octubre","noviembre","diciembre"];
		
			 var fecha = new Date();
			 var mostrarFecha = dia[fecha.getDay()]+", "+fecha.getDate()+" de " +mes[fecha.getMonth()]+ " de "+fecha.getFullYear();
			 var horas = fecha.getHours();
			 var minutos = fecha.getMinutes();
			 var segundos = fecha.getSeconds();
			
				if (horas<10){
				    horas='0'+horas;
				}
				if(minutos<10){
				    minutos='0'+minutos;
				}
				if(segundos<10){
				    segundos='0'+segundos;
				}
				 document.getElementById('reloj').innerHTML=mostrarFecha+' | '+horas+':'+minutos+':'+segundos+'';
				 setTimeout('hora()',1000);
		};
	</script>	
<body onload="hora();">
	 <?php
                $usuarios = buscarUsuarioPorId($_SESSION['ID_USUARIO']); 
                ?>
	<nav>
		<ul class="menu">
			<li><a href="inicio.html" target="frame"><span class="iconic home"></span> Inicio</a></li>
			<li id="user"><a href="#"><span class="iconic magnifying-glass"></span> Usuarios</a>
				<ul>
					<li><a href="nuevoCurso.php" target="frame">Registrar usuario</a></li>
					<li><a href="indexCurso.php" target="frame">Consultar, modificar o eliminar usuario</a></li>
				</ul>
			</li>
			<li><a class="tooltips-general exit-system-button" data-href="../../../Negocio/accion/act_logout.php" data-placement="bottom">
                    <span class="iconic user"></span> Salir</a>
                </li>
			
			<li style="float: right; color: #222; box-shadow: inset 0px 0px 1px 1px rgb(229, 249, 249); border-radius: 10px; background: -webkit-gradient(linear, center top, center bottom, from(#ccc), to(#ededed)); background-image: linear-gradient(#ccc, #396058);"><a id="reloj"></a></li>
		</ul>
		<div class="clearfix"></div>
	</nav>
	<iframe name="frame" src="inicio.html" frameborder="0" allowfullscreen></iframe>
</body>
</html>