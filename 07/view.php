<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    table {
      width: 50%;
      margin: auto;
    }

    td,
    th {
      border: 1px dotted black;
      padding: 5px;
      font-size: 2rem;
      text-align: center;
    }
  </style>
</head>

<body>
  <?php
  var_dump($_GET);
  $name =  $_GET["name"];
  $phone = $_GET["phone"];

  echo " <table>
    <tr>
      <th>name</th>
      <th>phone</th>
    </tr>
    <tr>
      <td>$name </td>
      <td> $phone</td>
    </tr>
  </table>";

  ?>

</body>

</html>