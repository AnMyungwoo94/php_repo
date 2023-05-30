<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <?php
  echo "<br>------------------------<br>";
  echo "달러 원화 유로";
  echo "<br>------------------------<br>";

  for ($a = 10; $a <= 20; $a += 2) {
    $b = $a * 1180.60;
    $c = $a * 1350.30;
    echo $a . " &nbsp; " . $b . " &nbsp; " . $c . "<br>";
  }
  echo "<br>------------------------<br>";

  ?>
</body>

</html>