<?php

    function varValida($var) : bool{
        return !is_null($var) && !empty($var);
    }

    function calcularEFormataEstoque(string $nome, float $preco, float $quant){
        $total = $preco * $quant;

        $infoProduto["total"] = number_format($total, 2, ", ", ".");
        $infoProduto["nome"] = ucwords($nome);
        $infoProduto["preco"] = number_format($preco, 2, ", ", ".");
        $infoProduto["quantidade"] = number_format($quant, 0, ", ", ".");

        return $infoProduto;
    }


?>