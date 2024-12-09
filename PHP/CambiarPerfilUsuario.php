<?php
include('../PHP/ConexionBaseDatos.php');

$EMAILVARIABLE=@$_POST['EmailEnviadoFormulario'];
$imagensubida = addslashes(file_get_contents($_FILES['imagenenviado']['tmp_name']));





$ejemploinsertarimagenemail = "INSERT INTO fotosagregadasportafolio 
VALUES ('$imagensubida', '$EMAILVARIABLE')";

if ($conn->query($ejemploinsertarimagenemail) === TRUE) {
} else {
  echo "Error: " . $ejemploinsertarimagenemail . "<br>" . $conn->error;
}

















$sql = "UPDATE registropersonal SET Imagen='$imagensubida' WHERE EmailPaciente='$EMAILVARIABLE'";

if ($conn->query($sql) === TRUE) {
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
height: 47em;

background-repeat: no-repeat;
background-size: 100% 100%;
background-image: url(../IMAGENESGENERAL/FONDO/2.jpg);


">
<style type="text/css">
#CambioFotoPerfilExitoso{
position: absolute;
margin-left: auto;
margin-right: auto;
left: 0;
right: 0;
width: 60em;
margin-top: 8em;

}   

#TituloCabeceraModal{
text-align: center;
}

#CuerpoModalCambioFotoPerfil{
width: 100%;
height: 20em;

}



#ImagenCargada{
width: 16em;
height:11em;
position: absolute;
top: 1em;
margin-left: auto;
margin-right: auto;
left: 0;
right: 0;


}








.BotonAceptarActualizacion {
  border-radius: 4px;
  background-color: #1976D2;
  border: none;
  color: #FFFFFF;
  text-align: center;
  width: 17em;
  height: 4em;
  transition: all 0.5s;
position: relative;
top: 11em;
margin: 0 auto;
display: block;
font-size: 1.2em;

}

.BotonAceptarActualizacion span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.BotonAceptarActualizacion span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.BotonAceptarActualizacion:hover span {
  padding-right: 25px;
}

.BotonAceptarActualizacion:hover span:after {
  opacity: 1;
  right: 0;
}


</style>


<div class="modal-content" id="CambioFotoPerfilExitoso">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal">&times;</button>
<h4 class="modal-title" id="TituloCabeceraModal">

HAS CAMBIADO LA FOTO DE PERFIL!


</h4>
</div>
<div class="modal-body" id="CuerpoModalCambioFotoPerfil">
<?php



$Consultaimagen = "SELECT * FROM registropersonal where EmailPaciente='$EMAILVARIABLE'";
$result = $conn->query($Consultaimagen);
if ($result->num_rows > 0) {
while($row = $result->fetch_assoc()) {
?>

  <img id="ImagenCargada" src="data:image/jpg;base64,<?php echo base64_encode($row['Imagen']); ?>">

<?php
}}
?>



<?php
echo "

<a href='../PACIENTESGENERAL/AgregarFotoPerfilPacientes.php/?email=$EMAILVARIABLE'>
";
?>





<button  onclick="move()" type="submit" class="BotonAceptarActualizacion" name="procesar" style="vertical-align:middle"><span>Aceptar</span></button>
</a>


</div>
<div class="modal-footer">
<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
</div>
</div>
</body>
</html>
<?php
} else {
  echo "Error updating record: " . $conn->error;
}

$conn->close();



?>