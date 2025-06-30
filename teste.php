<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AULA 01!</title>
</head>
<body>

    <h1>Aula 1 - HTML e PHP</h1>
    

    <?php
    
        echo "<p>Ola Mundo</p>";
        print "Outro Mundo<br>";
        print "Mais \n um Mundo";

        $nome = "Joao";
        echo "<br>Ola $nome!";

        $numero = 10;
        $n1 = "2";
        $n2 = 1.1;

        $chuva = true;
        echo "<br>";

        $chuva = "oi";
        
        var_dump($n1);
        var_dump($n2);
        var_dump($chuva);
        $chuva = 3.2;

        echo "<br>";
        echo "<br>$chuva + $n2 = " . $chuva + $n2;

        

    ?>

    
</body>
</html>