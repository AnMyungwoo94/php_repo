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

echo "----------------------------------------<br>";

const STUDENT_COUNT = 10;
define("SUBJECT_COUNT", 5);
$subject_sum = 0;
for ($i = 0; $i < STUDENT_COUNT; $i++) {
  $subject_sum = 0;
  $avg = 0.0;
  for ($j = 0; $j < SUBJECT_COUNT; $j++) {
    $subject_sum += $score[$j][$i];
  }
  $avg = $subject_sum / SUBJECT_COUNT;
  echo "{$name[$i]}의 합계 : {$subject_sum} , 평균 : {$avg}<br>";
}
