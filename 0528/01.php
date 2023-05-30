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
    <table>
        <?php

        $name = $_POST["name1"];

        echo "<tr>
        <td> $name  님 반갑습니다~~ </td>
     </tr>"
        ?>
    </table>
</body>

</html>