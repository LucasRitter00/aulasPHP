<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 3</title>
</head>
<body>


    <h2>Salario do Funcionario</h2>

    <?php 
        $nome = "Maria";
        $idade = 16;
        $salario = 1893.478;
        $faculdade = "ads";

        echo "<p><strong>Nome: </strong>$nome</p>";
    ?>

    <p><strong>Idade: </strong> <?=$idade?> </p>
    <p><strong>Salario: R$ </strong> <?=number_format($salario, 2, ", ", " ")?> </p>
    <p><strong>Faculdade: <?php echo $faculdade; ?></strong></p>

    <?php 
        
        if($idade >= 18){
            echo "<p style='color:green;'>Funcionario MAIOR de idade</p>";
        }else{
            echo "<p style=\"color:red;\">Funcionario MENOR de idade</p>";
        }

    ?>



    <?php if($idade >= 18): ?>
        <p style="color:green;">Funcionario MAIOR de idade</p>
    <?php else: ?>
        <p style="color:red;">Funcionario MENOR de idade</p>
    <?php endif; ?>
    

</body>
</html>