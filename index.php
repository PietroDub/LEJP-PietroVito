<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Lista de Exercícios JavaScript e PHP</title>
<style>
body { font-family: Arial; background: #f0f0f0; text-align: center; }
a { display: block; margin: 10px auto; width: 250px; padding: 10px;
    background: #007bff; color: white; text-decoration: none; border-radius: 8px; }
a:hover { background: #0056b3; }
</style>
</head>
<body>
<h1>Lista de Exercícios - JS e PHP</h1>

<?php
for($i = 1; $i <= 10; $i++){
    echo "<a href='ex0$i/index.php'>Exercício 0$i</a>";
}
?>

</body>
</html>