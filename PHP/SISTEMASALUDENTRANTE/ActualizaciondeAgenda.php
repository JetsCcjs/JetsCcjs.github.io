<!DOCTYPE html>
<html>
<head>
  <title>Actualiza tu Agenda</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<?php
include('ConexionBaseDatos.php');
$CodigoGeneral=@$_POST["CodigoInterno"];

$FECHA=@$_POST["FechaEnviada"];
$HORA=@$_POST["CampoHora"];



$SELECCIONACODIGO = "SELECT * FROM registrocitas where ID=$CodigoGeneral";
$result = $conn->query($SELECCIONACODIGO);

if ($result->num_rows > 0) {
if($row = $result->fetch_assoc()) {
 



$ACTUALIZARSQL = "UPDATE registrocitas SET FechaCita='$FECHA', HoraCita='$HORA' WHERE ID='$CodigoGeneral'";

if ($conn->query($ACTUALIZARSQL) === TRUE) {
?>




    <div class="modal-dialog" id="ModalExcelente">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">

Actualizacion de Agenda

          </h4>
        </div>
        <div class="modal-body" id="CuerpoModalExcelente">
          
<img src="../../IMAGENES/EXCELENTE.png">


        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>


<style type="text/css">
#ModalExcelente{
position: relative;
width: 55em;
}	

#CuerpoModalExcelente {
  background-image: url('../../IMAGENES/EXCELENTE.png');
    background-repeat: no-repeat;
    background-size: 50% 100%;
    background-position: center;
    margin: 0 auto;
    display: block;
  
}

#CuerpoModalExcelente img{
	width: 100%;

  background-image: url('../../IMAGENES/FONDO.png');
   
    background-position: center;
    margin: 0 auto;
    display: block;


}








</style>










<?php
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
