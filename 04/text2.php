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
      width: 100px;
      height: 50px;
      text-align: center;
      font-size: 2rem;
    }
  </style>
</head>

<body>
  <table>
    <?php
    $score = array(75, 85, 93, 87, 92);
    for ($i = 0; $i <= count($score) - 1; $i++) {
      echo "<tr>";
      echo "<td>" . $i . "</td>";
      echo "<td>" . $score[$i] . "</td>";
      echo "</tr>";
    }
    ?>
  </table>
</body>

</html>