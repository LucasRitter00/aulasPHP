<?php 

    function calcularIMC(float $peso, float $altura) : float {
        return $peso / ($altura ** 2);
    }

    function classificarIMC(float $valorIMC) : string {

        if($valorIMC < 18.5) return "Abaixo do peso";
        else if($valorIMC < 25) return "Peso normal";
        else if($valorIMC < 30) return "Sobrepeso";
        else return "Obesidade";

    }



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


    <h2>Calculadora de IMC</h2>

    <form action="" method="get">
        Altura: <input type="number" name="altura" step="0.1"><br>
        Peso:   <input type="number" name="peso"   step="0.1"><br>
        Idade: <input type="number" name="idade"><br>
        <input type="submit" value="Calcular">
    </form>

    <?php 

        // var_dump($_GET);
        $altura = $_GET["altura"] ?? null;
        $peso = $_GET["peso"] ?? null;
        $idade = $_GET["idade"] ?? null;

        // $idade -> ""

        // is_null()
        // empty()

        if(!is_null($altura) && !is_null($peso) && !is_null($idade)){
            
            if(!empty($altura) && !empty($peso) && !empty($idade)){
                // echo "blz";

                // $imc = $peso / ($altura ** 2); // pow(var, 2)
                $imc = calcularIMC($peso, $altura);

                echo "<br>Peso: $peso";
                echo "<br>Altura: $altura";
                echo "<br>Idade: $idade";
                echo "<br>IMC: $imc ";
                echo "<br>IMC" . classificarIMC($imc);

            }else{
                echo "<h3>Valor em branco...</h3>";
            }

        }else{
            echo "<h3>Digite os valores...</h3>";
        }




    ?>

    
</body>
</html>