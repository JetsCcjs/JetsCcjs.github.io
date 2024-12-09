<!DOCTYPE html>
<html>
<head>
<title></title>
</head>
<body>
<?php
$VariableEmail = @$_POST['EmailEnviado'];
$VariablePassword = @$_POST['PassEnviado'];
include('ConexionBaseDatos.php');



if ($VariableEmail=='amato_34@hotmail.com') {

$consultaAdministrativa = "SELECT * FROM registropersonal where EmailPaciente='$VariableEmail'";
$result = $conn->query($consultaAdministrativa);
if ($result->num_rows == 1) {
while($row = $result->fetch_assoc()) {
header("Location:../PARTEADMINISTRATIVA/IndexAdministrativo.php/?v1=$VariableEmail&v2=$VariablePassword");

}} else {
echo "pailas";
}
}







else{
$sql = "SELECT * FROM registropersonal where EmailPaciente='$VariableEmail'";
$result = $conn->query($sql);
if ($result->num_rows == 1) {
while($row = $result->fetch_assoc()) {
header("Location:../PAGINAPRINCIPALPACIENTES/IndexPacientePaginaPrincipal.php/?v1=$VariableEmail&v2=$VariablePassword");
}} else {
echo "pailas";
}




}

























$conn->close();


?>
</body>
</html>