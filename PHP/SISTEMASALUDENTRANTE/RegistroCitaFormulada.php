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
<?php
session_start();


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;





// Verificamos si se envió el campo "nombre" por POST
if (isset($_POST['nombre']) && !empty($_POST['nombre'])) {
    $nombre = @$_POST['nombre'];
    // Actualizamos la variable en la sesión con el valor de POST
    $_SESSION['nombre'] = $nombre;
} else {
    // Si no se envió por POST, usamos el valor de la sesión
    $nombre = isset($_SESSION['nombre']) ? $_SESSION['nombre'] : '';
}


include('ConexionBaseDatos.php');

$variable_Nombre = @$_POST['CampoNombre'];
$variable_Apellido = @$_POST['CampoApellido'];
$variable_Email = @$_POST['CampoCorreo'];
$variable_Telefono = @$_POST['CampoTelefono'];
$variable_Fecha = @$_POST['CampoFecha'];
$variable_Hora = @$_POST['CampoHora'];
$VariableID= @$_POST["CampoOcultoID"];



$sql = "SELECT * FROM registrocitas where FechaCita='$variable_Fecha' and HoraCita='$variable_Hora'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
 
?>








<div class="modal-dialog" id="ModalInformativoYaEstaRegistrado">
    
<!-- Modal content-->
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal">&times;</button>
<h4 class="modal-title" id="TituloModalAdvertencianoPuedes">
¡ADVERTENCIA!</h4>
</div>
<div class="modal-body" id="CuerpoModalInformativoYaEstaRegistrado">


<p>No esta disponible.</p>


</div>
<div class="modal-footer">
<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
</div>
</div>
</div>



<style type="text/css">
  
#ModalInformativoYaEstaRegistrado{
position: relative;
width: 60em;
top: 2em;
}


#CuerpoModalInformativoYaEstaRegistrado{
width: 100%;
height: 22em;

background-image: linear-gradient(to right top, #ac2966, #b92a65, #c62d64, #d33062, #df345f);

}

#TituloModalAdvertencianoPuedes{
position: relative;
text-align: center;
font-size: 2.2em;

}

#ModalInformativoYaEstaRegistrado p{
text-align: center;
font-size: 2.5em;
color: #fff;
margin-top: 3em;
}







</style>





















































<?php
}else {













$INSERTAMOSLOSDATOS = "INSERT INTO registrocitas ( IdentidadPersonal, nombreCita, apellidoCita,FechaCita,HoraCita,emailCita,telefonoCita)


VALUES ('$VariableIdentidad','$variable_Nombre', '$variable_Apellido','$variable_Fecha','$variable_Hora','$variable_Email','$variable_Telefono')";
if ($conn->query($INSERTAMOSLOSDATOS) === TRUE) {

?>







<div class="modal-dialog" id="ModalRegistroExitoso">
    
<!-- Modal content-->
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal">&times;</button>
<h4 class="modal-title" id="TituloModalRegistroExitoso">
EXCELENTE</h4>
</div>
<div class="modal-body" id="CuerpoModalRegistroExitoso">


<p>Ya estas Agendado.</p>


</div>
<div class="modal-footer">
<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
</div>
</div>
</div>



<style type="text/css">
  
#ModalRegistroExitoso{
position: relative;
width: 60em;
top: 2em;
}


#CuerpoModalRegistroExitoso{
width: 100%;
height: 22em;

background-image: linear-gradient(to right top, #ac2966, #b92a65, #c62d64, #d33062, #df345f);

}

#TituloModalRegistroExitoso{
position: relative;
text-align: center;
font-size: 2.2em;

}

#ModalRegistroExitoso p{
text-align: center;
font-size: 2.5em;
color: #fff;
margin-top: 3em;
}







</style>


<?php


require '../../PHP/PHPMailer/Exception.php';
require '../../PHP/PHPMailer/PHPMailer.php';
require '../../PHP/PHPMailer/SMTP.php';



$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 0;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'johnmoretorres@gmail.com';                     //SMTP username
    $mail->Password   = 'qzwe byai mixl lfoc


';                               //SMTP password

    $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom("johnmoretorres@gmail.com", "BEAUTIFUL BODY");
    $mail->addAddress("$variable_Email", "BEAUTIFUL BODY");     //Add a is optional

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML


$mail->addAttachment('../../IMAGENES/LOGO1.png');




    $mail->Subject = 'BEAUTIFUL BODY';
    $mail->Body    = '

Hola <br>

'.$variable_Nombre .'
 
'.$variable_Apellido .'
<br><br><br>
 Tu cita fue agendado exitosamente.<br>
 <br>

<b>Fecha:</b> ' . $variable_Fecha . '
<br><br>
    <b>Hora:</b> ' . $variable_Hora.'

<br><br>
Recuerda llamar siempre antes de la cita agendada.

<br><br>
Este es el numero a confirmar:
<br><br>
3103405348

    ';

    $mail->send();



} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
























































































































































































































































































?>




<?php

} else {
  echo "Error: " . $INSERTAMOSLOSDATOS . "<br>" . $conn->error;
}

















}

?>

</body>
</html>