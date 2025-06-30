<?php

    session_start();
    // var_dump($_SESSION);

    $usuario = $_SESSION["usuario"] ?? null;

    if(!is_null($usuario)){
        echo "<h2>bem vindo $usuario</h2>";
    }else{
        echo "<h2>erro - fazer login</h2>";
    }

    
?>