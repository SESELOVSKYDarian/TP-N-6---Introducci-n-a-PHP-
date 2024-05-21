<html>
<head>
<title></title>
</head>
<body>
    <h1>Break en la ventana del navegador </hl>
    <p>
        <?php
            $hacefrio = 15;
            $respuesta = "";
            // Returna hace frío
            $temperatura = ($hacefrio<20) ? $respuesta = "Hace frio" : $respuesta = "No hace frio";
            echo $respuesta;
            //Siempre returna hace frío
            $temperatura = ($hacefrio<20 || $hacefrio>20) ? $respuesta = "Hace frio" : $respuesta = "No hace frio";
            echo $respuesta;
        ?>
    </p>
</body>
</html>