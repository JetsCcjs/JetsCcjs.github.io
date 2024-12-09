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

include('ConexionBaseDatos.php');
$variableIdentidad = @$_POST['Cedula'];
$variableContra = @$_POST['Password'];

$_SESSION['variableIdentidad'] = $variableIdentidad;



// CONSULTA A LA BASE DE DATOS PARA QUE PUEDA INGRESAR
 // 
$sql = "SELECT * FROM registropersonal";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
if($row = $result->fetch_assoc()) {
$varidbd="" . $row["identidadpersonal"]. "";
if ($variableIdentidad==$varidbd) {
?>
<aside class="CabeceraPaginaPaciente">
	
<div class="ImagenLogotipo"></div>



<h1 class="TituloAgendatusCitas">AGENDA TUS CITAS FACIL Y RAPIDO</h1>






</aside>

<style type="text/css">
.CabeceraPaginaPaciente{
position: relative;
width: 100%;
height: 13em;
background: #fff;
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
margin-left:2em;
top: 1.5em;
}

#MenuCabeceraSesion{
position: absolute;
top: 2.8em;
width: 40em;
height: 72px;
background: #fff;
border: none;
float: right;
right: 2em;
z-index: 1;
}

#MenuCabeceraSesion a{
color: #fff;
text-align: center;
transition: 0.7s;
top: 12px;
width: 7em;
border-top: 3px solid #000;
border-bottom: 3px solid #000;
color: #000;
}

#MenuCabeceraSesion a:hover{
color: #fff;
background: #0099FF;
text-align: center;
}

.TituloMenuPrincipal{
position: absolute;
visibility: hidden;
}

.ContenidoCitasGeneral{
position: relative;
width: 100%;
height: 41em;
background: #f9fafb;

  overflow: auto;
  -ms-overflow-style: none;  /* Para Internet Explorer y Edge */
  scrollbar-width: none;  
}









.TituloAgendatusCitas{
position: relative;
text-align: center;
font-weight: bold;
font-size: 2.3em;
top: 2.3em;
}









#MenuPrincipalCitas{
position: absolute;
top: 0.1em;
width: 25em;
height: 40em;
background: #0a61a1;
border: none;
float: left;
left: 0.2em;
z-index: 1;

}

#MenuPrincipalCitas a{
text-align: center;
transition: 0.7s;
width: 15em;
height: 5em;
font-size: 1.4em;
color: #fff;
padding: 2.3em;
text-align: center;

}


#MenuPrincipalCitas a:hover{
text-align: center;
transition: 0.7s;
width: 15em;
height: 5em;
font-size: 1.4em;
color: #000;
padding: 2.3em;
background: #fff;
}

#MenuPrincipalCitas #TituloMenuPrincipalCitas{
text-align: center;
position: absolute;
width: 100%;
left: 50%;
right: 50%;
padding: 1em;
visibility: hidden;
}

.IframeContenidoparaCitas{
position: relative;
width: 81em;
height: 40em;
background: #fff;
float: right;
right: 0.3em;
top: 0.1em;
border: none;
overflow: hidden;
}


/* Para navegadores que requieren scroll pero no quieres mostrar la barra */
iframe {
    scrollbar-width: none; /* Firefox */
}

iframe::-webkit-scrollbar {
    display: none; /* Chrome, Safari, Opera */
}



























































































































































/* ESTILO DE HOJA PARA EL FINAL DE LA PAGINA
QUE ES EL FOOTER PRINCIPAL

  */
.FinaldePagina{
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
background-image: url('../../WA.png');
background-size: 100% 100%;
background-repeat: no-repeat;
width: 3.5em;
height:3.5em;
top: 1.3em;
}












































































































































</style>

<section class="ContenidoCitasGeneral">


<nav class="navbar navbar-inverse" id="MenuPrincipalCitas">
<div class="container-fluid">
<div class="navbar-header">
<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#MenuGeneralPaciente">
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>                        
</button>
<a class="navbar-brand" href="#" id="TituloMenuPrincipalCitas">
      	
CITAS
</a>
</div>
<div class="collapse navbar-collapse" id="MenuGeneralPaciente">
<ul class="nav navbar-nav">
<br> 
<li><a href="ContenidodelIframe.php" target="IframeCitas">
CUIDALA
</a></li>
<br> <br>





<li><a href="RegistrarCita.php" target="IframeCitas">REGISTRA</a></li>



<li><a href="ConsultaCitaAgendada.php" target="IframeCitas">CONSULTAR</a></li>












<li><a href="#">MODIFICAR</a></li>
<li><a href="#">CANCELAR</a></li>
</ul>
</div>
</div>
</nav>





<iframe  name="IframeCitas" class="IframeContenidoparaCitas" src="IframeGeneraldelPaciente.php" ></iframe>





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





































































































































































































































































































































































































































































































































































































































<?php
}
else{
echo "no estas";
}}} else {
  echo "0 results";
}
$conn->close();
?>
</body>
</html>