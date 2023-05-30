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
    <?php
    $id = $_POST["id"];
    $pass = $_POST["pass"];

    echo "<table>
     <tr>
        <td>아 &nbsp; 이 &nbsp; 디 : </td>
        <td>$id</td>
        </tr> 
        <tr>
        <td>비밀번호 : </td>
        <td>$pass </td>
        </tr>
    </table>"
    ?>
</body>

</html>