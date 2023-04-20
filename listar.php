<?php
include("conexion.php");
$con = conexion();

$sql = "select * from persona";
$resultado = pg_query($con, $sql);

while ($fila = pg_fetch_assoc($resultado)) {
    echo "Documento: " . $fila['documento'] . "<br>";
    echo "Nombre: " . $fila['nombre'] . "<br>";
    echo "Apellido: " . $fila['apellido'] . "<br>";
    echo "Dirección: " . $fila['direccion'] . "<br>";
    echo "Celular: " . $fila['celular'] . "<br><br>";
}

pg_close($con);
?>
