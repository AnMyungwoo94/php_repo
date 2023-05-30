<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    th,
    td {
      border: 1px dotted black;
      width: 100px;
      height: 100px;
      padding: 5px;
      text-align: center;
      font-weight: bold;
      font-size: 2rem;
    }
  </style>
</head>

<body>
  <table>
    <tr>
      <th><?php echo "섭씨" ?></th>
      <th><?php echo "화씨" ?></th>
    </tr>
    <?php
    for ($i = 30; $i < 30; $i += 5) {
      $f = ($i * 9 / 5) + 32;
      echo "<tr>";
      echo "<td>" . $i . "</td>";
      echo "<td>.$f.</td>";
      echo "</tr>";
    }
    ?>
  </table>

</body>

</html>