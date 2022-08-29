<?php

require_once "vendor/autoload.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FABRICA DE BOLOS SOLID PHP</title>
</head>

<body>
    <h1>ESCOLHA SEU BOLO</h1>
    <form method="post">
        <select name="opcao">
            <option value="BoloCenoura">Bolo cenoura</option>
            <option value="BoloChocolate">Bolo cholocate</option>
        </select>
        <button type="submit">ESCOLHER</button>
    </form>
</body>

</html>