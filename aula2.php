<!-- COMENTARIO HTML -->

<?php

    // COMENTARIO EM PHP
    echo "<h2>Ola Mundo!</h2>\n";
    print "Ola <br> Mundo 2";

    $nome = "João";
    $idade = 28;
    $compra = 37.52;

    echo "<hr>";
    var_dump($nome);
    echo "<br>";
    var_dump($idade);
    echo "<br>";
    var_dump($compra);

    echo "<h3>Ola $nome!</h3>";
    echo "<p>O Valor do produto é R$ $compra</p>";

    echo "<hr>";

    $num1 = 8;
    $num2 = 39;

    $soma = $num1 + $num2;
    echo "$num1 + $num2 = $soma"; // string
    echo "<br>";
    echo $num1 + $num2; // faz a conta

    echo "<br>";

    echo "$num1 + $num2 = " . $num1 + $num2;
    // ---- string -------- . conta


    echo "<hr>";

    echo "<br> > " . $num1;
    $num1 += 1;

    echo "<br> > " . $num1;
    $num1 ++;
    
    echo "<br> > " . ++$num1;
    echo "<br> > " . $num1;

    
    echo "<hr>";
    // $num3 = "70u88";
    $num3 = false;
    $num4 = 9;

    var_dump($num3);
    var_dump($num4);
    
    $soma = $num3 + $num4;
    echo "<br>$num3 + $num4 = $soma";



?>