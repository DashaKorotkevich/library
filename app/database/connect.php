<?php
$driver='mysql';
$host='localhost';
$db_name='lib';//подключились к бд
$db_user='root';
$db_pass='mysql';
$charset='utf8mb4';
header("Content-type: text/html; charset=utf-8");
$options=[PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION];
try{
  $pdo=new PDO("$driver:host=$host;dbname=$db_name;charset=$charset", $db_user,$db_pass,$options);
}
catch(PDOException $i){
  die("Ошибка подключения к бд");
}
?>