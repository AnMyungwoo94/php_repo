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

        td>img {
            width: 300px;
            height: 300px;
        }
    </style>
</head>

<body>

    <?php
    $file_div = "C:/xampp/htdocs/source/0528/data/";
    $file_path = $file_div . $_FILES["upload"]["name"];
    $comment = $_POST["comment"];
    if (move_uploaded_file($_FILES["upload"]["tmp_name"], $file_path)) {
        $img_path = "data/" . $_FILES["upload"]["name"];
    } else {
        echo "파일 업로드 오류가 발생했습니다!!!";
    }
    ?>

    <table>

        <?php
        echo " <tr>
            <td><img src = $img_path></td>
            </tr>
            <tr>
            <td>$comment</td>
        </tr>"
        ?>

    </table>

</body>

</html>