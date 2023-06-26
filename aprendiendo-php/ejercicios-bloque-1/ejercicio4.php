<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>ejercicio 4</h1>
  <p>solicitar dos numeros por la url y hacer todas pas operaciones baseicas de una calculadora de esos dos numeros</p>

  <form action="" method="get">
    <input type="number" name="numero1" placeholder="ingresa el primer numero">
    <input type="number" name="numero2" placeholder="ingresa el segundo numero">
    <input type="submit" value="Enviar">
  </form>

  <?php
    $n1 = $_GET['numero1'];
    $n2 = $_GET['numero2'];

    $suma = $n1 + $n2;
    $resta = $n1 - $n2;
    $multiplicacion = $n1 * $n2;
    $divicion = $n2 / $n1;
  ?>

  <ul>
    <li><?=$n1?>+<?=$n2?>=<?=$suma?></li>
    <li><?=$n1?>-<?=$n2?>=<?=$resta?></li>
    <li><?=$n1?>*<?=$n2?>=<?=$multiplicacion?></li>
    <li><?=$n1?>/<?=$n2?>=<?=$divicion?></li>
  </ul>
</body>
</html>