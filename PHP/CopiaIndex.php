<!DOCTYPE html>
<html>
<head>
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
<section  class="ContenidoGeneral">
<section class="CuerpoGeneralRegistro">
	










<style type="text/css">
.ContenidoGeneral{
width: 100%;
height: auto;
}

.CuerpoGeneralRegistro {
position: relative;
width: 100%;
height: 50em;
top: 0em;
background-image: url("../IMAGENES/IMAGENESGENERALESDEFONDOS/FondoInformacion.png");
background-size: cover;
background-repeat: no-repeat;
background-position: center; /* Opcional, centra la imagen de fondo */

}

#MenuPrincipal{
position: absolute;
top: 5em;
width: 50.3em;
height: 72px;
background: #fff;
border: none;
float: right;
right: 5em;
z-index: 1;
}

#MenuPrincipal a{
color: #fff;
text-align: center;
transition: 0.7s;
top: 12px;
width: 9em;
border-top: 3px solid #000;
border-bottom: 3px solid #000;
color: #000;
}

#MenuPrincipal a:hover{
color: #fff;
background: #0099FF;
text-align: center;
}

.TituloMenuPrincipal{
position: absolute;
visibility: hidden;
}





</style>
































<nav class="navbar navbar-inverse" id="MenuPrincipal">
<div class="container-fluid">
<div class="navbar-header">
<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>                        
</button>
<a class="navbar-brand TituloMenuPrincipal" href="#" id="TituloMenuPrincipal">WebSiteName</a>
</div>
<div class="collapse navbar-collapse" id="myNavbar">
<ul class="nav navbar-nav">    
<li><a href="../Index.php">INICIO</a></li>
<li><a href="Acerca.php">ACERCA</a></li>
<li><a href="Informacion.php">INFORMACION</a></li>
<li><a href="#">ATENCION</a></li>
<li><a href="../Sessiones.php">SESIONES</a></li>
</ul>
</div>
</div>
</nav>




















<!-- AQUI SE EMPIEZA LA CONSULTA PARA SABER
SI ESTA REGISTRADO
!-->
<?php
$variableIdentidad = @$_POST['Identificacionpersonal'];
$variableNombre = @$_POST['NombrePersonal'];
$variableApellido = @$_POST['ApellidoPersonal'];
$variableTelefono = @$_POST['TelefonoPersonal'];
$variableEmail = @$_POST['EmailPersonal'];

include('ConexionBaseDatos.php');





// AQUI COMIENZA LA CONSULTA //
$sql = "SELECT * FROM registropersonal WHERE identidadpersonal=$variableIdentidad";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
?>




<style type="text/css">
#ModalRegistrado{
position: relative;
top: 18em;
width: 55em;
}

#TituloVariableNombreModalRegistrado{
text-align: center;
font-size: 2em;

}


#CuerpoModalRegistrado {
width: 100%;
height: 12em;
}

.TituloModalRegistrado{
position: relative;
top: 1em;
text-align: center;
}

.BotonSalirdelaConsultaModalRegistro {
  display: inline-block;
  border-radius: 4px;
  background-color: #1565c0;
  border: none;
  color: #FFFFFF;
  text-align: center;
 position: relative;
 width: 15em;
 height:3.4em;
margin: 0 auto;
display: block;

  transition: all 0.5s;
  cursor: pointer;
}

.BotonSalirdelaConsultaModalRegistro span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.BotonSalirdelaConsultaModalRegistro span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.BotonSalirdelaConsultaModalRegistro:hover span {
  padding-right: 25px;
}

.BotonSalirdelaConsultaModalRegistro:hover span:after {
  opacity: 1;
  right: 0;
}
</style>



<div class="modal-dialog" id="ModalRegistrado">
<div class="modal-content">
<div class="modal-header">
<h4 class="modal-title" id="TituloVariableNombreModalRegistrado">
<?php echo " HOLA! $variableNombre"; ?>
</h4>
</div>
<div class="modal-body" id="CuerpoModalRegistrado">
<h1 class="TituloModalRegistrado">Ya estas Registrado</h1>
</div>
<div class="modal-footer">

