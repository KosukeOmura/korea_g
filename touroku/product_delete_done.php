<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title> Korea_g[韓国グラム]</title>
</head>
<body>

<?php

ini_set("display_errors", "On");

define('DB_DATABASE','ecsite');
define('DB_USERNAME','eckosuke');
define('DB_PASSWORD','komazawataxidesu');
define('PDO_DSN','mysql:host=localhost;dbname=' . DB_DATABASE);

try {

    $pro_code =$_POST['code'];

    $db = new PDO(PDO_DSN,DB_USERNAME,DB_PASSWORD);

    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = 'DELETE FROM item_box WHERE code=?';
    $stmt =$db->prepare($sql);
    $data[] = $pro_code;
    $stmt->execute($data);


    $db = null;

}catch(Exception $e) {

    echo 'ただいまメンテナンス中です';
    exit();
    
    print_r($sql->errorInfo());

}


?>

<h1>商品を削除しました。</h1>
<a href="product_list.php">商品一覧へ戻る</a>


</body>
</html>