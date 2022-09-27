<?php  
$threadArray = array();

//コメントデータをテーブルから取得してくる。
$sql = "SELECT * FROM thread";
$statement = $pdo->prepare($sql);
$statement->execute();

$threadArray = $statement;
