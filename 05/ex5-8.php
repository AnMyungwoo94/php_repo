<?php
$tel = "010-1234-5678";
$arr = explode("-", $tel);

// var_dump($arr);
// $tel2 = $arr[0].$arr[1].$arr[2];
// echo $tel2;    

for ($i = 0; $i < count($arr); $i++) {
    echo "arr[{$i}] = {$arr[$i]} <br>";
}
