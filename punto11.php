<html>
<head>
<title></title>
</head>
<body>
    <h1>Punto 11</h1>
    <p>
        <?php
            $aleatorio = rand(1, 3);
            if($aleatorio == 1){
                echo "uno <br> $aleatorio";
            }
            if($aleatorio == 2){
                echo "dos <br> $aleatorio";
            }
            if($aleatorio == 3){
                echo "tres <br> $aleatorio";
            }
        ?>
    </p>
</body>
</html>