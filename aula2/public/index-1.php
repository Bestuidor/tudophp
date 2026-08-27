<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $numero1 = $_POST["numero1"];
    $numero2 = $_POST["numero2"];

    $resultado = $numero1 + $numero2;

    echo "Número 1: " . $numero1 . "<br>";
    echo "Número 2: " . $numero2 . "<br>";
    echo "Resultado: " . $resultado . "<br>";
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Teste POST</title>
</head>

<body>

<h2>POST no mesmo formulário</h2>

<form method="POST">

    <label>Número 1:</label>
    <input type="number" name="numero1" required>

    <br><br>

    <label>Número 2:</label>
    <input type="number" name="numero2" required>

    <br><br>

    <button type="submit">Enviar POST</button>

</form>

</body>
</html>