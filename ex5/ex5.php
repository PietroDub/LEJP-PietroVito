<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Ex 05- Soma</title>
</head>
<body>
<h2>Ex 05- Soma</h2>

<form action="" method="post">
    <label for="">Número do até</label>
    <input type="number" name="num" step="any" required> <br>
    <button type="submit" name="somar">Somar!</button>
</form>

<?php 
if(isset($_POST["somar"])){
    $num = floatval($_POST['num']);
    for($i = 0; $i <= $num; $i++){
        $soma += $i;
    }
    echo "Soma dos números até " . ($num);
    echo ($soma);
}
?>
</body>
</html>