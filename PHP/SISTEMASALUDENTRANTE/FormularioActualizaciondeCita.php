<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php 
session_start();
$varIdentidad=$_SESSION['variableIdentidad'];
$nombreCita = @$_POST['NombreUsuario'];
$FechaCitaRecibida = @$_POST['FechaRecibidaActualizar'];

$HoraCitaRecibida = @$_POST['HoraRecibidaActualizar'];

if (isset($_POST['FechaRecibidaActualizar'])) {
    $fechaCita = $_POST['FechaRecibidaActualizar'];
    $HoraCitaRecibida = $_POST['HoraRecibidaActualizar'];
} else {
    $fechaCita = '';  // Valor por defecto si no se recibe ninguna fecha
}
?>

<!-- Mostrar la fecha dentro de un input -->
<label for="fechaCita">

Esta es la fecha que has seleccionado
para modificar

</label>
<input type="text" id="fechaCita" name="fechaCita" value="<?php echo htmlspecialchars($fechaCita); ?>" readonly>

<input type="text" id="fechaCita" name="fechaCita" value="<?php echo htmlspecialchars($HoraCitaRecibida); ?>" readonly>









</body>
</html>