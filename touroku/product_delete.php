<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Korea_g[韓国グラム]</title>
</head>
<body>
<?php

ini_set("display_errors","On");

// define('DB_DATABASE','ecsite');
// define('DB_USERNAME','eckosuke');
// define('DB_PASSWORD','komazawataxidesu');
// define('PDO_DSN','mysql:host=localhost;dbname=' . DB_DATABASE);

define('DB_DATABASE','heroku_5534de34baddda1');
define('DB_USERNAME','b8543e85d3857f');
define('DB_PASSWORD','cf9f4cd2');
define('PDO_DSN','mysql:host=us-cdbr-east-02.cleardb.com;dbname=' . DB_DATABASE);

try {
    $pro_code =$_GET['pro_code'];

    $db = new PDO(PDO_DSN,DB_USERNAME,DB_PASSWORD);

    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    //DBから全データ取り出し
    $sql = 'SELECT name,image,item_text,price,stock_item FROM item_box WHERE code=? ';
    $stmt = $db->prepare($sql);
    $data[] = $pro_code;
    $stmt->execute($data);

    $rec = $stmt->fetch(PDO::FETCH_ASSOC);
    $pro_name=$rec['name'];
    $pro_image_name=$rec['image'];
    $pro_text=$rec['item_text'];
    $pro_price=$rec['price'];
    $pro_stock=$rec['stock_item'];

    $db = null;

    if($pro_image_name == '') {
        $disp_image = '';
    }else {
        $disp_image = '<img src="./image_box/'.$pro_image_name.'">';
    }

}catch(Exception $e) {

    echo 'ただいまメンテナンス中';
    exit();

}
$disp_image = '<img src="./image_box/'.$pro_image_name.'">';


?>

<h1>商品データ削除</h1>

<h2>商品コード</h2>
<?php echo $pro_code ?>
<h2>商品名</h2>
<?php echo $pro_name ?>
<h2>画像</h2>
<?php echo $disp_image ?>
<h2>商品説明</h2>
<?php echo $pro_text ?>
<h2>価格</h2>
<?php echo $pro_price ?>
<h2>在庫数</h2>
<?php echo $pro_stock ?>

<p>本当にこの商品を削除してもよろしいですか？</p>

<?php echo '<form method="post" action="product_delete_done.php">'; ?>

    <input type="hidden" name="code" value="<?php echo $pro_code; ?>">

    <input type="button" onclick="history.back()" value="戻る">
    <input type="submit" value="削除">
    


<?php   echo'</form>' ?>


</body>
</html>