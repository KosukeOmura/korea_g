<?php
ini_set("display_errors","On");

define('DB_DATABASE','ecsite');
define('DB_USERNAME','eckosuke');
define('DB_PASSWORD','komazawataxidesu');
define('PDO_DSN','mysql:host=localhost;dbname=' . DB_DATABASE);

?>


<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Korea_g[韓国グラム]</title>
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="warking.css">
</head>
<body>

<a href="../index.php">
    <div id="hamburger-menu">
        <div class="border1"></div>
        <div class="border1"></div>
    </div>
</a>

<div class="warking_title">
    <h1>ショップの注意事項</h1>

    <div class="warking_box">
    <?php
                        ini_set("display_errors","On");
                            try { 

                                $db = new PDO(PDO_DSN,DB_USERNAME,DB_PASSWORD);

                                $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);


                                $sql = 'SELECT text FROM warking_box WHERE 1';
                                $stmt = $db->prepare($sql);
                                $stmt->execute();

                                $db = null;
                                
                                while(true) {
                                    //stmt(mysql)から１レコードずつ取り出す処理
                                    $rec = $stmt->fetch(PDO::FETCH_ASSOC);
                    
                                    //stmtから全レコード取り出したらレコード終了
                                    if($rec == false) {
                                        break;
                                    }
                                    echo '<p>'.$rec['text'].'</p>';
                                    
                                }
                            }catch(Exception $e) {
                                echo 'ただいまメンテナンス中';
                                exit();
                            }
                    ?>
    </div>

</div>
</body>
</html>