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
</head>
<body>



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
<li><a href="Index.php">INICIO</a></li>
<li><a href="Acerca.php">ACERCA</a></li>
<li><a href="Informacion.php">INFORMACION</a></li>
<li><a href="#">ATENCION</a></li>
<li><a href="Sessiones.php">SESIONES</a></li>
</ul>
</div>
</div>
</nav>




<article class="ContenidoUno"> 
<h1 class="MejoratusaludTitulo">MEJORA TU SALUD</h1>
<h1 class="TituloCuidaTuVida">Cuida tu Vida</h1>
</article>




















<article class="TerapiasEstriramientos">
<h1 class="TituloFisiGene">FISIOTERAPIA - GENERAL</h1>













<div class="container-fluid" id="SeccionCabezaGeneral">
<div class="row">

<div class="col-sm-4" id="secuno">
<h1>DOLOR DE CABEZA</h1>
<img id="ImagenFondoDos" src="IMAGENES/TERAPIAGENERALCABEZA/DOLORDECABEZA1.png" alt="Imagen de fondof">

<video id="VideoDolordeCabeza" src="IMAGENES/CONTENIDOTERAPIAGENERAL/VIDEOS/TERAPIA - MEDICINA CABEZA.mp4" controls></video>

<p>
Es un problema comun que muchas personas tienen,
debido a la tension en ciertos musculos de l cabeza.
</p>


  <button id="BotonBoardDos" type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">
DOLOR DE CABEZA
  </button>

</div>

!-- Modal -->
<div class="modal fade" id="myModal" role="dialog" data-backdrop="static" data-keyboard="false">
  <div class="modal-dialog">
    
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modal Header</h4>
      </div>
      <div class="modal-body">
       
 <video id="videoModal" width="100%" autoplay muted>
          <source src="VIDEOS/DOLORDECABEZA.mp4" type="video/mp4">
          Tu navegador no soporta la etiqueta de video.
        </video>






      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">CERRAR</button>
      </div>
    </div>
    
  </div>
</div>

















<div class="col-sm-4" id="secdos">
<h1>ICTUS - AVC</h1>
<main class="ImagenDescripcionAVC">
</main>
<p>
Se produce mediante un accidente cerebrovascular donde 
se presenta cuando la estructura pierde su irrigacion sanguinea.
</p>
</div>


<div class="col-sm-4" id="sectres">
<h1>MANDIBULA - ATM</h1>
<main class="ImagenDescripcionMANDIBULA">
</main>
<p>
Se produce mediante un accidente cerebrovascular donde 
se presenta cuando la estructura pierde su irrigacion sanguinea.
</p>
</div>


<div class="col-sm-4" id="secCuatro">
<h1>VERTIGO</h1>
<main class="ImagenDescripcionVERTIGO">
</main>
<p>
Es una estructura del mesencéfalo compuesta por dos pares de colículos Involucrados en el procesamiento visual y los reflejos oculares.
</p>
</div>
</div>
</div>
</article>





<style type="text/css">
  
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



.ContenidoUno{
width: 100%;
height: 50em;
top: 0.5em;
background-image: url('IMAGENES-CUERPO/FONDO.png');
background-size: cover;
background-repeat: no-repeat;
background-position: center; /* Opcional, centra la imagen de fondo */
background-repeat: no-repeat;
float: right;
right: 0em;
}

.MejoratusaludTitulo{
position: relative;
font-size: 5em;
top: 2em;
font-weight: bold;
color: #0081f6;
float: left;
margin-left: 1em;
}

.TituloCuidaTuVida{
  font-family: "Lobster", sans-serif;
font-weight: bold;
letter-spacing: 0.1em;
position: absolute;
font-size: 5.2em;
top: 4.1em;
font-weight: bold;
color: #000;
float: left;
left: 2.2em;
}








































.TerapiasEstriramientos{
position: static;
width: 100%;
height: 120em;
top: 0em;
margin: 0 auto;
display: block;
background-image: url('IMAGENES/ESTIRAMIENTOS/11.png');
background-size: cover;
background-repeat: no-repeat;
background-attachment: fixed
}

.TituloFisiGene{
position: relative;
text-align: center;
top: 2em;
font-size: 4em;
font-weight: bold;
}

.TerapiasGenerales{
width: 100%;
height: 30em;
}

.ConseccionCabeza{
width: 100%;
height: 50em;

}










































































#SeccionCabezaGeneral{
    position: relative;
   width: 100%;
   height: auto;
    top: 15em;
    margin: 0 auto;
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    padding: 1em; 
    box-sizing: border-box;


}


#secuno{
  position: relative;
