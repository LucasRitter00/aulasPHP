<?php


    function campoObrigatorio($valor) : bool {
        return is_null($valor) || empty(trim($valor));
    }
    
    function tamanhoString($valor, $min = 5, $max = 10) : bool {

        $tam = strlen($valor);
        return ($tam < $min || $tam > $max);
        
        // return ($tam < 5 || $tam > 10);
        // return (strlen($valor) < 5 || strlen($valor) > 10);

    }
    

?>