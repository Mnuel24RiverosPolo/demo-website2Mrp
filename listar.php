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
<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom box-shadow">
      <h5 class="my-0 mr-md-auto font-weight-normal"><img src="index2.png" style="width: 30px; position: absolute;"> <span style="position: relative; left: 35px;">Index</span></h5>
      <nav class="my-2 my-md-0 mr-md-3">
        <a class="p-2 text-dark" href="listar.php">Personas</a>
        <a class="p-2 text-dark" href="#">Registrar</a>
        <a class="p-2 text-dark" href="#">Actualizar</a>
        <a class="p-2 text-dark" href="#">Eliminar</a>
      </nav>
    </div>

	<div class="container">
        <div class="container px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
        <h1 class="display-4">Personas Regitradas</h1>
        <p class="lead">PostgreSQL + PHP</p>
        </div>
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
        <footer class="pt-4 my-md-5 pt-md-5 border-top">
        <div class="row">
          <div class="col-12 col-md">
            <img class="mb-2" src="https://www.svgrepo.com/show/508391/uncle.svg" alt="" width="24" height="24">
            <small class="d-block mb-3 text-muted">&copy; 2023-1</small>
          </div>
        </div>
      </footer>
	</div>
	<!-- Agregamos los scripts de Bootstrap -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
</body>
</html>
