<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $table = $_GET["table"];
    if ($table == "free") {
        $board_title = "자유게시판";
    } else {
        $board_title = "공지사항";
    }
    ?>
    <h1>
        <?= $board_title ?>
    </h1>
</body>

</html>