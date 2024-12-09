<?php
$EmailREcibidaFormulario = @$_GET['Emailcuentarecuperar'];

include("ConexionBaseDatos.php");


$sql = "SELECT * FROM registropersonal where EmailPaciente='$EmailREcibidaFormulario'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
while($row = $result->fetch_assoc()) {

header("Location:ProcesoRecuperado.php?variableEnviadaEmail=$EmailREcibidaFormulario");


}} else {
  echo "0 results";
}
$conn->close();











































?>