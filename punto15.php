<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Punto 15</title>
</head>
<body>
    <h1>Punto 15</h1>
    <?php
        $a = 5;
        $b = 3;
        $c = -12;
        echo "i) ", $a > 3, "<br>";
        echo "ii) ", $a > $c, "<br>";
        echo "iii) ", $a < $c, "<br>";
        echo "iv) ", $b < $c, "<br>";
        echo "v) ", $b != $c, "<br>";
        echo "vi) ", $a == 3, "<br>";
        echo "vii) ", $a * $b == 15, "<br>";
        echo "viii) ", $a * $b == -30, "<br>";
        echo "ix) ", $c / $b < $a, "<br>";
        echo "x) ", $c / $b == -10, "<br>";
        echo "xi) ", $c / $b == -4, "<br>";
        echo "xii) ", $a + $b + $c == 5, "<br>";
        echo "xiii) ", ($a + $b == 8) && ($a - $b == 2), "<br>";
        echo "xiv) ", ($a + $b == 8) || ($a - $b == 6), "<br>";
        echo "xv) ", $a > 3 && $b > 3 && $c < 3, "<br>";
        echo "xvi) ", $a > 3 && $b > 3 && $c < -3, "<br>";
    ?>
</body>
</html>