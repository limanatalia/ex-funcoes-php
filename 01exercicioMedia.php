<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular Média</title>
    <style>

    </style>
</head>
<body>
    <?php
        $nota1 = $_GET['nota1'];
        $nota2 = $_GET['nota2'];

        $media = ($nota1 + $nota2) / 2;
        echo "A média entre $nota1 e $nota2 é igual a $media";
        $tipo = ($media >= 5) ? " APROVADO" : "  REPROVADO";
        
        echo "<p>Situação do Aluno:<span style='color:red;'>$tipo</span>";

    ?>
</body>
</html>