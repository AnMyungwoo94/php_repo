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
    $gender = $_POST["gender"];
    $email_ok = $_POST["email_ok"];

    if ($email_ok == "예") {
        $email = "수신";
    } else {
        $email = "비수신";
    }

    echo "    
    <table>
        <tr>
            <td>성별</td>
            <td>$gender</td>
        </tr>
        <tr>
            <td>이메일 수신</td>
            <td>$email</td>
        </tr>
    </table>
    "
    ?>
</body>

</html>