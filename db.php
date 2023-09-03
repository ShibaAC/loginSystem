<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

$host = "127.0.0.1:33306";
$user = "root";
$pwd = "";
$db = "loginSystem";

$mysqli = new mysqli($host , $user , $pwd , $db);

if ($mysqli->connect_error) {
    die("连接数据库失败: " . $mysqli->connect_error);
}
?>
