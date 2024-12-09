<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
include("../CONEXIONBD/CitasMEdicasBD.php");
session_start();
$_SESSION['IdInicio']=$_POST['IdInicio'];
$Identidadgeneral = @$_POST['IdInicio'];
$sql = "SELECT * FROM citaspacientesmadre where Identificacion='$Identidadgeneral'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
if($row = $result->fetch_assoc()) {
$Identidad="".$row["Identificacion"]."";
if ($Identidadgeneral=$Identidad) {

  header("Location:../PHP/InicioSesionPaciente.php");
echo " ".$_SESSION['IdInicio'];





}
} else {
    echo "0 results";
}
$conn->close();
}
else{
	echo "pailas la cagaste";
}
?>
</body>
</html>