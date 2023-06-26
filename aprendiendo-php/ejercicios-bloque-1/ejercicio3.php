<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>ejercicio 3</h1>
  <p>escribir un programa que imprima por pantalla los cuadrados de los 40 primeros numeros naturales utilizando el bucle while</p> 
  <?php
    // $contador = 0;

    // while ($contador <= 40) {
    //   $cuadrado = $contador*$contador;
    //   echo $contador.'^2 = '.$cuadrado.'<br>';
    //   $contador++;
    // }

    for ($i=0; $i <= 40; $i++) { 
      $cuadrado = $i*$i;
      echo $i.'^2 = '.$cuadrado.'<br>';
    }
  ?>
</body>
</html>