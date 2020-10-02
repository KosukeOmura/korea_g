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
    <link rel="stylesheet" href="../indexトップページ用/main.top.css/top.css">
    <link rel="stylesheet" href="../indexトップページ用/newarrivalbox/newarrival.css">
    <link rel="stylesheet" href="../indexトップページ用/rankingtopbox/ranking.css">
    <link rel="stylesheet" href="../indexトップページ用/allitembox/allitem.css">
    <link rel="stylesheet" href="../indexトップページ用/blogbox/blog.css">
    <link rel="stylesheet" href="../indexトップページ用/snsbox/sns.css">
    <link rel="stylesheet" href="../indexトップページ用/footer/footer.css">
    <link rel="stylesheet" href="../indexトップページ用/topback/topback.css">
    <!-- ONE_BOXpage  CSS -->
    <link rel="stylesheet" href="one_box_top.css">

        <!-- newarrival専用css -->
    <link rel="stylesheet" href="../newarrivalページ用/categories/categories.css">
    <link rel="stylesheet" href="../newarrivalページ用/articlebox/article.css">
    <link rel="stylesheet" href="../newarrivalページ用/accordion/accordion.css">
    <link rel="stylesheet" href="../newarrivalページ用/product-viewed/product.css">
    <link rel="stylesheet" href="../newarrivalページ用/notes/notes.css">
    <link rel="stylesheet" href="../newarrivalページ用/page_title/page-title.css">

    <!-- ハンバーガーメニューcss -->
    <link rel="stylesheet" href="../indexトップページ用/hamburager/hambargur.css">

    <!-- swiper css -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="../indexトップページ用/top.swiper/swiper.css">
</head>
<body>

       <!-- ハンバーガーメニュー開始 -->
       <div class="mask" id="mask"></div>
        <div id="top-box">
            <div id="top-weight">
                <div id="textanauns">
                    <div id="textanauns-images">
                        <img src="../indexトップページ用/top.images/freeshipping.png">
                    </div>
                </div>
                <div id="hamburger-menu">
                    <div class="border1"></div>
                    <div class="border1"></div>
                    <div class="border1"></div>
                </div>
    
                <nav id="nav">
                    <ul>
                        <li id="Arrow"><a href="">MENS</a></li>
                        <li><a href="">LADIES</a></li>
                        <li><a href="">UNISEX</a></li>
                        <li><a href="">SALE</a></li>
                        
                        <div class="contactform">
                            <a href="">CONTACT</a>
                        </div>
                        <div id="cartitems">
                        <i class="fas fa-shopping-cart"></i>
                        </div>
                        <form id="x_itemSearchForm" class="itemSearch__form" action="" method="get">
                            <input class="itemSearch__field jp_gothic" type="text" name="q" placeholder="SEARCH" value="">
                            <button class="itemSearch__btn" type="submit"><i class="fas fa-search"></i></button>
                        </form>
                    </ul>
                </nav>
            </div>
        </div>
                <!-- ヘッダーブランドロゴ段スタート -->
                <header id="headerBOX">
            <a href="../index.php">
                <img class="brandname" src="../indexトップページ用/top.images/アア.png">
            </a>
        
        <div id="List-top">
            <ul>
                <li><a href="#">MENS</a></li>
                <li><a href="#">LADIES</a></li>
                <li><a href="#">SALE</a></li>
            </ul>
        </div>
        </header>

        <div class="one_main">
            <?php
            ini_set("display_errors","On");
            

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
                        $disp_image = '<img src="../touroku/image_box/'.$pro_image_name.'">';
                    }
                
                }catch(Exception $e) {
                
                    echo 'ただいまメンテナンス中';
                    exit();
                
                }
                    $disp_image = '<img src="../touroku/image_box/'.$pro_image_name.'">';
            
            
            ?>

            <div class="main_left_image">
               <?php echo $disp_image ?>
            </div>

            <div class="main_right_box">
                <div class="item_title">
                    <h2><?php echo $pro_name ?></h2>
                </div>
                <div class="item_price">
                    <p>¥<?php echo $pro_price ?></p>
                </div>
                <div class="item_price_details">
                    <p>※こちらの価格には消費税が含まれています。</p>
                    <p>※送料は別途発生いたします。詳細はこちら</p>
                    <p>※10,000円以上のご注文で国内送料が無料になります。</p>
                </div>

                <div class="stock_box">
                    <p>数量</p>
                    <?php echo $pro_stock ?>
                </div>
                <div class="cart_button">
                    <input type="button"  name="cart" value="カートへ入れる">
                </div>
                <div class="clearfix">
                    <p><?php echo $pro_text ?></p>
                </div>
            </div>
        </div>




        <!-- アコーディオンご利用ガイド/お問い合わせ -->
        <div class="notes_group">
            <div class="notes_wrap">
                <div class="notes_switch">
                    <p>
                        <i class="fas fa-chevron-right"></i>
                        ご利用ガイド
                    </p>
                </div>
                <div class="notes_contents">
                    <p>〇〇をご利用頂き誠にありがとうございます。</p>
                    <br>
                    <p>以下、必ずお読みになってからご購入下さい。</p>
                    <br>
                    <br>
                    <p>アイウエオかきくけこアイウエオかきくけこアイウエオかきくけこ</p>
                    <p>アイウエオかきくけこアイウエオかきくけこアイウエオかきくけこ</p>
                    <br>
                    <p>アイウエオかきくけこアイウエオかきくけこアイウエオかきくけこ</p>
                    <br>
                    <p>アイウエオかきくけこアイウエオかきくけこアイウエオかきくけこ</p>
                </div>
            </div>
            <div class="customer_wrap">
                <div class="customer_switch">
                    <p>
                        <i class="fas fa-chevron-left"></i>
                        お問い合わせ
                    </p>
                </div>
                <div class="customer_contents">
                    <p>〇〇カスタマーセンター</p>
                    <br>
                    <p>お問い合わせは以下よりお願い致します</p>
                    <br>
                    <br>
                    <p>メールアドレス：〇〇@com</p>
                    <p>TEL:000-0000-0000</p>
                    <br>
                    <p>ご不明な点がございましたらお気軽にお問い合わせください</p>
                    <br>
                    <p>営業時間：10:00〜20:00(土日祝を除く)</p>
                </div>
            </div>
        </div>


        <!-- フッタースタート -->
        <footer>
            <div class="leftfooter">
                <img src="../indexトップページ用/footer/images/footer.png">
                <img src="../indexトップページ用/footer/images/twicon.png">
                <img src="../indexトップページ用/footer/images/igicon2018.png">
                <p>©️korea_g[韓国グラム]</p>
            </div>
            <div class="rightfooter">
                <a href="">プライバシーポリシー</a>
                <a href="">特定商取引に関する表記</a>
            </div>
        </footer>
    
        <!-- swiper -->
    <script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="../indexトップページ用/top.swiper/slider.js/top-slider.js"></script>
    
        <!-- ハンバーガーメニュー -->
        <script src="../indexトップページ用/hamburager/hambargur.js"></script>

        <!-- jQuery
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->

        <!-- アコーディオン -->
        <script src="../newarrivalページ用/accordion/accordion.js"></script>
        
</body>
</html>