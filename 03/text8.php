<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    tr,
    td {
      border: 1px dotted black;
    }
  </style>
</head>


<body>
  <?php
  $string = "";
  $string .= "<table border='1'>";
  for ($i = 2; $i <= 9; $i++) {
    $string .= "<tr>";
    for ($j = 1; $j <= 9; $j++) {
      $x = $i * $j;
      $string .= "<td>" . $i . "x" . $j . "=" . $x . "</td>";
    }
    $string .= "</tr>";
  }
  $string .= "</table>";

  echo $string;
  ?>
</body>

</html>