<?php

include("ConexionBaseDatos.php");


$var1=@$_POST['IdPerCita'];
$var2=@$_POST['NomPerCita'];
$var3=@$_POST['ApePerCita'];
$var4=@$_POST['FechaPerCita'];
$var5=@$_POST['HoraSelectPerCita'];


$sql = "SELECT * FROM asignacioncitas where FechaPaciente='$var4' and HoraPAciente='$var5'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
if($row = $result->fetch_assoc()) {
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body style="
width: 100%;
height: 30em;
background: #2FB4DB

">




<div class="modal-dialog" id="GeneralModalNoPuede">
<div class="modal-content">
<div class="modal-header" id="CabeceraModalNoPuede">
<button type="button" class="close" data-dismiss="modal">&times;</button>
<h4 class="modal-title" id="TituloAdvertencia">
Advertencia	

<img src="../PACIENTES/REGISTROCITASICONO/2.png" class="IconoAdvertencia">


</h4>
</div>
<div class="modal-body" id="CuerpoModalCabeceraNoPuede">
<section class="ContenidoModalNoPuede">
<p class="textohay">Ya Hay una cita asignada para esa hora <br>
</p>
s


<button id="BotonAceptarConsultaRegistro" class="button" style="vertical-align:middle"><span>Aceptar </span></button>



</section>
</div>

</div>
</div>

<style>
	

* {
  box-sizing: border-box;
}     








#GeneralModalNoPuede{
position: absolute;
margin-left: auto;
margin-right: auto;
left: 0;
right: 0;
width: 70%;
top: 3em;
}

#CuerpoModalCabeceraNoPuede{
width: 100%;
height: 30em;
}

.ContenidoModalNoPuede{
width: 100%;
height: 100%;
background: #1262A0
}

.IconoAdvertencia{
position: absolute;
float: right;
right: 21em;
width: 2em;
height:2em;
z-index: 89789879;
top: -0.5em;
}

#TituloAdvertencia{
position: absolute;
text-align: center;
margin-left: auto;
margin-right: auto;
left: 0;
right: 0;
color: #000;
  font-family: 'Orbitron', sans-serif;

}

.textohay{
position: absolute;
text-align: center;
margin-left: auto;
margin-right: auto;
left: 0;
right: 0;
color: #fff;
font-size: 2.1em;
top: 5em;
}




.button {
  display: inline-block;
  border-radius: 4px;
  border: none;
  transition: all 0.5s;
  cursor: pointer;
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}

#BotonAceptarConsultaRegistro{
position: absolute;
width: 15em;
height: 4em;
margin-left: auto;
margin-right: auto;
left: 0;
right: 0;
top: 22em;
background: #fff;
color: #000;
border: none;
}

.DatoTraido{
position: absolute;
text-align: center;
margin-left: auto;
margin-right: auto;
left: 0;
right: 0;
color: #fff;
top: 6em;
font-size: 2em;
}




</style>
</body>
</html>
<?php
}} else {
 
$registropaciente = "INSERT INTO asignacioncitas 

VALUES ('$var1','$var2','$var3','$var4','$var5')";
if ($conn->query($registropaciente) === TRUE) {
?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  <link href="https://fonts.googleapis.com/css2?family=Orbitron&display=swap" rel="stylesheet">

</head>
<body style="
width: 100%;
height: 30em;
background: #2FB4DB

">

    <div class="modal-dialog">
    <?php
$var1=@$_POST['IdPerCita'];
$var2=@$_POST['NomPerCita'];
$var3=@$_POST['ApePerCita'];
$var4=@$_POST['FechaPerCita'];
$var5=@$_POST['HoraSelectPerCita'];

?>
      <div class="modal-content" id="ModalGralInsertado">
        <div class="modal-header" id="CabeceraModalinsertar">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">FELICITACIONES <?php echo "$var2"; ?></h4>
        </div>
        <div class="modal-body" id="CuerpoModal">
          <p class="textomodal">Has sido Registrada la cita Exitosamente</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>


<style type="text/css">
#ModalGralInsertado{
margin-top: 10em;


}


#CabeceraModalinsertar{
width: 100%;
height: 100%;
background: #0288D1;
text-align: center;
color: #fff;
}

.textomodal{
position: absolute;
margin-left: auto;
margin-right: auto;
left: 0;
right: 0;
margin-top: 15%;
font-family: 'Orbitron', sans-serif;
font-size: 1.5em;
}

#CuerpoModal{
width: 100%;
height: 16em;
text-align: center;
}








</style>




</body>
</html>







<?php
} else {
  echo "Error: " . $registropaciente . "<br>" . $conn->error;
}
}
$conn->close();
?>