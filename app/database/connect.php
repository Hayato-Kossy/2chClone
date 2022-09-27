<?php  
//DBと接続
$user = "hayato";
$pass = "koshi6283015";

try {
    $pdo = new PDO('mysql:host=localhost;dbname=2chclone', $user, $pass);
    //echo "DBとの接続に成功しました";
} catch (PDOException $error) {
    echo $error -> getMessage();
    echo "失敗";
}
