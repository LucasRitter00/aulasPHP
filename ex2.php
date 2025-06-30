<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo 2</title>
</head>
<body>

    <h2>Verificador de Acesso</h2>

    <?php 
        $idade = 17;
        $tem_ingresso = true;

        /*if($idade >= 18 && $tem_ingresso){
            echo "<p>Acesso liberado!</p>";
        }else {
            echo "<p>Acesso negado :/</p>";
        }*/
    
    ?>

    <?php if($idade >= 18 && $tem_ingresso){ ?>
        <p style="color: green">Acesso liberado!</p>
    <?php } else { ?>
            <p style="color: red">Acesso negado!</p>
    <?php }  ?>
        
    <?php if($idade >= 18 && $tem_ingresso): ?>
        <p style="color: green">Acesso liberado!</p>
    <?php else: ?>
        <p style="color: red">Acesso negado!</p>
    <?php endif; ?>
    
    

</body>
</html>