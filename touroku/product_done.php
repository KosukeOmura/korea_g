<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Korea_g[韓国グラム]</title>
</head>
<body>
<?php 

    ini_set("display_errors", "On");

// define('DB_DATABASE','ecsite');
// define('DB_USERNAME','eckosuke');
// define('DB_PASSWORD','komazawataxidesu');
// define('PDO_DSN','mysql:host=localhost;dbname=' . DB_DATABASE);

define('DB_DATABASE','heroku_5534de34baddda1');
define('DB_USERNAME','b8543e85d3857f');
define('DB_PASSWORD','cf9f4cd2');
define('PDO_DSN','mysql:host=us-cdbr-east-02.cleardb.com;dbname=' . DB_DATABASE);

    try {
        $pro_name=$_POST['name'];
        $pro_image_name=$_POST['image'];
        $pro_text=$_POST['item_text'];
        $pro_price=$_POST['price'];
        $pro_stock=$_POST['stock_item'];

        $pro_name=htmlspecialchars($pro_name,ENT_QUOTES,'UTF-8');
        $pro_text=htmlspecialchars($pro_text,ENT_QUOTES,'UTF-8');
        $pro_price=htmlspecialchars($pro_price,ENT_QUOTES,'UTF-8');
        $pro_stock=htmlspecialchars($pro_stock,ENT_QUOTES,'UTF-8');

        $db = new PDO(PDO_DSN,DB_USERNAME,DB_PASSWORD);

        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = 'INSERT INTO item_box (name,image,item_text,price,stock_item) VALUES(?,?,?,?,?)';
        $stmt = $db->prepare($sql);
        $data[] = $pro_name;
        $data[] = $pro_image_name;
        $data[] = $pro_text;
        $data[] = $pro_price;
        $data[] = $pro_stock;
        $stmt->execute($data);

        echo $pro_name;
        echo 'を登録しました。';

        $db = null;

    }catch(PDOException $e) {
        echo 'ただいま障害により大変ご迷惑をお掛けしております';
        exit();

    }
    $db = null;

?>

<a href="product_list.php">商品一覧へ</a>

</body>
</html>