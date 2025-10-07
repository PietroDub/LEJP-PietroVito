<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Ex 06- Média de 5</title>
</head>
<body>
<h2>Ex 06- Média de 5</h2>

<form action="" method="post">
    <label for="">Nota 1</label>
    <input type="number" name="num1" step="any" required> <br>
    <label for="">Nota 2</label>
    <input type="number" name="num2" step="any" required> <br>
    <label for="">Nota 3</label>
    <input type="number" name="num3" step="any" required> <br>
    <label for="">Nota 4</label>
    <input type="number" name="num4" step="any" required> <br>
    <label for="">Nota 5</label>
    <input type="number" name="num5" step="any" required> <br>
    <button type="submit" name="media">Média</button>
</form>

<?php 
if(isset($_POST["media"])){
    $nota1 = floatval($_POST['num1']);
    $nota2 = floatval($_POST['num2']);
    $nota3= floatval($_POST['num3']);
    $nota4= floatval($_POST['num4']);
    $nota5= floatval($_POST['num5']);

    $media = ($nota1 + $nota2 + $nota3 + $nota4 + $nota5) / 5;
    echo "A media das notas é:" . $media;
}
?>
</body>
</html>