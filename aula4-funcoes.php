<?php

    declare(strict_types=1);

    // echo "<h2 style='' class='' id=''>Titulo 2</h2>";

    // void, int, float, bool, string, fun, def ---> function
    /*function titulo(){
        echo "<h2 style='' class='' id=''>Titulo 2</h2>";
    }

    titulo();
    titulo();
    titulo();

    function criarTitulo($texto){
        echo "<h2>$texto</h2>";
    }

    criarTitulo("Aula 4 - Funcoes");
    criarTitulo("Aula 4 - GET");

    function tituloBonito($texto){
        echo "<h2>##############</h2>";
        echo "<h2>## $texto ##</h2>";
        echo "<h2>##############</h2>";
    }


    tituloBonito("Aula 4 - Funcoes");
    tituloBonito("Aula 4 - GET");

    function calcularMedia($nome, $n1, $n2){
        $media = ($n1 + $n2) / 2;

        if($media >= 6){
            echo "<p>O Aluno(a) $nome foi aprovado com média $media!</p>";
        }else{
            echo "<p>O Aluno(a) $nome foi reprovado com média... melhor não saber o.O </p>";
        }

    }

    calcularMedia("João", 6, 10);
    calcularMedia("Pedro", 5.5, 5);

    function somar($a, $b){
        $soma = $a + $b;
        echo "<li> $a + $b = $soma";
    }

    echo "Listinha de somas: ";
    somar(5, 5);
    somar(2, 3);
    somar(8, 2);

    echo "<hr>";

    function somarNumeros(...$numeros){
        // var_dump($numeros);
        $soma = 0;
        echo "<li>";

        for ($i=0; $i < count($numeros); $i++) { 
            $soma += $numeros[$i];
            echo $numeros[$i] . " + ";
        }

        echo " = $soma";
    }

    somarNumeros(2, 2);
    echo "<hr>";
    somarNumeros(2, 5, 3, 10, 22, 44, 17);

    function algumacoisa($nome, $numero, $texto, ...$coisas){
        var_dump($coisas);
    }

    algumacoisa("jose", 99, "oi", 1, 7, 8, "ola", true);

    tituloBonito("Outras Funcoes");

    $verdadeiro = false;

    if($verdadeiro){
        function calcularIdade($nome, $ano){
            $idade = 2025 - $ano;
            echo "<p>$nome tem $idade anos.</p>";
        }
    }
    
    if($verdadeiro){
        calcularIdade("Pedro", 2005);
    }

    function calcularTriangulo(){
        echo "<br> ^";

        function funcional(){
            echo "<br> ta pago";
        }

    }


    calcularTriangulo();
    funcional();
*/

    function somaCinco(&$num){
        $num += 5;
        echo "<br> Num = $num";
    }

    // somaCinco(10);
    $idade = 20;

    echo "<br> Idade 1 = $idade";
    somaCinco($idade);
    echo "<br> Idade 2 = $idade";

    function conta($a, $b, &$resp){
        $resp = $a + $b;
    }

    $resultadoSoma = 0;
    conta(10, 5, $resultadoSoma);

    echo "<br> Conta = $resultadoSoma";


    function subtracao($a=20, $b=5){
        $sub = $a - $b;
        echo "<br> $a - $b = $sub";
    }

    subtracao();
    subtracao(15);
    subtracao(10, 5);


    function divisao(float $a, float $b) : float {
        $div = $a / $b; 
        return $div;
    }

    // divisao("10", 10);
    divisao(10, 10);

    


?>