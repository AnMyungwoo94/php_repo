<?php
$serverName = "127.0.0.1";
$userName = "root";
$password = "123456";
$dbName = "sample";

$dbCon = mysqli_connect($serverName, $userName, $password, $dbName);
if ($dbCon) {
  print "<h1>sample db 접속이 성공</h1>";
} else {
  die("db연결오류" . mysqli_connect_error());
}
