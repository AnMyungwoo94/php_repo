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
    $type = $_GET["type"];
    if ($table == "free")
        $board_title = "자유게시판";
    if ($table == "qna")
        $board_title = "질의응답 게시판";
    if ($type == "list")
        $type_title = "목록보기";
    if ($type == "write")
        $type_title = "글쓰기";
    ?>

    <h3>
        <?php
        echo ">> " . $board_title . " | " . $type_title;
        ?>
    </h3>

</body>

</html>