<?php


    // $conn = ...
    // $banco = new mysqli("host", "usuario", "senha", "nome-do-banco");
    $banco = new mysqli("localhost:3307", "root", "", "php-segunda-noite");
    echo "<pre>";
    // var_dump($banco);


    $q = "SELECT * FROM usuarios";
    $resp = $banco->query($q);
    var_dump($resp);

    $usu = $resp->fetch_object();
    print_r($usu);

    $usu = $resp->fetch_object();
    print_r($usu);

    echo "<hr>";
    $q = "SELECT * FROM usuarios WHERE usuario='lipezinho_ofc'";
    $resp = $banco->query($q);
    var_dump($resp);

    $usu = $resp->fetch_object();
    print_r($usu);

    echo "<br> ID: " . $usu->id;
    echo "<br> Usuario: " . $usu->usuario;
    echo "<br> Nome: " . $usu->nome;
    echo "<br> Senha: " . $usu->senha;



?>