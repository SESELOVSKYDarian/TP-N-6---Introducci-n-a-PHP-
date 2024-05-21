<html>
<head>
<title></title>
</head>
<body>
    <h1>Punto 9</h1>
    <p>
        <?php
            $a = 13;
            $b = 15;
            $valor = 0;
            if ($a == $b){
                $valor = 1;
            }
            if($a > $b){
                $valor = 2;
            }
            if($a < $b){
                $valor = 3;
            }
            echo "Es: $valor";
        ?>
    </p>
</body>
</html>