<?php 

    // https://www.google.com/search ? q= aula+php


    //echo $_GET;
    var_dump($_GET);

    //...aula4.php?n1=10&n2=20
    // echo "<br>" . $_GET["n1"];
    // var_dump($_GET["n1"]);

    /*$n1 = $_GET["n1"];
    $n2 = $_GET["n2"];

    $soma = $n1 + $n2;
    echo "<br> $n1 + $n2 = $soma";*/

    // aula4.php?n1=180&n2=200
    /*$n1 = 0;
    $n2 = 0;

    if(isset($_GET["n1"])){
        $n1 = $_GET["n1"];
    }

    if(isset($_GET["n2"])){
        $n2 = $_GET["n2"];
    }

    $soma = $n1 + $n2;
    echo "<br> $n1 + $n2 = $soma";*/

    /*
    // operador ternario 
    $n1 = isset($_GET["n1"]) ? $_GET["n1"] : 1;
    $n2 = isset($_GET["n2"]) ? $_GET["n2"] : 2;

    $soma = $n1 + $n2;
    echo "<br> $n1 + $n2 = $soma";*/

    // aula4.php?n1=90&n2=22
    $n1 = $_GET["n1"] ?? 0;
    $n2 = $_GET["n2"] ?? 0;

    $soma = $n1 + $n2;
    echo "<br> $n1 + $n2 = $soma";


?>