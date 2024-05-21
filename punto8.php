<html>
<head>
<title></title>
</head>
<body>
    <h1>Punto 8</h1>
    <p>
        <?php
            $color = "rojo";
            switch ($color){
                case "rojo":
                    echo "Hola";
                    break;
                case "verde":
                    echo "Bienvenido";
                    break;
                default:
                echo "Ninguno";
            }
        ?>
    </p>
</body>
</html>