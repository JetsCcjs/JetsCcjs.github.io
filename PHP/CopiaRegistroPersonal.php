<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "beautifulbody";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$vari1 = @$_POST['identidadpersonal'];
$vari2 = @$_POST['nombrepersonal'];
$vari3 = @$_POST['apellidopersonal'];
$vari4 = @$_POST['fechanacpersonal'];
$vari5 = @$_POST['emailpersonal'];
$vari6 = @$_POST['passpersonal'];

$sql = "INSERT INTO registropersonal (identidadpersonal, nombrepersonal, apellidopersonal, telefonopersonal, emailpersonal, passwordpersonal)
VALUES ('$vari1','$vari2','$vari3','$vari4','$vari5','$vari6')";

if ($conn->query($sql) === TRUE) {
    // Envío de correo electrónico con el enlace
    $to = $vari5; // Dirección de correo electrónico del usuario
    $subject = "Registro exitoso en Beautiful Body"; // Asunto del correo electrónico
    $message = "Hola $vari2,\n\nGracias por registrarte en nuestra plataforma. de Beautiful Body"; // Mensaje del correo electrónico
    $headers = "johnmoretorres@gmail.com"; // Dirección de correo electrónico del remitente

    // Envío del correo electrónico
    mail($to, $subject, $message, $headers);

    // Mostrar mensaje de felicitaciones
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
    <body>
    <div class="contenidogeneralResultado">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title" style="text-align: center; font-family: 'Orbitron', sans-serif;">FELICITACIONES</h4>
                </div>
                <div class="modal-body" id="CuerpomodalRegistrado">
                    <p style="text-align: center; margin-top: 6%; font-family: 'Orbitron', sans-serif; font-size: 2em;">
                        <?php
                        echo "Hola $vari2, has sido registrado en nuestra plataforma.";
                        ?>
                    </p>
                    <a href="../Index.php">
                        <button id="BotonRegistrado" class="button" style="vertical-align:middle"><span>Aceptar </span></button>
                    </a>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>

    <style>
        * {
            box-sizing: border-box;
        }

        /* width */
        ::-webkit-scrollbar {
            width: 10px;
        }

        /* Track */
        ::-webkit-scrollbar-track {
            box-shadow: inset 0 0 5px grey;
            border-radius: 10px;
        }

        /* Handle */
        ::-webkit-scrollbar-thumb {
            background: #0288D1;
            border-radius: 15px;
        }

        .contenidogeneralResultado {
            position: absolute;
            margin-left: auto;
            margin-right: auto;
            left: 0;
            right: 0;
            top: 5em;
        }

        #CuerpomodalRegistrado {
            width: 100%;
            height: 20em;
        }

        .button {
            display: inline-block;
            border-radius: 4px;
            background-color: #f4511e;
            border: none;
            color: #FFFFFF;
            text-align: center;
            width: 200px;
            transition: all 0.5s;
            cursor: pointer;
            margin: 5px;
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

        #BotonRegistrado {
            position: absolute;
            margin-left: auto;
            margin-right: auto;
            left: 0;
            right: 0;
            width: 15em;
            height: 4em;
            margin-top: 2.5em;
            background: #01579B;
        }
    </style>
    </body>
    </html>
    <?php
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>