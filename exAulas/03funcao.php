<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Função 03</title>
</head>
<body>
<div>
    <?php
        function soma(){
            $p = func_get_args();
            $t = func_num_args();
            $s = 0;
            for ($i = 0; $i < $t; $i++){
                $s += $p[$i];
            }
            return $s;
        }

        $r = soma (60, 50);
        echo "A soma dos valores é $r";
    ?>
</div>
</body>
</html>