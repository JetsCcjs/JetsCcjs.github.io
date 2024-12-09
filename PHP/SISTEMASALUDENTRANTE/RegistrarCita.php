<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!--
TITULO DE LA CABECERA DE LA PAGINA
-->
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
<section class="ContenidoGeneral">
<section class="CuerpoGeneral">
<aside class="CabeceraPlataformaGeneral">


        <!-- Menú lateral -->
        <nav class="navbar navbar-inverse" id="MenuPrincipalCitas">
            <div class="container-fluid">
                <ul class="nav navbar-nav">



                    <li><a href="3" target="IframeCitas">INICIO</a></li>


                    <li><a href="RegistrarCita.php" target="IframeCitas">REGISTRA</a></li>
                    <li><a href="ConsultaCitaAgendada.php" target="IframeCitas">CONSULTAR</a></li>
                    <li><a href="ModificaCitaAgendada.php" target="IframeCitas">MODIFICAR</a></li>
                    <li><a href="#">CANCELAR</a></li>
                </ul>
            </div>
        </nav>

     

<div class="ImagenLogotipo"></div>



</aside>

















































































<!-- ESTE CODIGO ES PARA INICIAR EL PROCESO DE
AGENDAMIENTO DE CITAS
 -->
<?php
// Iniciar sesión en el contexto
//general, en la tabla de registroCitas
session_start();
include('ConexionBaseDatos.php');
// Verificamos si se envió el campo "nombre" por POST
if (isset($_POST['nombre']) && !empty($_POST['nombre'])) {
    $nombre = @$_POST['nombre'];
    // Actualizamos la variable en la sesión con el valor de POST
    $_SESSION['nombre'] = $nombre;
} else {
    // Si no se envió por POST, usamos el valor de la sesión
    $nombre = isset($_SESSION['nombre']) ? $_SESSION['nombre'] : '';
}

$sql = "SELECT * FROM registropersonal where nombrepersonal  ='$nombre'";


