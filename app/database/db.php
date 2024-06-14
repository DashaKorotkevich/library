<?php 
require('connect.php');
header("Content-type: text/html; charset=utf-8");
$sql = "SELECT * FROM table_specific_book";
$query = $pdo->prepare($sql);
$query->execute();
$data = $query->fetchAll(PDO::FETCH_ASSOC); // Получаем все строки как ассоциативный массив
echo json_encode($data);// не надо присылать ответ в юникоде
?>
