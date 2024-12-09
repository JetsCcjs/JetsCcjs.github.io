<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
include('ConexionBaseDatos.php');

$sql = "SELECT * FROM registrocitas";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
if($row = $result->fetch_assoc()) {

// ESTE ES EL ESPACIO DE LAS VARIABLES DELFORMULARIO ANTERIOR //
$variableFechaActualizar = $_POST["Fecha"];
$variableHorActualizar = $_POST["CampoHora"];

$variableFecha = $row["FechaCita"]; 
$variableHora = $row["HoraCita"]; 

// Actualizar la fecha y la hora donde coincidan tanto la fecha como la hora actuales
$Actualizar = "UPDATE registrocitas 
               SET FechaCita='$variableFechaActualizar', HoraCita='$variableHorActualizar' 
               WHERE FechaCita='$variableFecha' AND HoraCita='$variableHora'";

if ($conn->query($Actualizar) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}












}} else {
  echo "0 results";
}
$conn->close();


























































?>
</body>
</html>