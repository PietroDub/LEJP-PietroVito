<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Ex08 - Fatorial (PHP)</title>
<style>
body { font-family: Arial; margin: 40px; }
input, button { margin: 5px; padding: 5px; }
.resultado { margin-top: 15px; font-weight: bold; }
</style>
</head>
<body>

<h2>Ex08 - Calcular Fatorial</h2>

<form method="post">
    <label>Digite um número:</label>
    <input type="number" name="n" required>
    <button type="submit" name="calcular">Calcular</button>
</form>

<?php
if (isset($_POST['calcular'])) {
    $n = intval($_POST['n']);
    $fat = 1;
    for ($i = 1; $i <= $n; $i++) {
        $fat *= $i;
    }

    echo "<div class='resultado'>";
    echo "<p>{$n}! = {$fat}</p>";
    echo "</div>";
}
?>

</body>
</html>
