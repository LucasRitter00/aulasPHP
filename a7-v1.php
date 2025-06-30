<?php

    if($_SERVER["REQUEST_METHOD"] === 'POST'){
        
        $tuite = $_POST['tuite'] ?? null;
        $erros = [];

        if(is_null($tuite)){
            $erros['tuite'] = "erro - null";
        }

        $tuite = trim($tuite);
        if(empty($tuite)){
            $erros['tuite'] = "erro - em branco";
        }

        else if(strlen($tuite) < 5){
            $erros['tuite'] = "erro - menor que 5 caracteres";
        }
        
        else if(strlen($tuite) > 10){
            $erros['tuite'] = "erro - maior que '144' caracteres";
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