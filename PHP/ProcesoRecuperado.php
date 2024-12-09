<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
<?php
$emailrecibido=@$_GET['variableEnviadaEmail'];
include("ConexionBaseDatos.php");
$sql = "SELECT * FROM registropersonal where EmailPaciente='$emailrecibido'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
while($row = $result->fetch_assoc()) {

?>


<a href="sms:+57 3144796026">Envíame un SMS</a>





















































































































































<?php
echo "dale  click";
?>



<?php
}} else {
echo "0 results";
}
$conn->close();
?>
</body>
</html>