width: 23em;
height: 40em;
margin: 1em;
box-sizing: border-box;
background: #FFF;
border: 1px solid #000;
}

#secuno:hover{
width: 23em;
height: 40em;
margin: 1em; 
box-sizing: border-box;
background: #FFF;
border: 1px solid #000;
color: #000;
transition: 0.5s;
}

#secuno h1{
font-size: 1.7em;
text-align: center;
margin-top: 2em;
font-weight: bold;
color: #000;
}

#ImagenFondoDos{
width: 100%;
height: 20em;
}

#secuno p{
font-size: 1.2em;
text-align: justify;
margin-top: 1em;
color: #000;
transition: 0.7s;
text-align: justify;
}

#VideoDolordeCabeza {
  display: none;
  position: relative;
  top: 0em;
  left: 0;
  width: 100%;
  height: 20em;
  object-fit: cover;
}





#BotonBoardDos {
  position: relative;
  width: 15em;
  height: 4em;
  border: none;
margin: 0 auto;
display: block;
}




















#secdos{
  position: relative;
width: 23em;
height: 38em;
margin: 1em;
box-sizing: border-box;
background: #FFF;
border: 1px solid #000;
}

#secdos:hover{
width: 23em;
height: 40em;
margin: 1em;
box-sizing: border-box;
background: #FFF;
border: 1px solid #000;
color: #000;
transition: 0.5s;
}

#secdos h1{
font-size: 1.7em;
text-align: center;
margin-top: 2em;
font-weight: bold;
}

.ImagenDescripcionAVC{
width: 100%;
height: 20em;
background-image: url('IMAGENES/TERAPIAGENERALCABEZA/AV1.png');
background-size: 100% 100%;
background-repeat: no-repeat;
margin-top: 1em;
transition: 0.7s;
}

#secdos p{
font-size: 1.2em;
text-align: justify;
margin-top: 1em;
color: #000;
transition: 0.7s;
text-align: justify;
}

















#sectres {
  position: relative;
width: 23em;
height: 38em;
margin: 1em;
box-sizing: border-box;
background: #fff;
border: 1px solid #000;
transition: 0.5s;
}

#sectres:hover{
width: 23em;
height: 40em;
margin: 1em;
box-sizing: border-box;
border: 1px solid #000;
color: #000;
transition: 0.5s;
}

#sectres h1{
font-size: 1.7em;
text-align: center;
margin-top: 2em;
font-weight: bold;
}

.ImagenDescripcionMANDIBULA{
width: 100%;
height: 20em;
background-image: url('IMAGENES/TERAPIAGENERALCABEZA/MANDI1.png');
background-size: 100% 100%;
background-repeat: no-repeat;
margin-top: 1em;
transition: 0.7s;
}

#sectres p{
font-size: 1.2em;
text-align: justify;
margin-top: 2em;
color: #000;
transition: 0.7s;
text-align: justify;
}















#secCuatro {
  position: relative;
width: 23em;
height: 38em;
margin: 1em;
box-sizing: border-box;
background: #fff;
border: 1px solid #000;
transition: 0.5s;
}


#secCuatro:hover{
width: 23em;
height: 40em;
margin: 1em;
box-sizing: border-box;
border: 1px solid #000;
color: #000;
transition: 0.5s;
}

#secCuatro h1{
font-size: 1.7em;
text-align: center;
margin-top: 2em;
font-weight: bold;
}

.ImagenDescripcionVERTIGO{
width: 100%;
height: 20em;
background-image: url('IMAGENES/TERAPIAGENERALCABEZA/VERTIGO.png');
background-size: 100% 100%;
background-repeat: no-repeat;
margin-top: 1em;
transition: 0.7s;
}

#secCuatro p{
font-size: 1.2em;
text-align: justify;
margin-top: 2em;
color: #000;
transition: 0.7s;
text-align: justify;
}




.MainModuloArtrosis{
    position: relative;
   width: 100%;
   height: auto;
    top: 0em;
    margin: 0 auto;
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    padding: 1em; 
    box-sizing: border-box;

}













#SeccionJoroba1{
 width: 30em;
    height: 44em;
    margin: 1em; /* Ajusta el margen para espaciado entre elementos */
    box-sizing: border-box; /* Asegura que el padding y el borde se incluyan en el cálculo del ancho y la altura */
background: #FFF;
border: 1px solid #000;
transition: 0.5s;

}


#SeccionJoroba1 h1{
font-size: 1.7em;
text-align: center;
margin-top: 1.3em;
font-weight: bold;
color: #000;
}

.imagenjoroba {
width: 100%;
height: 20em;
background-image: url('IMAGENES/POSTURAS/JOROBA/IMAJENJOROBA.png');
background-size: 100% 100%;
background-repeat: no-repeat;
margin-top: 2em;
transition: 0.7s;
}

