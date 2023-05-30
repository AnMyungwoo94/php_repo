<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
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
        $email1 = $_POST["email1"];
        $email2 = $_POST["email2"];

        echo "<tr>
        <td>이메일</td>
        <td>$email1 @ $email2</td>
        </tr>"
        ?>
    </table>
</body>

</html>