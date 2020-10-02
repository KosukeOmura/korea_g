<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="product_top.css">
    <title>Korea_g[韓国グラム]</title>
</head>
<body>
<?php 



?>
<div class="item_title">
    <h1>商品追加</h1>
</div>
<div class="item_box">

    <form method="post" action="product_check.php" class="main" enctype="multipart/form-data">
        <div class="flex">
            <div class="block_372">
                <h2>商品名&nbsp;&nbsp;</h2>
                <input type="text" name="name" class="a-section name" placeholder="商品名"> 
            </div>
        </div>
        <div class="flex">
            <div class="block_372">
                <h2>商品画像</h2>
                <input type="file" name="image" class="a-section image">
            </div>
        </div>
        <div class="flex">
            <div class="block_372">
                <h2>商品説明</h2>
                <input type="text" name="item_text" class="a-section item_text" placeholder="サイズやカラー商品説明をお客様に分かりやすく記載しましょう">
            </div>
        </div>
        <div class="flex">
            <div class="block_372">
                <h2>価格&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h2>
                <input type="text" name="price" class="a-section price">
            </div>
        </div>
        <div class="flex">
            <div class="block_372">
                <h2>在庫数&nbsp;&nbsp;&nbsp;</h2>
                <input type="text" name="stock_item" class="a-section stock_item">
            </div>
        </div>
        <div class="block_102">
            <input type="button" onclick="history.back()" class="cansel" value="キャンセル">
            <input type="submit" class="button" value="登録する">
        </div>
    </form>
</div>
    <!-- <form method="post" action="product_check.php" class="enter_button" enctype="multipart/form-data">
    <div class="block_102">
        <input type="button" onclick="history.back()" class="cansel" value="キャンセル">
        <input type="submit" class="button" value="登録する">
    </div>
    </form> -->
    
</body>
</html>