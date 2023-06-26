<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <h1>ejercicio 5</h1>
  <p>hacer un programa que solicite dos numeros y que nos muestre los numeros que estan entre estos (pedir los numeros por get)</p>

  <form action="" method="get">
    <input type="number" name="numero1" placeholder="numero 1">
    <input type="number" name="numero2" placeholder="numero 2">
    <input type="submit" value="mostrar">
  </form>

  <?php
  // coloca 0 si no deseas que aparezcan los errores también en el navegador
  ini_set('display_errors', 0);
  // con esta línea estamos diciendo que queremos crear un nuevo archivo de errores
  ini_set("log_errors", 1);
  // con esta línea le decimos a PHP donde queremos que se guarde ese archivo, lo recomendado es que sea al lado del archivo index.phpini_set('display_errors', 1);
  ini_set("error_log", "/opt/lampp/htdocs/master-en-php-sql-laravel-synfony-wordpress-and-more/aprendiendo-php/ejercicios-bloque-1");

  if (isset($_GET['numero1']) && isset($_GET['numero2'])) {
    $n1 = $_GET['numero1'];
    $n2 = $_GET['numero2'];

    for ($i = $n1; $i <= $n2; $i++) {
      echo '<p>' . $i . '</p>';
    }
  }
  ?>
</body>

</html>