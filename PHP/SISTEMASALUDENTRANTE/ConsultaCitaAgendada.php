<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>BEAUTIFUL - BODY</title>
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">




<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400..900&display=swap" rel="stylesheet">




<!-- CODIGO - GENERAL - BOOTSTRAP !-->  
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<link href="IMAGENESGENERAL/ESCUDO/logo.png" type="image/x-icon" rel="shortcut icon"/>
<link href="https://fonts.googleapis.com/css2?family=Diplomata+SC&family=Herr+Von+Muellerhoff&family=Open+Sans&display=swap" rel="stylesheet">



<!--  ICONOS GENERALES  !-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta name='viewport' content='width=device-width, initial-scale=1'>
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>



<h1 class="TituloEncontrarCitaAgendada">Aqui encontraras tus citas agendadas</h1>





<?php
// Iniciar sesión
session_start();
$varIdentidad=$_SESSION['variableIdentidad'];
include('ConexionBaseDatos.php');

$sql = "SELECT * FROM registrocitas";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
?>



<style type="text/css">
  
.TituloEncontrarCitaAgendada{
position: relative;
text-align: center;




}









































#TablaConsulta{
position: relative;
width: 90%;
top: 2.7em;
margin: 0 auto;
display: block;
border: 1px solid #000;
}

#TablaConsulta th{
width: 37em;
height: 1em;
font-size: 1.5em;
font-weight: bold;
text-align: center;
border: 1px solid #000;
padding:1em;
cursor: pointer;
}

#TablaConsulta td{
width: 37em;
height: 4em;
font-size: 1.1em;

text-align: center;
border: 1px solid #000;
padding: 1em;
}
</style>




<table class="table table-hover" id="TablaConsulta">


<tr><th>FECHA</th><th>HORA</th></tr>

<?php




while($row = $result->fetch_assoc()) {
?>


<?php
 echo "<tr><td>" . $row["FechaCita"]. "</td><td>" . $row["HoraCita"]. " </td></tr>";




}} else {
  echo "0 results";
}
$conn->close();







?>

</body>
</html>
