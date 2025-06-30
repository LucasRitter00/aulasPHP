<?php

    // for (int i = 0; i < 5; i++) {}

    /*
    for($i = 0; $i < 5; $i++){
        echo "<p>Contador $i</p>\n";
    }

    $valor = 0;
    while($valor <= 5){
        echo "<p>While: $valor</p>";
        $valor += 2;
    }

    $valor = 0;
    do {
        echo "<p>** Do While: $valor</p>";
        $valor += 1.2;
    }while($valor <= 5)

    // foreach
    */

    echo "<hr>";
    $um_array = [];
    $outro_array = array();

    var_dump($um_array);
    var_dump($outro_array);

    echo "<br><br>";
    $frutas = ["Maça", "Banana", "Laranja", "Uva"];

    // var_dump($frutas);
    print_r($frutas);

    echo "<br>";
    $numeros = [1, 5.7, 7, 9.2, 11, 32];
    var_dump($numeros);

    echo "<br>";
    $tudo = [1, "ola", 1.73, true, "adeus", 5];
    var_dump($tudo);


    echo "<hr>";
    $frutas = ["Maça", "Banana", "Laranja", "Uva"];

    echo "Lista de Compras:";
    /*for($i = 0; $i < 4; $i++){
        echo "<br> - Item: " . $frutas[$i];
    }*/

    for($i = 0; $i < 4; $i++){
        $fru = $frutas[$i];
        echo "<br> - Item: $fru";
    }


    // para cada ITEM na lista FRUTAS faça....
    foreach($frutas as $item){
        echo "<br> ** Item: $item";
    }

    echo "<hr>";
    $pessoa = [
        "nome" => "João", 
        "sobrenome" => "Silva", 
        "idade" => 18, 
        "cidade" => "cwb"];
    
    // echo "- " . $pessoa[0];
    // var_dump($pessoa);
    echo "<pre>";
    print_r($pessoa);
    echo "</pre>";

    echo "<hr>";
    $turma = [
        ["nome" => "João", "idade" => 18, "cidade" => "cwb"],
        ["nome" => "Maria", "idade" => 22, "cidade" => "sjp"],
        ["nome" => "Lara", "idade" => 19, "cidade" => "sp"]
    ];

    echo "<pre>";
    // print_r($turma);
    echo "</pre>";

    for($i = 0; $i < 3; $i++){
        echo "<br> - " . $turma[$i]["nome"];
    }

    echo "<hr>";
    foreach($turma as $aluno){
        echo "<h3>Aluno(a)" . $aluno["nome"] . "</h3>";
        echo "<br>Idade: " . $aluno["idade"];
        echo "<br> Cidade: " . $aluno["cidade"];
    }
    

?>