$result = $conn->query($sql);
if ($result->num_rows > 0) {
if($row = $result->fetch_assoc()) {



$variablenombreSQL = $row["nombrepersonal"];


// VARIABLES GENERAL PARA CONSULTA  //
if ($nombre == $variablenombreSQL) {

$variableApellido = $row["apellidopersonal"];
$variableTelefono = $row["telefonopersonal"];
$variableEmail = $row["emailpersonal"];





?>


<div class="modal-dialog" id="ModalFormularioparaRegistrarlaCita">
    
  <!-- Modal content-->
<div class="modal-content">
<div class="modal-header">

<h4 class="modal-title" id="TitulodelaModalFormularioparaRegistrarlaCita">
HOLA 
<?php 
echo "".$row["nombrepersonal"]." ";
?>
<br>
</h4>
</div>
<div class="modal-body" id="CuerpoModalFormularioparaRegistrarlaCita">





























<form action="RegistroCitaFormulada.php" method="post">
<div class="container-fluid" id="SeccionCabezaGeneral">
<div class="row">










<div id="SeccionNombre">
<p>Nombre</p>
<input type="text" id="nombre" name="CampoNombre" placeholder="<?php echo $nombre ?>" value="<?php echo $nombre; ?>" readonly>
</div>

<div id="SeccionApellido">
<p>Apellido</p>

<input type="text" id="nombre" name="CampoApellido" placeholder="<?php echo $variableApellido ?>"

value="<?php echo $variableApellido; ?>" readonly>
</div>





<div id="SeccionEmail">
<p>Correo:</p>
<input type="text" id="nombre" name="CampoCorreo" placeholder="<?php echo $variableEmail ?>">
</div>




<div id="SeccionTelefono">
<p>Numero de Telefono:</p>
<input type="text" id="nombre" name="CampoTelefono" placeholder="<?php echo $variableTelefono ?>">
</div>






<div id="SeccionFecha">
  <p>Selecciona la Fecha</p>
  <div class="input-icon">
  <input type="date" id="CampoFecha" name="CampoFecha" min="">
</div>
</div>

<script>
// Deshabilitar fechas pasadas
document.addEventListener('DOMContentLoaded', (event) => {
  const today = new Date().toISOString().split('T')[0]; // Obtener la fecha actual en formato 'YYYY-MM-DD'
  document.getElementById('CampoFecha').setAttribute('min', today); // Establecer la fecha mínima
});
</script>















<div id="SeccionHora">
<p>Selecciona la Hora</p>

<select name="CampoHora">
 <option value="" disabled selected>-- Selecciona una hora --</option>

        <option disabled></option>


        <option>08:00 AM</option>
        <option disabled></option> <!-- Espacio entre opciones -->
        <option>09:00 AM</option>
        <option disabled></option> <!-- Espacio entre opciones -->
        <option>10:00 AM</option>
        <option disabled></option> <!-- Espacio entre opciones -->
        <option>11:00 AM</option>
        <option disabled></option> <!-- Espacio entre opciones -->
        <option>12:00 PM</option>
        <option disabled></option> <!-- Espacio entre opciones -->
        <option>02:00 PM</option>
        <option disabled></option> <!-- Espacio entre opciones -->
        <option>03:00 PM</option>
        <option disabled></option> <!-- Espacio entre opciones -->
        <option>04:00 PM</option>
        <option disabled></option> <!-- Espacio entre opciones -->
        <option>05:00 PM</option>

</select>

</div>

</div>
</div>









</div>
<div class="modal-footer">
<button id="BotonRegistroCita" type="submit" class="btn btn-default" data-dismiss="modal">
REGISTRA TU CITA
</button>
</div>
</form>
</div>
</div>












<style type="text/css">
*{rder-box;
}  

.ContenidoGeneral{
width: 100%;
height: 100%;
}

.CabeceraPlataformaGeneral{
position: relative;
width: 100%;
height: 15em;
background: #e9edf8;


}


.CuerpoGeneral{
width: 100%;
height: 70em;
top: 0.5em;
background-image: url('../../IMAGENES-CUERPO/FON1.png');
background-size: cover;
background-repeat: no-repeat;
background-position: center;
float: left;
left: 0em;
}






.ImagenLogotipo{
position: relative;
width: 11em;
height:9em;
z-index: 5;
background-image: url('../../IMAGENES/LOGO1.png');
background-size: 100% 100%;
background-repeat: no-repeat;
float: left;
left: 3em;
top: 1.5em;
}






/* Menú lateral */
#MenuPrincipalCitas {
position: relative;
top: 5em;
width: 52em;
height: 72px;
background:#2196f3;
border: none;
float: right;
right: 5em;
z-index: 1;


}

/* Enlaces dentro del menú lateral */
#MenuPrincipalCitas a {
color: #fff;
text-align: center;
transition: 0.7s;
top: 12px;
width: 9.5em;
border-top: 3px solid #fff;
border-bottom: 3px solid #fff;

}

#MenuPrincipalCitas a:hover {
    background: #fff;
    color: #000;
}































































#ModalFormularioparaRegistrarlaCita{
position: relative;
width: 60em;
top: 2.5em;
}

#CuerpoModalFormularioparaRegistrarlaCita{
width: 100%;
height: 25em;


}





#TitulodelaModalFormularioparaRegistrarlaCita{
text-align: center;
position: relative;
font-size: 2em;
}













#SeccionIdentidad{
position: relative;
width: 18em;
height: 7em;
background: #FFF;
transition: 0.5s;
border: 1px solid #000;

margin: 0 auto;
display: block;
}

#SeccionIdentidad input{
position: relative;
width: 15em;
height: 3em;
top: 0.5em;
text-align: center;
margin: 0 auto;
display: block;
}

#SeccionIdentidad p{
text-align: center;
font-weight: bold;
font-size: 1em;
margin-top: 1em;
}














#SeccionNombre {
position: relative;
width: 18em;
height: 7em;
background: #FFF;
transition: 0.5s;
float: left;
margin-left: 1em;
top: 2.5em;
border: 1px solid #000;
}

