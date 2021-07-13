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
				<h3 style="text-align:center">NUEVO REGISTRO</h3><br>
			</div>
			
			<form class="form-horizontal" method="POST" action="guardarCurso.php" enctype="multipart/form-data" autocomplete="off">

				<div class="form-group">
					<label for="numerodocumento" class="col-sm-2 control-label">Número Documento</label>
					<div class="col-sm-10">
						<input type="number" class="form-control" id="numerodocumento" name="numerodocumento" placeholder="Número Documento" required>
					</div>
				</div>
				
				<div class="form-group">
					<label for="primernombre" class="col-sm-2 control-label">Primer Nombre</label>
					<div class="col-sm-10">
						<input type="text" pattern="^[a-zA-Z]+$" class="form-control" id="primernombre" name="primernombre" placeholder="Primer Nombre" required>
					</div>
				</div>

				<div class="form-group">
					<label for="segundonombre" class="col-sm-2 control-label">Segundo Nombre</label>
					<div class="col-sm-10">
						<input type="text" pattern="^[a-zA-Z]+$" class="form-control" id="segundonombre" name="segundonombre" placeholder="Segundo Nombre">
					</div>
				</div>

				<div class="form-group">
					<label for="primerapellido" class="col-sm-2 control-label">Primer Apellido</label>
					<div class="col-sm-10">
						<input type="text" pattern="^[a-zA-Z]+$" class="form-control" id="primerapellido" name="primerapellido" placeholder="Primer Apellido" required>
					</div>
				</div>

				<div class="form-group">
					<label for="segundoapellido" class="col-sm-2 control-label">Segundo Apellido</label>
					<div class="col-sm-10">
						<input type="text" pattern="^[a-zA-Z]+$" class="form-control" id="segundoapellido" name="segundoapellido" placeholder="Segundo Apellido" required>
					</div>
				</div>

				<div class="form-group">
					<label for="telefono" class="col-sm-2 control-label">Teléfono</label>
					<div class="col-sm-10">
						<input type="number" class="form-control" id="telefono" name="telefono" placeholder="Télefono" required>
					</div>
				</div>

				<div class="form-group">
					<label for="direccion" class="col-sm-2 control-label">Correo</label>
					<div class="col-sm-10">
						<input type="email" class="form-control" id="correo" name="correo" placeholder="Correo" required>
					</div>
				</div>

				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<button type="submit" style="background:#4A9968" class="btn btn-primary">Guardar</button>
					</div>
				</div>
			</form>
		</div>
	</body>
</html>