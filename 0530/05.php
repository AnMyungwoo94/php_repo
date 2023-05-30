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
  echo "<table border = 1>";
  echo "<tr align = center>";
  echo "<th width=100>2단</th>";
  echo "<th width=100>3단</th>";
  echo "<th width=100>4단</th>";
  echo "<th width=100>5단</th>";
  echo "<th width=100>6단</th>";
  echo "<th width=100>7단</th>";
  echo "<th width=100>8단</th>";
  echo "<th width=100>9단</th>";

  for ($i = 0; $i <= 7; $i++)
    for ($j = 0; $j <= 9; $j++)
      $result[$i][$j] = ($i + 2) * ($j + 1);
  for ($j = 0; $j <= 8; $j++) {
    echo "<tr align = center>";
    for ($i = 0; $i <= 7; $i++) {
      $a = $i + 2;
      $b = $j + 1;
      $c = $result[$i][$j];
      echo "<td>$a X $b = $c</td>";
    }
    echo "</tr>";
  }
  echo "</table>";
  ?>
</body>

</html>