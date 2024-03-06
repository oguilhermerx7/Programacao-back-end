<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Função abs</title>
</head>
<body>
    <h1>Faça um teste de sua função Abs</h1>
    <input type = "number" name="numero" id="numero">
    <input type="submit">
    <?php
    $numero = $_GET[$numero];
    $valorAbsoluto = abs($numero);
    echo "<p>O valor absoluto de $numero é $valorAbsoluto.</p>";
    ?>
</body>
</html>