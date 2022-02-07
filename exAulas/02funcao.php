<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Função 02</title>
</head>
<body>
    <?php
        function soma($a, $b){
            $s = $a + $b;
            return $s;
        }
        $x = 8;
        $y = 6;
        $r = soma ($x, $y);
        echo "A soma entre $x e $y é $r";
    ?>    
</body>
</html>