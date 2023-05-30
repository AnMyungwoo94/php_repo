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
        $userid = $_POST["userid"];
        echo " <tr>
       <td>관리자 아이디</td>
        <td>$userid</td>
        </tr>"
        ?>
    </table>

</body>

</html>