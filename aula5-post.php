<form action="" method="get">
    Nome: <input type="text" name="nome">
    <input type="submit" value="Enviar">
</form>

<?php 

    echo "<h2>GET</h2>";
    var_dump($_GET);

    echo "<hr>";
    echo "<h2>POST</h2>";
    var_dump($_POST);

    echo "<hr>";
    echo "<h2>REQUEST</h2>";
    var_dump($_REQUEST);


    if($_SERVER["REQUEST_METHOD"] == "GET"){
        echo "Recebido via GET";
    } else if($_SERVER["REQUEST_METHOD"] == "POST"){
        echo "Recebido via POST";
    } else {
        echo "Nenhum dado recebido";
    }




?>