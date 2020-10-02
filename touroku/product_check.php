<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Korea_g[韓国グラム]</title>
</head>
<body>
<?php 

    ini_set('display_errors',1);

    $pro_name=$_POST['name'];
    $pro_image=$_FILES['image'];
    $pro_text=$_POST['item_text'];
    $pro_price=$_POST['price'];
    $pro_stock=$_POST['stock_item'];

    $pro_name=htmlspecialchars($pro_name,ENT_QUOTES,'UTF-8');
    $pro_text=htmlspecialchars($pro_text,ENT_QUOTES,'UTF-8');
    $pro_price=htmlspecialchars($pro_price,ENT_QUOTES,'UTF-8');
    $pro_stock=htmlspecialchars($pro_stock,ENT_QUOTES,'UTF-8');

    if($pro_name == '') {
        echo '商品名を入力してください';
    }else {
        echo '商品名：';
        echo $pro_name;
    }
    if($pro_image['size'] > 0) {
        if($pro_image['size'] > 1000000) {
            echo '画像が大きすぎます。';
        } else {
            move_uploaded_file($pro_image['tmp_name'],'./image_box/'.$pro_image['name']);
            echo '<img src="./image_box/'.$pro_image['name'].'">';
        }
    }

    if($pro_text == '') {
        echo '商品説明を入力してください';
    } else {
        echo '商品説明：';
        echo $pro_text;
    }

    if(preg_match('/\A[0-9]+\z/',$pro_price)==0) {
        echo '価格を入力してください';
    }else {
        echo '価格：';
        echo $pro_price ;
    }

    if(preg_match('/\A[0-9]+\z/',$pro_stock)==0) {
        echo '在庫数量を入力してください';
    }else {
        echo '在庫数量：';
        echo $pro_stock;
    }

    if($pro_name == '' || $pro_image['size'] > 1000000 || $pro_text == '' || preg_match('/\A[0-9]+\z/',$pro_price)==0 || preg_match('/\A[0-9]+\z/',$pro_stock)==0) {
        echo '<form>';
        echo '入力不備があります';
        echo '<input type="button" onclick="history.back()" value="戻る">';
        echo '</form>';
    } else {

        echo '上記内容で出品しますか？';
        echo '<form method="post" action="product_done.php">';
        echo '<input type="hidden" name="name" value="'.$pro_name.'">';
        echo '<input type="hidden" name="image" value="'.$pro_image['name'].'">';
        echo '<input type="hidden" name="item_text" value="'.$pro_text.'">';
        echo '<input type="hidden" name="price" value="'.$pro_price.'">';
        echo '<input type="hidden" name="stock_item" value="'.$pro_stock.'">';
        echo '<br />';
        echo '<input type="button" onclick="history.back()" value="戻る">';
        echo '<input type="submit" value="登録完了">';
        echo '</form>';
    }

 ?>

</body>
</html>