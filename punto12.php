<html>
<head>
<title>Ejemplo de operaciones</title>
</head>
<body>
    <h1>Ejemplo de operaciones aritmeticas imaticas en en PHP</h1>
    <?php
    /** i) El script suma, resta, multiplica y divide a a con b y suma 1 al a y resta 1 al b.
     * ii) Para declarar una variable númerica, se tiene que poner el signo $ sumado a el nombre de la variable.
     * iii) Para realizar una operación con variables númericas, se debe poner el signo $ y el nombre de la variable 
     * con la operación a realizar sumado a la otra variable.
     * iv) Si es posible llamando a la variable numérica y una coma más comillas donde se encuentra una cadena de caracteres.
     * v) Para icrementar la variable, ponemos el signo $ y el nombre de la variable más el signo + por duplicado.
     *  */
        $a = 8;
        $b = 3;
        echo $a + $b, "<br>";
        echo $a - $b, "<br>";
        echo $a * $b, "<br>";
        echo $a / $b, "<br>";
        $a++;
        echo $a, "<br>";
        $b--;
        echo $b,"<br>";
    ?>
</body>
</html>