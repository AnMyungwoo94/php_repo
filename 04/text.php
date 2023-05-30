<?php
//일반입장권 함수
function normal_ticket($sort, $age)
{
  $result = 0;
  switch ($sort) {
    case "주간":
      if ($age >= 13 and $age <= 63) {
        $result = 26000;
      } else {
        $result = 19000;
      }
      break;
    case "야간":
      if ($age >= 13 and $age <= 63) {
        $result = 21000;
      } else {
        $result = 16000;
      }
      break;
    default:
      $result = "해당되는 요금표에 맞지않는 데이터 입력";
  }
  return $result;
}

$sort = "주간";
$age = 30;
echo "<h3>일반입장권 구분: $sort , 나이 : $age 입장권 :" . normal_ticket($sort, $age) . "</h3>";


function free_ticket($sort, $age)
{
  $result = 0;
  switch ($sort) {
    case "주간":
      if ($age >= 13 and $age <= 63) {
        $result = 33000;
      } else {
        $result = 24000;
      }
      break;
    case "야간":
      if ($age >= 13 and $age <= 63) {
        $result = 28000;
      } else {
        $result = 21000;
      }
      break;
    default:
      $result = "해당되는 요금표에 맞지않는 데이터 입력";
  }
  return $result;
}

$sort = "주간";
$age = 30;
echo "<h3>일반입장권 구분: $sort , 나이 : $age 입장권 :" . free_ticket($sort, $age) . "</h3>";


function twoday_ticket($age)
{
  $result = 0;
  switch ($age) {
    case "주간":
      if ($age >= 13 and $age <= 63) {
        $result = 55000;
      } else {
        $result = 40000;
      }
      break;
    default:
      $result = "해당되는 요금표에 맞지않는 데이터 입력";
  }
  return $result;
}

$sort = "주간";
$age = 30;
echo "<h3>일반입장권 구분: $sort , 나이 : $age 입장권 :" . twoday_ticket($sort, $age) . "</h3>";



function combi_ticket($age)
{
  $result = 0;
  switch ($age) {
    case "주간":
      if ($age >= 13 and $age <= 63) {
        $result = 54000;
      } else {
        $result = 40000;
      }
      break;
    default:
      $result = "해당되는 요금표에 맞지않는 데이터 입력";
  }
  return $result;
}

$sort = "주간";
$age = 30;
echo "<h3>일반입장권 구분: $sort , 나이 : $age 입장권 :" .  twoday_ticket($sort, $age) . "</h3>";
