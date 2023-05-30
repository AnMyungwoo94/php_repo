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
  $score = array(
    array(88, 98, 96, 77, 98),
    array(86, 77, 86, 84, 95),
    array(84, 83, 95, 86, 93)
  );

  // echo count($score);
  // echo count($score[0]);

  for ($i = 0; $i < count($score); $i++) {
    $sum = 0;
    for ($j = 0; $j < count($score[$i]); $j++) {
      $sum += $score[$i][$j];
    }
    $avg = $sum / count($score[$i]);
    echo $i  . "번 학생의 합계" . $sum . ", " . "평균 : " . $avg . "<br>";
  }
  ?>

</body>

</html>