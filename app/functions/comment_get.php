<?php 
$commentArray = array();

//コメントデータをテーブルから取得してくる。
$sql = "SELECT * FROM comment";
$statement = $pdo->prepare($sql);
$statement->execute();

$commentArray = $statement;
//var_dump($commentArray->fetchAll()); 
?>

