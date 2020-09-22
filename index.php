<?php 

//エラー表示を有効にする
ini_set('display_errors',1);

//全てのエラーを表示する
ini_set('error_reporting',E_ALL);


//データベースの接続情報
$dsn = 'mysql:dbname=ecsite;host=localhost;charset=utf8mb4';
// $DB_HOST = 'localhost';
$DB_USER = 'eckosuke';
$DB_PASS = 'komazawataxidesu';

//変数の初期化
// $DB_HOST = null;
$DB_USER = null;
$DB_PASS = null;
$dsn = null;
$pdo = null;
$data = null;

// define('DB_HOST','localhost');
// define('DB_USER','eckosuke');
// define('DB_PASS','komazawataxidesu');
// define('PDO_DSN','mysql:host=localhost;dbname='. ecsite);

//タイムゾーン設定
data_default_timezone_set('Asia/Tokyo');

try{
    //PDOに接続するPDOクラスのインスタンスを作る
    $pdo = new PDO($dsn, $DB_USER, $DB_PASS);
    $sql = $pdo->prepare( 'SELECT * FROM');
    $sql->execute();
    $data = $sql->fetch(PDO::FETCH_ASSOC);
    var_dump($data);　//出力
    $pdo = null; //dbを閉じる処理
    //エラーが出た時Exceptionを出す設定
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e) {
    echo '<h4>接続出来ね</h4>' .$e->getMessage();
}

?>