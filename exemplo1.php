<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loja Online :)</title>
    <style>
    table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
    }

    td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
    }

    tr:nth-child(even) {
    background-color: #dddddd;
    }
    </style>
</head>
<body>
    
    <h1>Lista de Produtos</h1>

    <?php 

        $produtos = [
            ["nome" => "Celular",    "preco" => 1752.392, "cat" => "Eletronico"],
            ["nome" => "Notebook G", "preco" => 8000.682, "cat" => "PC"],
            ["nome" => "Fone",       "preco" => 40.99,    "cat" => "Acessorios"],
            ["nome" => "Relogio",    "preco" => 683,      "cat" => "Eletronico"]
        ];

        $somaValores = 0;
        $quantidadeProdutos = count($produtos);
    ?>

    <table style="border: 1px solid black;">
        <tr>
            <th>Nome</th>
            <th>Categoria</th>
            <th>Valor R$</th>
        </tr>

        <?php
            foreach($produtos as $item){
                $somaValores += $item["preco"];
        ?>
                <tr>
                    <th><?=$item["nome"]?></th>
                    <th><?php echo $item["cat"]; ?></th>
                    <th>R$ <?= number_format($item["preco"], 2, ", ", " ")?></th>
                </tr>
            
        <?php 
            }
        ?>
    </table>

    <h3>Total Compra: <?=$somaValores?></h3>
    <h3>Media Valores: <?=$somaValores/$quantidadeProdutos?></h3>

</body>
</html>