<a href="../Index.php">
<button class="BotonSalirdelaConsultaModalRegistro" style="vertical-align:middle"><span>ACEPTAR</span></button>
</a>

</div>
</div>
</div>





















<?php

} else {
$variableIdentidad = @$_POST['Identificacionpersonal'];
$variableNombre = @$_POST['NombrePersonal'];
$variableApellido = @$_POST['ApellidoPersonal'];
$variableTelefono = @$_POST['TelefonoPersonal'];
$variableEmail = @$_POST['EmailPersonal'];
$variablePassword = @$_POST['PassPersonal'];



// AQUI COMIENZA EL REGISTRO DONDE EL USUARIO NO ESTA EN LA BASE DE DATOS
 //


$VariableInsertarSQL = "INSERT INTO registropersonal (identidadpersonal,nombrepersonal,apellidopersonal, telefonopersonal,emailpersonal,passwordpersonal)

    VALUES ('$variableIdentidad','$variableNombre','$variableApellido','$variableTelefono','$variableEmail','$variablePassword')";

    if ($conn->query($VariableInsertarSQL) === TRUE) {
  ?>  




<style type="text/css">
#ModalHasidoRegistradoExitosamente{
position: relative;
top: 18em;
width: 55em;
}

#TituloVariableNombreModalHasidoRegistradoExitosamente{
text-align: center;
font-size: 2em;

}


#CuerpoModalHasidoRegistradoExitosamente {
width: 100%;
height: 15em;
}

.TituloModalRegistrado{
position: relative;
top: 1em;
text-align: center;
}

.BotonRegistradoExitosamente {
  display: inline-block;
  border-radius: 4px;
  background-color: #1565c0;
  border: none;
  color: #FFFFFF;
  text-align: center;
 position: relative;
 width: 15em;
 height:3.4em;
margin: 0 auto;
display: block;

  transition: all 0.5s;
  cursor: pointer;
}

.BotonRegistradoExitosamente span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.BotonRegistradoExitosamente span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.BotonRegistradoExitosamente:hover span {
  padding-right: 25px;
}

.BotonRegistradoExitosamente:hover span:after {
  opacity: 1;
  right: 0;
}

.TextoDatosRegistrados{
text-align: center;
font-size: 1.6em;


}


</style>



<div class="modal-dialog" id="ModalHasidoRegistradoExitosamente">
<div class="modal-content">
<div class="modal-header">
<h4 class="modal-title" id="TituloVariableNombreModalHasidoRegistradoExitosamente">
<?php echo " HOLA! $variableNombre"; ?>
</h4>
</div>
<div class="modal-body" id="CuerpoModalHasidoRegistradoExitosamente">

<p class="TextoDatosRegistrados"><br>
Tus datos fueron registrados exitosamente.
<br>
Llegaran a tu correo los datos
 que has registrado.</p>

</div>
<div class="modal-footer">

<a href="../Index.php">
<button class="BotonRegistradoExitosamente" style="vertical-align:middle"><span>ACEPTAR</span></button>
</a>

</div>
</div>
</div>











































<!-- 

ESTA ES EL ARTICULO FINAL DE EL 
PIE DE PAGINA
 !-->
<style type="text/css">
.FinaldePagina{
position:relative;
width: 100;
height: auto;
background: #252d36;
}

#SeccionArticulo1{
position: relative;
top: 5em;
width: 100%;
height: 22em;
}

#PrimerInformacion{
width: 23em;
height: 11em;
margin: 1em;
box-sizing: border-box;
}

#PrimerInformacion h1{
color: #fff;
text-align: center;
font-size: 1.3em;
font-weight: bold;
}

#PrimerInformacion p{
color: #25B2F2;
text-align: center;
font-size: 1.3em;
margin-top: 1em;
}

#SegundaInformacion {
width: 23em;
height: 11em;
margin: 1em;
box-sizing: border-box;
}

