<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            border: 1px solid black;
            margin: auto;
        }

        td,
        tr {
            border: 1px solid black;
            width: 100px;
            height: 20px;
            text-align: center;
        }
    </style>
</head>

<body>
    <table>
        <?php
        $file = fopen("data.csv", "r");
        $header = fgetcsv($file);
        $num = count($header);
        $subsum = array(0, 0, 0);
        echo "<h3>5명 학생의 " . $num . "과목 합계/평균 구하기</h3>";

        echo "<tr>
        <td>$header[0]</td>
        <td>$header[1]</td>
        <td>$header[2]</td>
        </tr>";

        while (!feof($file)) {
            $line = fgetcsv($file);
            echo "<tr>";
            for ($i = 0; $i < count($subsum); $i++) {
                $subsum[$i] += $line[$i];
                echo "<td>$line[$i]</td>";
            }
            echo "</tr>";
        }
        echo "<tr>";
        foreach ($subsum as $vlaue) {
            echo "<td>" . "합계 : " . $vlaue . "</td>";
        }
        ?>
    </table>
</body>

</html>