#SeccionJoroba1 p {
    font-size: 1.2em;
    width: 20em;
    margin-top: 2em;
    color: #000;
    text-align: center; /* Centra el texto dentro del párrafo */
    margin-left: auto; /* Centra el párrafo dentro de su contenedor */
    margin-right: auto; /* Centra el párrafo dentro de su contenedor */
    line-height: 2; /* Aumenta el espacio entre las líneas del texto */
}






























#SeccionCervical{
 width: 30em;
    height: 44em;
    margin: 1em; /* Ajusta el margen para espaciado entre elementos */
    box-sizing: border-box; /* Asegura que el padding y el borde se incluyan en el cálculo del ancho y la altura */
background: #FFF;
border: 1px solid #000;
transition: 0.5s;

}


#SeccionCervical h1{
font-size: 1.7em;
text-align: center;
margin-top: 1.3em;
font-weight: bold;
color: #000;
}

.ImagenSeccionCervical {
width: 100%;
height: 20em;
background-image: url('IMAGENES/POSTURAS/JOROBA/DOLORENELTRAPECIO.png');
background-size: 100% 100%;
background-repeat: no-repeat;
margin-top: 2em;
transition: 0.7s;
}

#SeccionCervical p {
    font-size: 1.2em;
    width: 20em;
    margin-top: 2em;
    color: #000;
    text-align: center; /* Centra el texto dentro del párrafo */
    margin-left: auto; /* Centra el párrafo dentro de su contenedor */
    margin-right: auto; /* Centra el párrafo dentro de su contenedor */
    line-height: 2; /* Aumenta el espacio entre las líneas del texto */
}














#SeccionHerniaDiscal{
 width: 30em;
    height: 44em;
    margin: 1em; /* Ajusta el margen para espaciado entre elementos */
    box-sizing: border-box; /* Asegura que el padding y el borde se incluyan en el cálculo del ancho y la altura */
background: #FFF;
border: 1px solid #000;
transition: 0.5s;

}


#SeccionHerniaDiscal h1{
font-size: 1.7em;
text-align: center;
margin-top: 1.3em;
font-weight: bold;
color: #000;
}

.ImagenSeccionHerniaDiscal {
width: 100%;
height: 20em;
background-image: url('IMAGENES/POSTURAS/JOROBA/HERNIADISCALIMAGEN.png');
background-size: 100% 100%;
background-repeat: no-repeat;
margin-top: 2em;
transition: 0.7s;
}

#SeccionHerniaDiscal p {
    font-size: 1.2em;
    width: 20em;
    margin-top: 2em;
    color: #000;
    text-align: center; /* Centra el texto dentro del párrafo */
    margin-left: auto; /* Centra el párrafo dentro de su contenedor */
    margin-right: auto; /* Centra el párrafo dentro de su contenedor */
    line-height: 2; /* Aumenta el espacio entre las líneas del texto */
}




















#SeccionCervicalgia{
 width: 30em;
    height: 44em;
    margin: 1em; /* Ajusta el margen para espaciado entre elementos */
    box-sizing: border-box; /* Asegura que el padding y el borde se incluyan en el cálculo del ancho y la altura */
background: #FFF;
border: 1px solid #000;
transition: 0.5s;

}


#SeccionCervicalgia h1{
font-size: 1.7em;
text-align: center;
margin-top: 1.3em;
font-weight: bold;
color: #000;
}

.imagenCervicalgia {
width: 100%;
height: 20em;
background-image: url('IMAGENES/POSTURAS/JOROBA/ARTROSISCERVICAL.png');
background-size: 100% 100%;
background-repeat: no-repeat;
margin-top: 2em;
transition: 0.7s;
}

#SeccionCervicalgia p {
    font-size: 1.2em;
    width: 20em;
    margin-top: 2em;
    color: #000;
    text-align: center; /* Centra el texto dentro del párrafo */
    margin-left: auto; /* Centra el párrafo dentro de su contenedor */
    margin-right: auto; /* Centra el párrafo dentro de su contenedor */
    line-height: 2; /* Aumenta el espacio entre las líneas del texto */
}




























#SeccionHombrosCaidos{
 width: 30em;
    height: 44em;
    margin: 1em; /* Ajusta el margen para espaciado entre elementos */
    box-sizing: border-box; /* Asegura que el padding y el borde se incluyan en el cálculo del ancho y la altura */
background: #FFF;
border: 1px solid #000;
transition: 0.5s;

}


#SeccionHombrosCaidos h1{
font-size: 1.7em;
text-align: center;
margin-top: 1.3em;
font-weight: bold;
color: #000;
}