#SeccionNombre input{
position: relative;
width: 15em;
height: 3em;
top: 0.5em;
text-align: center;
margin: 0 auto;
display: block;
}

#SeccionNombre p{
text-align: center;
font-weight: bold;
font-size: 1em;
margin-top: 1em;
}









#SeccionApellido {
position: relative;
width: 18em;
height: 7em;
background: #FFF;
transition: 0.5s;
float: left;
margin-left: 1em;
top: 2.5em;
border: 1px solid #000;
}

#SeccionApellido input{
position: relative;
width: 15em;
height: 3em;
top: 0.5em;
text-align: center;
margin: 0 auto;
display: block;
}

#SeccionApellido p{
text-align: center;
font-weight: bold;
font-size: 1em;
margin-top: 1em;
}














#SeccionEmail {
position: relative;
width: 18em;
height: 7em;
background: #FFF;
transition: 0.5s;
float: left;
margin-left: 1em;
top: 2.5em;
border: 1px solid #000;
}

#SeccionEmail input{
position: relative;
width: 15em;
height: 3em;
top: 0.5em;
text-align: center;
margin: 0 auto;
display: block;
}

#SeccionEmail p{
text-align: center;
font-weight: bold;
font-size: 1em;
margin-top: 1em;
}












#SeccionTelefono {
position: relative;
width: 18em;
height: 7em;
background: #FFF;
transition: 0.5s;
float: left;
margin-left: 1em;
top: 3em;
border: 1px solid #000;
}

#SeccionTelefono input{
position: relative;
width: 15em;
height: 3em;
top: 0.5em;
text-align: center;
margin: 0 auto;
display: block;
}

#SeccionTelefono p{
text-align: center;
font-weight: bold;
font-size: 1em;
margin-top: 1em;
}











#SeccionFecha {
position: relative;
width: 18em;
height: 7em;
background: #FFF;
transition: 0.5s;
float: left;
margin-left: 1em;
top: 3em;
border: 1px solid #000;
}

#SeccionFecha input{
position: relative;
width: 15em;
height: 3em;
top: 0.5em;
text-align: center;
margin: 0 auto;
display: block;
}

#SeccionFecha p{
text-align: center;
font-weight: bold;
font-size: 1em;
margin-top: 1em;
}
















#SeccionHora {
position: relative;
width: 18em;
height: 7em;
background: #FFF;
transition: 0.5s;
float: left;
margin-left: 1em;
top: 3em;
border: 1px solid #000;
}

#SeccionHora select{
position: relative;
width: 15em;
height: 3em;
top: 0.5em;
text-align: center;
margin: 0 auto;
display: block;
}

#SeccionHora p{
text-align: center;
font-weight: bold;
font-size: 1em;
margin-top: 1em;
}




#BotonRegistroCita{
position: relative;
width: 15em;
height: 4.2em;
background: #3949ab;
margin: 0 auto;
display: block;
color: #fff;
}


























#PrimerInformacion{
width: 23em;
height: 11em;
margin: 1em;
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
height: 11em;
margin: 1em;
}


#CuartaInformacion h1{
color: #fff;
text-align: center;
font-size: 1.3em;
font-weight: bold;
}

#CuartaInformacion iframe{
width: 20em;
height: 5em;
margin: 1em;
}


























































.FinaldePagina{
width: 100;
height: auto;
background: #252d36;
}

.SeccionFinal{
  position: relative;
width: 100%;
height: 5em;
background: #1f262f;
top: 0em;
}


.BeautifulBodyfooter{
position: absolute;
color: #4B4C4D;
top: 1em;
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
background-image: url('../../WA.png');
background-size: 100% 100%;
background-repeat: no-repeat;
width: 3.5em;
height:3.5em;
top: 1.3em;
}









































</style>
</section>




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
</div>

</article>

<?php
}
else{
echo "graves, no puedes";

}}} else {
  echo "0 results";
}
$conn->close();


?>
</section>
</html>