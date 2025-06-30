<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo 1</title>
</head>
<body>
    
    <h2>Variaveis</h2>

    <?php

        $nome = "Maria";
        $idade = 22;
        $salario = 300000000000.9786;
        echo "<p>Nome: <strong> $nome </strong></p>";

        // $salarioBonito = number_format($salario, 2, ",", "."); 

    ?>

    <p>Idade: 
        <strong> 
            <?php 
                $idade += 10;
                echo $idade; 
            ?> 
        </strong>
    </p>

    <p>Salário: <strong> <?= $salario ?> </strong></p>

    <?php
        $salarioBonito = number_format($salario, 2, ", ", " . ");
    ?>
    <p>Salário: <strong> <?= $salarioBonito ?> </strong></p>
    

</body>
</html>