<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Ex 05- Soma</title>
</head>
<body>
<h2>Ex 05- Soma</h2>

<form action="" method="post">
    <label for="">Aluno 1</label>
    <p>Aluno 1:</td><td><input id="a1n1"><input id="a1n2"></p>
        
    <label for="">Aluno 2</label>
    <p>Aluno 2:</td><td><input id="a2n1"><input id="a2n2"></p>

    <label for="">Aluno 3</label>
    <p>Aluno 3:</td><td><input id="a3n1"><input id="a3n2"></p>

    <button type="submit" name="calcular">Calcular!</button>
</form>

<?php 
if(isset($_POST["calcular"])){
  $n1A1 = floatval($_POST["a1n1"]);
  $n2A1 = floatval($_POST["a1n2"]);

  $n1A2 = floatval($_POST["a2n1"]);
  $n2A2 = floatval($_POST["a2n2"]);

  $n1A3 = floatval($_POST["a3n1"]);
  $n2A3 = floatval($_POST["a3n2"]);


  $media1 = ($n1A1 + $n2A1) / 2;
  $media2 = ($n1A2 + $n2A2) / 2;
  $media3 = ($n1A3 + $n2A3) / 2;
  echo "Média aluno 1:" . $media1;
  echo "Média aluno 2:" . $media2;
  echo "Média aluno 3:" . $media3;  
}
?>
</body>
</html>