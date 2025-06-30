<?php

    include_once "funcoes.php";
    include_once "funcoes.php";
   
    if($_SERVER["REQUEST_METHOD"] === "POST"){

        $produto = $_POST["nome"] ?? null;
        $preco = $_POST["preco"] ?? null;
        $quantidade = $_POST["quantidade"] ?? null;

        if(varValida($produto) && varValida($preco) && varValida($quantidade)){
            // echo "sucesso";

            $info = calcularEFormataEstoque($produto, $preco, $quantidade);
            // echo "<pre>";
            // var_dump($info);
            // echo "</pre>";
            include "infoProduto.php";

        }else{
            echo "<h3>ERRO - Digite todos os valores... </h3>";
            include "formulario.php";
        }

        
    } else{
        include "formulario.php";
    }
   


?>