<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Korea_g[韓国グラム]</title>
</head>
<body>
<?php 

//参照
if(isset($_POST['disp']) == true) {

    if(isset($_POST['pro_code'])==false) {
        header('Location:product_disp.php');
        exit();
    }
    $pro_code = $_POST['pro_code'];
    header('Location:product_disp.php?pro_code='.$pro_code);
    exit();
}

//商品販売ページ(ONE_BOX)
if(isset($_POST['one']) == true) {

    if(isset($_POST['pro_code'])==false) {
        header('Location:../one_box/one_box.php');
        exit();
    }
    $pro_code = $_POST['pro_code'];
    header('Location:../one_box/one_box.php?pro_code='.$pro_code);
    exit();
}


//追加
if(isset($_POST['add']) == true) {
    
    header('Location:product_top.php');
    exit();
}

//削除
if(isset($_POST['delete']) == true) {

    if(isset($_POST['pro_code']) ==false) {
        header('Location: product_delete.php');
        exit();
    }

    $pro_code=$_POST['pro_code'];
    header('Location: product_delete.php?pro_code='.$pro_code);
    exit();
}


?>

</body>
</html>