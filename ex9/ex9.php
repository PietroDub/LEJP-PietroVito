<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Ex09 - Arredondamento (PHP)</title>
<style>
body { font-family: Arial; margin: 40px; }
input, button { margin: 5px; padding: 5px; }
.resultado { margin-top: 15px; font-weight: bold; }
</style>
</head>
<body>

<h2>Ex09 - Arredondamento de número</h2>

<form method="post">
    <label>Digite um número decimal:</label>
    <input type="number" name="n" step="0.01" required>
    <button type="submit" name="arredondar">Calcular</button>
</form>

<?php
if (isset($_POST['arredondar'])) {
    $n = floatval($_POST['n']);
    $ceil = ceil($n);
    $floor = floor($n);

    echo "<div class='resultado'>";
    echo "<p>Valor original: {$n}</p>";
    echo "<p>Ceil (para cima): {$ceil}</p>";
    echo "<p>Floor (para baixo): {$floor}</p>";
    echo "</div>";
}
?>

</body>
</html>
