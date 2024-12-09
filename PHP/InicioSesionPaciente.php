<?php
session_start();
$nom=$_SESSION['IdInicio'];
include("../CONEXIONBD/CitasMEdicasBD.php");
$sql = "SELECT * FROM citaspacientesmadre where Identificacion='$nom'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {

$Identidad="".$row["Identificacion"]."";

?>
<!DOCTYPE html>
<html>
<head>
<title>REHABILITACION FISICA</title> 
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../ARCHIVOSBOOTSTRAP/css1/bootstrap.min.css">
<script src="../ARCHIVOSBOOTSTRAP/js/tests/vendor/jquery.min.js"></script>
<script src="../ARCHIVOSBOOTSTRAP/js/popover.min.js"></script>
<script src="../ARCHIVOSBOOTSTRAP/js1/bootstrap.min.js"></script>
</head>
<section class="ContenidoRegistroCita">
<section class="CuerpoRegistroCita">
<main class="CabeceraRegistroCita">
	
<nav class="navbar navbar-inverse" id="MenuGeneralPaciente">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#" id="TituloMenu">CENTRO CITAS MEDICAS</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="#" target="DatoRecibido">Inicio</a></li>

<?php
$nom=$_SESSION['IdInicio'];
?>
<li>
<?php
echo "<a target='IframeCitasRegistro' href='../HTML/RegistroCitaPaciente.php/?variable1=$nom'>
Citas Generales
</a>";
?>
</li>



      <li><a href="../HTML/" target="DatoRecibido">Consulta de Citas</a></li>
      <li><a href="../HTML/" target="DatoRecibido">Lugar Especializado</a></li>
    </ul>
<ul class="nav navbar-nav navbar-right">
<li>
<a href="#" data-toggle="modal" data-target="#RegistroModal"><span class="glyphicon glyphicon-user"></span> 
<?php
$nombreprincipalpaciente="".$row["Nombre"]."";
$apellidoprincipalpaciente="".$row["Apellido"]."";
echo "$nombreprincipalpaciente $apellidoprincipalpaciente";
?>
</a></li>
<li><a href="http://localhost/xampp/MADRE/"><span class="glyphicon glyphicon-log-in"></span> SALIR</a></li>
</ul>
</div>




</main>




<style type="text/css">
*{
margin: 0;
padding: 0;
}

.ContenidoRegistroCita{
width: 100%;
height: auto;

}

.CuerpoRegistroCita{
width: 100%;
height: 50em;

}

.CabeceraRegistroCita{
width: 100%;
height: 12em;
background: #D4DBE0;
margin: 0;
padding: 0;

}

.PiedePaginaRegistroCita{
width: 100%;
height: 12em;
background: #D4DBE0;
margin: 0;
padding: 0;

}




#MenuGeneralPaciente {
position: relative;
top: 8.2em;
max-width: 100%;
height: auto;
background: #2980B9;
border: none;
}

#MenuGeneralPaciente a:hover{
color: #000;
background-color: #fff;
}

#MenuGeneralPaciente a{
color: #fff;
}

#TituloMenu{
position: absolute;
visibility: hidden;
}


.RotacionIframeCitas{
width: 100%;
height: 40em;
top: 0.5em;
overflow-x:scroll;
overflow-y:hidden;
background-image: url(../IMAGENES-FISICAS/F1.jpg);
background-size: 100% 100%;
background-repeat: no-repeat;
border: none;
box-sizing: border-box;
padding-right: .45em;
position: relative;
transition: width 2s;
-webkit-transition: width 2s; /* Safari 3.1 to 6.0 */


}



</style>



<iframe class="RotacionIframeCitas" frameborder="0" name="IframeCitasRegistro"></iframe>















<?php
}
} else {
 echo "0 results";
}
mysqli_close($conn);
?>	
</section>
<main class="PiedePaginaRegistroCita"></main>	
</section>
</html>