<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Função 01</title>
</head>
<body>
    <?php
        function soma ($a, $b){
            $s = $a;
            echo "<p>A soma vale $s</p>";
        }

        soma (3, 4);
        soma (8, 2);
        $x = 9;
        $y = 15;
        soma ($x, $y);
    ?>
</body>
</html>