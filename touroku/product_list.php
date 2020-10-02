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

        $db = new PDO(PDO_DSN,DB_USERNAME,DB_PASSWORD);

        $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);


        $sql = 'SELECT code,name,image,item_text,price,stock_item FROM item_box WHERE 1';
        $stmt = $db->prepare($sql);
        $stmt->execute();

        $db = null;

        echo '<h1>商品管理</h1>';

        echo '<form method="post" action="product_branch.php">';
        while(true) {
            //stmt(mysql)から１レコードずつ取り出す処理
            $rec = $stmt->fetch(PDO::FETCH_ASSOC);

            //stmtから全レコード取り出したらレコード終了
            if($rec == false) {
                break;
            }
            
            echo '<input type="radio" name="pro_code" value="'.$rec['code'].'">';
            echo '<a href="product_disp.php?pro_code='.$rec['code'].'">';
            if($rec['image'] == '') {

                $pro_image_name[]='';
            } else {
               echo $pro_image_name[]='<img src="./image_box/'.$rec['image'].'">';
            }
            echo $rec['name'].'--';
            echo $rec['price'].'円';
            echo '</a>';
            
        }
        echo '<input type="submit" name="disp" value="参照">';
        echo '<input type="submit" name="add" value="追加">';
        echo '<input type="submit" name="delete" value="削除">';

        echo '</form>';
        

    }catch(Exception $e) {
        echo 'ただいまメンテナンス中';
        exit();

    }

?>

<a href="../index.php">トップページへ</a>
</body>
</html>

<!-- echo '<a href="product_disp.php?pro_code='.$rec['code'].'">'; -->