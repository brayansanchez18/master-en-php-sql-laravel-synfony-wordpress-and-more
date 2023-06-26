<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>ejercicio 2</h1>
  <p>escribir un script en php que nos muestre por pantalla todos los numeros pares que hay del 1 al 100</p>

  <?php
    $contador = 0;
    while ($contador <= 100) {
      if ($contador % 2 == 0) {
        echo '<ul>
          <li>'.$contador.'</li>
        </ul>';
      }

      $contador++;
    }
  ?>
</body>
</html>