.imagenHombrosCaidos {
width: 100%;
height: 20em;
background-image: url('IMAGENES/POSTURAS/JOROBA/HOMBROSCAIDOS.png');
background-size: 100% 100%;
background-repeat: no-repeat;
margin-top: 2em;
transition: 0.7s;
}

#SeccionHombrosCaidos p {
    font-size: 1.2em;
    width: 20em;
    margin-top: 2em;
    color: #000;
    text-align: center; /* Centra el texto dentro del párrafo */
    margin-left: auto; /* Centra el párrafo dentro de su contenedor */
    margin-right: auto; /* Centra el párrafo dentro de su contenedor */
    line-height: 2; /* Aumenta el espacio entre las líneas del texto */
}














#SeccionTendinopatiamanrotador{
 width: 30em;
    height: 44em;
    margin: 1em; /* Ajusta el margen para espaciado entre elementos */
    box-sizing: border-box; /* Asegura que el padding y el borde se incluyan en el cálculo del ancho y la altura */
background: #FFF;
border: 1px solid #000;
transition: 0.5s;

}


#SeccionTendinopatiamanrotador h1{
font-size: 1.7em;
text-align: center;
margin-top: 1.3em;
font-weight: bold;
color: #000;
}

.imagenTendinopatiamanrotador {
width: 100%;
height: 20em;
background-image: url('IMAGENES/POSTURAS/JOROBA/MANGUITOROTADOR.png');
background-size: 100% 100%;
background-repeat: no-repeat;
margin-top: 2em;
transition: 0.7s;
}

#SeccionTendinopatiamanrotador p {
    font-size: 1.2em;
    width: 20em;
    margin-top: 2em;
    color: #000;
    text-align: center; /* Centra el texto dentro del párrafo */
    margin-left: auto; /* Centra el párrafo dentro de su contenedor */
    margin-right: auto; /* Centra el párrafo dentro de su contenedor */
    line-height: 2; /* Aumenta el espacio entre las líneas del texto */
}
























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
background-image: url('WA.png');
background-size: 100% 100%;
background-repeat: no-repeat;
width: 3.5em;
height:3.5em;
top: 1.3em;
}















































































</style>






<main class="MainModuloArtrosis">


<div class="row">
<div class="col-sm-4" id="SeccionJoroba1">
<h1>ELIMINAR LA JOROBA</h1>
<div class="imagenjoroba"></div>
<p>
  Se manifiesta como una protuberancia en la parte superior de la espalda. Esta condición se conoce médicamente como "cifosis" cuando se refiere a una curvatura exagerada en la región torácica de la columna vertebral.
</p>   
</div>




<div class="col-sm-4" id="SeccionCervical">
<h1>ARTROSIS CERVICAL</h1>
<div class="ImagenSeccionCervical"></div>
<p>
Es una enfermedad degenerativa que afecta a las articulaciones 
de la columna cervical.
Se caracteriza por el desgaste del cartilagoque recubre las superficies
de las vertebras.
</p>   
</div>







<div class="col-sm-4" id="SeccionHerniaDiscal">
<h1>HERNIA DISCAL</h1>
<div class="ImagenSeccionHerniaDiscal"></div>
<p>
Ocurre cuando una parte del disco intervertebral se desplaza fuera de su posición normal y presiona los nervios circundantes. 
</p>   
</div>
</div>





<div class="col-sm-4" id="SeccionCervicalgia">
<h1>CERVICALGIA</h1>
<div class="imagenCervicalgia"></div>
<p>
  Se manifiesta como una protuberancia en la parte superior de la espalda. Esta condición se conoce médicamente como "cifosis" cuando se refiere a una curvatura exagerada en la región torácica de la columna vertebral.
</p>   
</div>




<div class="col-sm-4" id="SeccionHombrosCaidos">
<h1>HOMBROS CAIDOS</h1>
<div class="imagenHombrosCaidos"></div>
<p>
  Se manifiesta como una protuberancia en la parte superior de la espalda. Esta condición se conoce médicamente como "cifosis" cuando se refiere a una curvatura exagerada en la región torácica de la columna vertebral.
</p>   
</div>






<div class="col-sm-4" id="SeccionTendinopatiamanrotador">
<h1>TENDINOPATIA DEL MANGUITO ROTADOR
</h1>
<div class="imagenTendinopatiamanrotador"></div>
<p>
  Se manifiesta como una protuberancia en la parte superior de la espalda. Esta condición se conoce médicamente como "cifosis" cuando se refiere a una curvatura exagerada en la región torácica de la columna vertebral.
</p>  


 
</div>
</div>
</main>
















































































































































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









</body>
</html>