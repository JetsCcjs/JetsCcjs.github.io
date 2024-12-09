<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>

<div id="RotacionImagenesRotacionCita" class="w3-content w3-section" >
  <img class="RotacionPrincipal" src="../IMAGENES/1.jpg">
  <img class="RotacionPrincipal" src="../IMAGENES/3.jpg">
  <img class="RotacionPrincipal" src="../IMAGENES/4.jpg">
</div>

<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("RotacionPrincipal");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 12000);
}
</script>
<style type="text/css">
*{
margin: 0;
padding: 0;
}  




#RotacionImagenesRotacionCita {
position: absolute;
top: 0.0em;
width: 100%;
height: auto;
border: none;
}

#RotacionImagenesRotacionCita img{
top: 0.0em;
width: 100%;
height: 100em
}

</style>
</body>
</html>