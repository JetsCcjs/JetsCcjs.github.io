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



<meta name='viewport' content='width=device-width, initial-scale=1'>
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>


   <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


</head>
<body>



<h1 class="TituloEncontrarCitaAgendada">Aqui encontraras tus citas agendadas</h1>





<?php
// Iniciar sesión
session_start();
$varIdentidad=$_SESSION['variableIdentidad'];
include('ConexionBaseDatos.php');

$sql = "SELECT * FROM  registrocitas where IdentidadPersonal='$varIdentidad'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
?>



<style type="text/css">
  
.TituloEncontrarCitaAgendada{
position: relative;
text-align: center;




}



.glyphicon-share {
  color: white; /* Color del ícono */
  background-color: #000; /* Color de fondo */
  padding: 10px; /* Espacio alrededor del ícono */
  border-radius: 50%; /* Para hacerlo circular, opcional */
}




























#TablaConsulta{
position: relative;
width: 70%;
top: 3.5em;
margin: 0 auto;
display: block;
border: 1px solid #000;
}

#TablaConsulta th{
width: 27em;
height: 1em;
font-size: 1.5em;
font-weight: bold;
text-align: center;
border: 1px solid #000;
padding:1em;
cursor: pointer;
}

#TablaConsulta td{
width: 27em;
height: 4em;
font-size: 1.1em;
text-align: center;
border: 1px solid #000;
padding: 1em;
}



#TablaConsulta button{
border: none;
color: #000;
font-size: 1.5em;

}

</style>




<table class="table table-hover" id="TablaConsulta">


<tr>
<th>FECHA</th>
<th>HORA</th>
<th>MODIFICAR</th>
</tr>

<?php
while($row = $result->fetch_assoc()) {
?>


<?php
$variableFecha="".$row["FechaCita"]."";
$variableHora="".$row["HoraCita"]."";

$variableCodigoID="".$row["ID"]."";


?>
<tr>
    <form action="ActualizarCita.php" method="POST">
        <td><?php echo $variableFecha; ?></td>
        <td><?php echo $variableHora; ?></td>
        <td>
<input type="hidden" name="fecha" value="<?php echo $variableFecha; ?>">

<input type="hidden" name="hora" value="<?php echo $variableHora; ?>">
            <!-- Asegúrate de enviar el ID para identificar la cita -->

<input type="hidden" name="CodigoElegido" value="<?php echo $variableCodigoID; ?>">


    <button type="submit">
      <span class="glyphicon glyphicon-play-circle">
       </span>
            </button>




        </td>
    </form>
</tr>












<?php
}} else {
  echo "0 results";
}
$conn->close();







?>

</body>
</html>
