<?php
	
	require 'conexion.php';

	$id = $_GET['id'];
	
	$sql = "DELETE FROM curso WHERE idregistro = '$id'";
	$resultado = $mysqli->query($sql);
	
?>

<html lang="es">
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/bootstrap-theme.css" rel="stylesheet">
		<link href="css/dataTables.min.css" rel="stylesheet">
		<link href="css/dataTables.css" rel="stylesheet">
		<script src="js/jquery-3.1.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>	
		<script src="js/dataTables.min.js"></script>
		<script src="js/dataTables.js"></script>
		<script src="js/npm.js"></script>
		<link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/login.css"/>
	</head>
	
	<body class="full-cover-background">
		<div class="container">
			<div class="row">
				<div class="row" style="text-align:center">
				<?php if($resultado) { ?>
				<h3>REGISTRO ELIMINADO</h3>
				<?php } else { ?>
				<h3>ERROR AL ELIMINAR</h3>
				<?php } ?>
				
				<a href="indexCurso.php" class="btn btn-primary" style="background: #4A9968">Regresar</a>
				
				</div>
			</div>
		</div>
	</body>
</html>