#SegundaInformacion h1{
color: #fff;
text-align: center;
font-size: 1.3em;
font-weight: bold;
}

#SegundaInformacion p{
color: #25B2F2;
text-align: center;
font-size: 1.3em;
margin-top: 1em;
}


#TercerInformacion {
width: 26em;
height: 11em;
margin: 1em;
box-sizing: border-box;
}


#TercerInformacion h1{
color: #fff;
text-align: center;
font-size: 1.3em;
font-weight: bold;
}

#TercerInformacion p{
color: #25B2F2;
text-align: center;
font-size: 1.3em;
margin-top: 1em;
}









#CuartaInformacion {
width: 26em;
height: 20em;
margin: 1em;
box-sizing: border-box;
}

#CuartaInformacion h1{
color: #fff;
text-align: center;
font-size: 1.3em;
font-weight: bold;
}

#CuartaInformacion iframe{
width: 26em;
height: 11em;
margin: 1em;
}













.SeccionFinal{
width: 100%;
height: 5em;
background: #1f262f;
position: relative;
top: 0em;
}


.BeautifulBodyfooter{
position: absolute;
color: #4B4C4D;
top: 37%;
left: 2em;

}

.Internationalfooter{
position: absolute;
float: left;
left: 22.3em;
color: #fff;
top: 37%;
}


#Faceuno{
position: absolute;
float: right;
right: 18em;
color: #fff;
top: 37%;
}

#twuno{
position: absolute;
float: right;
right: 16em;
color: #fff;
top: 37%; 
}

#instauno{
position: absolute;
float: right;
right: 14em;
color: #fff;
top: 37%;
}


#wahtsappcontactogeneral{
position: absolute;
float: right;
right: 5em;
background-image: url('../WA.png');
background-size: 100% 100%;
background-repeat: no-repeat;
width: 3.5em;
height:3.5em;
top: 1.3em;
}






</style>










</section>



<!-- 
CONTENIDO FINAL DE TODA LA PAGINA LLAMADA

FOOTER
!-->
<article class="FinaldePagina">
<div class="container-fluid" id="SeccionArticulo1">
<div class="row">
<div class="col-sm-4" id="PrimerInformacion">
<h1>Atencion al Usuario:</h1>
<p>
310 340 53 48
</p>
<p>
+57 314 479 60 26
</p>
</div>

<div class="col-sm-4" id="SegundaInformacion">
<h1>Direccion:</h1>
<p>
calle 26 bis # 42 - 65
</p>
<p>
Barrio el Recreo
</p>
</div>




<div class="col-sm-4" id="TercerInformacion">
<h1>Horario de Atencion:</h1>
<p>
Lunes - Viernes: 08:00a.m - 05:00p.m
</p>
<p>
Sabados: 08:00a.m - 05:00p.m
</p>
</div>




<div class="col-sm-4" id="CuartaInformacion">
<h1>Ubicacion</h1>
<iframe class="IframeMapaInformativo" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d994.6114511585903!2d-74.38724523208714!3d4.327056397020383!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f0554386f0ad3%3A0xac5000a7169d9ed9!2sCootradecun%20Fusagasug%C3%A1%20%3D!5e0!3m2!1ses-419!2sco!4v1584547533548!5m2!1ses-419!2sco"></iframe>
</div>
</div>
</div>




<div class="SeccionFinal"> 
<p class="BeautifulBodyfooter">2020 BEAUTIFUL - BODY|Desarrollado por: 
<p class="Internationalfooter">International JECT</p>
</p>
<p id="Faceuno" class="icon-FACEFOOTER1"></p>
<p id="twuno" class="icon-twifooteruno"></p>
<p id="instauno" class="icon-INSFOOTER"></p>
<a style="text-align: center;" href="https://api.whatsapp.com/send?phone=310 340 53 48&text=Bienvenidos al centro 
Administrativo de BEAUTIFUL - BODY
">
<p id="wahtsappcontactogeneral" ></p>
</a>
</div>
</article>












</section>
</html>