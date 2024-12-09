

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









<?php
include('ConexionBaseDatos.php');
?>
<style type="text/css">
  
.TituloEncontrarCitaAgendada{
position: relative;
text-align: center;
top: 2em;
}

.FormularioActualizarCitaSeleccionada{
position: relative;
float: left;
margin-left: 0.5em;
width: 40em;
height: 18em;
border: 2px solid #000;
top: 11em;
}

.FechaSeleccionada{
position: relative;
float: left;
margin-left: 4em;
top:3em;
}


.HoraSeleccionada {
position: relative;
float: right;
margin-right: 4em;
top:3em;
}

.IconoFlechaAbajo{
position: relative;
float: left;
left: 1em;
font-size: 2em;
text-align: center;
top: 8.3em;
}

#BTNActualizar {
position: relative;
width: 15em;
height: 4.3em;
margin: 0 auto;
font-size: 1.1em;
display: block;
  border-radius: 4px;
  background-color: #1e88e5;
  border: none;
  color: #FFFFFF;
  text-align: center;
  padding: 20px;
  transition: all 0.5s;
  top: 7em;
}

#BTNActualizar span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

#BTNActualizar span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

#BTNActualizar:hover span {
  padding-right: 25px;
}

#BTNActualizar:hover span:after {
  opacity: 1;
  right: 0;
}














</style>

<?php
include('ConexionBaseDatos.php');
session_start();
$varIdentidad = $_SESSION['variableIdentidad'];
// DATOS RECIBIDOS DEL FORMULARIO //
$VariabledelaFECHARecibida=@$_POST["fecha"];
$VariabledelaHORARecibida=@$_POST["hora"];


$CodigoID=@$_POST["CodigoElegido"];




if ($_SERVER["REQUEST_METHOD"] == "POST") {



$sql = "SELECT * FROM registrocitas where IdentidadPersonal='$varIdentidad'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
if($row = $result->fetch_assoc()) {



?>



<style type="text/css">
  



#VariablesModalRecibidas {
position: relative;
width: 28em;
float: left;
margin-left: 3em;
}

#CuerpoVariablesModalRecibidas {
width: 100%;
height: 23em;
}


.ContenidoFechaRegistrada{
text-align: center;
}

.ContenidoHoraRegistrada {
text-align: center;
top: 4em;
}




.ContenidoFecha{
position: relative;
float: left;
margin-left: 2em;
width: 24em;
height: 15em;
border: 1px solid #000;
text-align: center;
}

.ContenidoFecha input{
position: relative;
margin: 0 auto;
display: block;
text-align: center;
width: 18em;
height: 3.5em;
top: 3em;
}

.ContenidoFecha p{
position: relative;
top: 4em;
text-align: center;
}

.ContenidoFecha label{
position: relative;
top: 2em;
text-align: center;
}




.ContenidoHora {
position: relative;
float: right;
margin-right: 2em;
width: 24em;
height: 15em;
border: 1px solid #000;
text-align: center;
}


.ContenidoHora select{
position: relative;
margin: 0 auto;
display: block;
text-align: center;
width: 18em;
height: 3.5em;
top: 3em;
}

.ContenidoHora p{
position: relative;
top: 4em;
text-align: center;
}

.ContenidoHora label{
position: relative;
top: 2em;
text-align: center;
}



#ModalModificacionAgenda{
position: relative;
width: 55em;
float: right;
margin-right: 3em;
}

#CuerpoModalModificacionAgenda{
width: 100%;
height: 18em;
}







</style>



<div class="modal-dialog" id="VariablesModalRecibidas">
    
      <!-- Modal content-->
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal">&times;</button>
<h4 class="modal-title">Modal Header</h4>
</div>
<div class="modal-body" id="CuerpoVariablesModalRecibidas">
       

<div class="ContenidoFechaRegistrada">
<p>Esta es la fecha que esta registrado en el sistema.
<br>
 <?php echo "$VariabledelaFECHARecibida"; ?>
<br>
</div>



<div class="ContenidoHoraRegistrada">
    <br>
Esta es la hora Asignada
<br>
 <?php echo "$VariabledelaHORARecibida"; ?>
<br><br>
Si deseas cambiarla, seleccionala y nosotros verificamos.
</p>
<br>
</div>




</div>

</div>
</div>












<div class="modal-dialog" id="ModalModificacionAgenda">
<!-- Modal content-->
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal">&times;</button>
<h4 class="modal-title">




</h4>
</div>
<div class="modal-body" id="CuerpoModalModificacionAgenda">



<form action="ActualizaciondeAgenda.php" method="post">


<?php
$CodigoID=@$_POST["CodigoElegido"];
?>


<input type="hidden" name="CodigoInterno" value="<?php echo $CodigoID;?>">



<div class="ContenidoFecha">
<label id="LabelSeleccionaFecha" for="FechaActualizable">Selecciona una fecha:</label>
<input type="date" id="FechaActualizable" name="FechaEnviada" class="SeleccionStyleFecha" onchange="mostrarSeleccion()">
<p>Fecha seleccionada: <br><br>
<span id="fechaSeleccionada">Ninguna</span></p>
</div>


<?php  ?>

<div class="ContenidoHora">
<label for="CampoHora">Selecciona una hora:</label>
<select id="CampoHora" name="CampoHora" class="SelectHoraFormulario" onchange="mostrarSeleccion()">
<option value="" disabled selected>-- Selecciona una hora --</option>
<option disabled></option>
<option>08:00 AM</option>
<option>09:00 AM</option>
<option>10:00 AM</option>
<option>11:00 AM</option>
<option>12:00 PM</option>
<option>02:00 PM</option>
<option>03:00 PM</option>
<option>04:00 PM</option>
<option>05:00 PM</option>
</select>  
<p>Hora seleccionada: 
<br><br>
<span id="horaSeleccionada">
Ninguna</span></p>
</div>








</div>
<div class="modal-footer">
<button type="submit" class="btn btn-default" data-dismiss="modal">Close</button>

</form>

</div>




</div>
</div>




























































    <script>
        function mostrarSeleccion() {
            // Obtiene los valores seleccionados
            const fecha = document.getElementById("FechaActualizable").value;
            const hora = document.getElementById("CampoHora").value;

            // Actualiza el contenido de las etiquetas <p>
            document.getElementById("fechaSeleccionada").textContent = fecha || "Ninguna";
            document.getElementById("horaSeleccionada").textContent = hora || "Ninguna";
        }
    </script>








<?php
}
} else {
  echo "0 results";
}
$conn->close();






}
?>
</body>
</html>