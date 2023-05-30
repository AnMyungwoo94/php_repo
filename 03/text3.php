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
  $a = 0;
  for ($i = 300; $i <= 350; $i++) {
    if ($i % 5 != 0) {
      echo "$i ";
      $a++;
    }
    if ($a % 10 == 0) {
      echo "<br/>";
    }
  }
  ?>

</body>

</html>