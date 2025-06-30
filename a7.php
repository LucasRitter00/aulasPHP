<?php

    require "validator.php";

    if($_SERVER["REQUEST_METHOD"] === 'POST'){
        
        $tuite = $_POST['tuite'] ?? null;
        $erros = [];

        if(campoObrigatorio($tuite)){
            $erros['tuite'] = "* Campo Obrigatorio :O ";
        }

        else if(tamanhoString($tuite, 2, 6)){
            $erros['tuite'] = " * Digite entre 5 e 10 caracteres";
        }

        // salvar // postagem // banco
        

    }else{
        echo "oi";
    }

    

?>

<form method="post">
    Tuite: <input type="text" name="tuite">
    <p style="color:red;"><?= $erros['tuite'] ?? "👍" ?></p>

    <input type="submit" value="Enviar">
</form>