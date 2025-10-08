<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Ex10 - Contar Pares (PHP)</title>
<style>
body { font-family: Arial; margin: 40px; }
input, button { margin: 5px; padding: 5px; }
.resultado { margin-top: 15px; font-weight: bold; }
</style>
</head>
<body>

<h2>Ex10 - Contar números pares até digitar 0</h2>

<form method="post">
    <label>Digite um número:</label>
    <input type="number" name="n" required>
    <button type="submit" name="enviar">Enviar</button>
    <button type="submit" name="resetar">Resetar</button>
</form>

<?php
if (!isset($_SESSION['pares'])) {
    $_SESSION['pares'] = 0;
}

if (isset($_POST['enviar'])) {
    $n = intval($_POST['n']);

    if ($n == 0) {
        echo "<div class='resultado'>";
        echo "<p>Total de números pares digitados: {$_SESSION['pares']}</p>";
        echo "</div>";
        $_SESSION['pares'] = 0; // Zera após exibir
    } else {
        if ($n % 2 == 0) {
            $_SESSION['pares']++;
        }
    }
}

if (isset($_POST['resetar'])) {
    $_SESSION['pares'] = 0;
    echo "<p class='resultado'>Contador resetado!</p>";
}
?>

</body>
</html>
