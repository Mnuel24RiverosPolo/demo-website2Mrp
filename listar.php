<?php
include("conexion.php");
$con = conexion();

$sql = "select * from persona";
$resultado = pg_query($con, $sql);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Listado de Personas</title>
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
</head>
<body>
	<div class="container">
		<h1>Listado de Personas</h1>
		<table class="table table-striped">
			<thead>
				<tr>
			
					<th>Documento</th>
					<th>Nombre</th>
					<th>Apellido</th>
					<th>Dirección</th>
					<th>Celular</th>
				</tr>
			</thead>
			<tbody>
				<?php while($fila = pg_fetch_assoc($resultado)) { ?>
					<tr>
						<td><?php echo $fila['documento']; ?></td>
						<td><?php echo $fila['nombre']; ?></td>
						<td><?php echo $fila['apellido']; ?></td>
						<td><?php echo $fila['direccion']; ?></td>
						<td><?php echo $fila['celular']; ?></td>
					</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
	<!-- Agregamos los scripts de Bootstrap -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
</body>
</html>
