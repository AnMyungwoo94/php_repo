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
  $subject = array("파이썬", "php", "자바스크립트", "사진", "영화감상");
  $name = array("김**", "이**", "정**", "장**", "황**", "이**", "최**", "함**", "도**", "경**");
  $score = array(
    array(88, 98, 96, 77, 98, 80, 70, 20, 30, 20),
    array(88, 98, 96, 77, 98, 80, 70, 20, 30, 20),
    array(88, 98, 96, 77, 98, 80, 70, 20, 30, 20),
    array(88, 98, 96, 77, 98, 80, 70, 20, 30, 20),
    array(88, 98, 96, 77, 98, 80, 70, 20, 30, 20)
  );

  $count1 = count($score);

  for ($i = 0; $i < $count1; $i++) {
    $sum = 0;
    $count2 = count($score[$i]);
    for ($j = 0; $j < $count2; $j++) {
      $sum = $sum + $score[$i][$j];
    }
    $avg = $sum / $count2;
    echo "{$subject[$i]}의 합계 : {$sum} , 평균 : {$avg}<br>";
  }
  ?>
</body>

</html>