<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        tr,
        td,
        th {
            border: 1px dotted black;
        }
    </style>
</head>

<body>
    <table>
        <?php
        $num = count($_POST["hobby"]);
        $hobby = $_POST["hobby"];


        echo "<tr>
        <th>나의취미</th>";
        for ($i = 0; $i < $num; $i++) {
            echo "<td>$hobby[$i]</td>";
        }
        echo "</tr>";
        ?>

    </table>
</body>

</html>