<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
        table {
            margin: auto;
            border: 1px dotted black;
        }

        tr,
        td {
            border: 1px dotted black;
            text-align: center;
            width: 100px;
        }
    </style>
</head>

<body>
    <table>
        <?php
        $num = count($_POST["hobby"]);
        $hobby =  $_POST["hobby"];
        echo "<tr ><td colspan = 2 >나의 취미</td></tr>";
        for ($i = 0; $i < $num; $i++) {
            echo "<tr>";
            echo "<td>" . $i + 1 . "</td>";
            echo "<td> $hobby[$i]</td>";
        }
        echo "</tr>";
        ?>
    </table>
</body>

</html>