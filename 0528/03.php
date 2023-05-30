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
    $content = $_POST["content"];

    echo "<table>
        <tr>
        <td>글 내용</td>
        <td> $_POST[content] </td>
        </tr>
    </table>"
    ?>

</body>

</html>