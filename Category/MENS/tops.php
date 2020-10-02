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

?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Korea_g[韓国グラム]</title>
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="../../indexトップページ用/main.top.css/top.css">
    <!-- <link rel="stylesheet" href="indexトップページ用/newarrivalbox/newarrival.css"> -->
    <link rel="stylesheet" href="../../indexトップページ用/rankingtopbox/ranking.css">
    <link rel="stylesheet" href="../../indexトップページ用/allitembox/allitem.css">
    <link rel="stylesheet" href="../../indexトップページ用/blogbox/blog.css">
    <link rel="stylesheet" href="../../indexトップページ用/snsbox/sns.css">
    <link rel="stylesheet" href="../../indexトップページ用/footer/footer.css">

    <!-- newarrival専用css -->
    <link rel="stylesheet" href="../../newarrivalページ用/categories/categories.css">
    <link rel="stylesheet" href="../../newarrivalページ用/articlebox/article.css">
    <link rel="stylesheet" href="../../newarrivalページ用/accordion/accordion.css">
    <link rel="stylesheet" href="../../newarrivalページ用/product-viewed/product.css">
    <link rel="stylesheet" href="../../newarrivalページ用/notes/notes.css">
    <link rel="stylesheet" href="../../newarrivalページ用/page_title/page-title.css">

    <!-- ハンバーガーメニューcss -->
    <link rel="stylesheet" href="../../indexトップページ用/hamburager/hambargur.css">

    <!-- swiper css -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="../../indexトップページ用/top.swiper/swiper.css">

</head>
<body>
        <!-- ハンバーガーメニュー開始 -->
        <div class="mask" id="mask"></div>
        <div id="top-box">
            <div id="top-weight">
                <div id="textanauns">
                    <div id="textanauns-images">
                        <img src="../../indexトップページ用/top.images/freeshipping.png">
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
            <a href="../../index.php">
                <img class="brandname" src="../../indexトップページ用/top.images/アア.png">
            </a>
        
        <div id="List-top">
            <ul>
                <li><a href="#">MENS</a></li>
                <li><a href="">LADIES</a></li>
                <li><a href="#">SALE</a></li>
            </ul>
        </div>
        </header>

        <!-- カテゴリリストボックススタート -->
        <div id="categories">
        <div class="categoryimg">
            <img src="../image/category.png">
        </div>
            <div id="categoriesCol">
                <div class="mens">
                    <p class="titlepc">
                        <img src="../../indexトップページ用/top.images/categories_ttl_mens.png">
                    </p>
                    <ul>
                        <li class="cm1"><a href="tops.php"><img src="../../indexトップページ用/top.images/categories_tops.png"></a></li>
                        <li><a href="outer.php"><img src="../../indexトップページ用/top.images/categories_outer.png"></a></li>
                        <li><a href="bottoms.php"><img src="../../indexトップページ用/top.images/categories_bottoms.png"></a></li>
                        <li><a href="set_up.php"><img src="../../indexトップページ用/top.images/categories_setup.png"></a></li>
                        <li><a href="other.php"><img src="../../indexトップページ用/top.images/categories_other.png"></a></li>
                        <li><a href="shoes.php"><img src="../../indexトップページ用/top.images/categories_shoes.png"></a></li>
                        <li><a href="goods.php"><img src="../../indexトップページ用/top.images/categories_goods.png"></a></li>
                        <li><a href="bag.php"><img src="../../indexトップページ用/top.images/categories_bag.png"></a></li>
                    </ul>
                </div>
            </div>
            <div id="categoriesCol2">
                <div class="ladies">
                    <p class="titlepc">
                        <img src="../../indexトップページ用/top.images/categories_ttl_ladies.png">
                    </p>
                    <ul>
                        <li><a href="../LADIES/tops.php"><img src="../../indexトップページ用/top.images/categories_tops.png"></a></li>
                        <li><a href="../LADIES/outer.php"><img src="../../indexトップページ用/top.images/categories_outer.png"></a></li>
                        <li><a href="../LADIES/bottoms.php"><img src="../../indexトップページ用/top.images/categories_bottoms_ladies.png"></a></li>
                        <li><a href="../LADIES/set_up.php"><img src="../../indexトップページ用/top.images/categories_setup.png"></a></li>
                        <li><a href="../LADIES/other.php"><img src="../../indexトップページ用/top.images/categories_other.png"></a></li>
                        <li><a href="../LADIES/shoes.php"><img src="../../indexトップページ用/top.images/categories_shoes.png"></a></li>
                        <li><a href="../LADIES/goods.php"><img src="../../indexトップページ用/top.images/categories_goods.png"></a></li>
                        <li><a href="../LADIES/bag.php"><img src="../../indexトップページ用/top.images/categories_bag.png"></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- ページタイトル名 -->
        <div class="page_title">
            <h2>MENS Tops</h2>
        </div>


        <!-- アーティクルボックススタート -->
        <div class="articlebox">
            <div class="articleitem">
                <a href="">新しい順</a>
            </div>
            <div class="articleitem">
                <a href="">人気順</a>
            </div>
            <div class="articleitem">
                <a href="">価格が安い順</a>
            </div>
            <div class="articleitem">
                <a href="">価格が高い順</a>
            </div>
        </div>

        <!-- メイン部分スタート -->
        <main>
            <!-- アコーディオンスタート -->
            <div class="toggle_left">
                <div class="toggle_wrap">
                    <div class="toggle_switch">
                        <p>値段</p>
                    </div>
                    <div class="toggle_contents">
                        <ul>
                            <li>
                                <a href="">Under ¥2,000</a>
                            </li>
                            <li>
                                <a href="">Under ¥3,000</a>
                            </li>
                            <li>
                                <a href="">Under ¥4,000</a>
                            </li>
                            <li>
                                <a href="">Under ¥5,000</a>
                            </li>
                        </ul>
                    </div>  
                </div>  
                <div class="filtter_wrap">
                    <div class="filtter_switch">
                        <p>カテゴリー</p>
                    </div>
                    <div class="filtter_box">
                        <ul>
                            <li>
                                <a href="">Outer</a>
                            </li>
                            <li>
                                <a href="">Tops</a>
                            </li>
                            <li>
                                <a href="">Bottoms</a>
                            </li>
                            <li>
                                <a href="">One piece</a>
                            </li>
                            <li>
                                <a href="">Set up</a>
                            </li>
                            <li>
                                <a href="">shoes</a>
                            </li>
                            <li>
                                <a href="">bag</a>
                            </li>
                            <li>
                                <a href="">Accessory</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- 商品部分スタート -->
            <div class="toggle_right">
                <div id="newArrival">
                    <div class="recommendCol">
                        <ul>
                            <?php
                                try {
                                    $db = new PDO(PDO_DSN,DB_USERNAME,DB_PASSWORD);

                                    $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

                                    $sql = 'SELECT code,name,image,item_text,price,stock_item FROM item_box WHERE 1';
                                    $stmt = $db->prepare($sql);
                                    $stmt->execute();

                                    $db = null;

                                    while(true) {
                                        $rec = $stmt->fetch(PDO::FETCH_ASSOC);

                                        if($rec == false) {
                                            break;
                                        }
                                    echo '<li class="column">';
                                    echo '<a href="../../one_box/one_box.php?pro_code='.$rec['code'].'">';
                                    if($rec['image'] == '') {
                    
                                        $pro_image_name[]='';
                                    } else {
                                    echo  $pro_image_name[]='<img src="../../image/'.$rec['image'].'">';
                                    }
                                    echo '<h2>'.$rec['name'].'</h2>';
                                    echo '<p>'.$rec['price'].'</p>';
                                    echo '</a>';
                                    echo '</li>';
                                    
                                    }


                                }catch(Exception $e) {

                                    echo 'ただいまメンテナンス中';
                                    exit();
                                }



                             ?>
                            
                        </ul>
                    </div>
                    <div class="arrivalbox">
                        <p><a href="../../newarrival.html">view All</a></p>
                    </div>
                </div>
            </div>
        </main>
        <!-- BLOGスタート -->
        <div id="blog">
            <h2>BLOG</h2>
            <div id="blogCol">
                <ul>
                    <li>
                        <a href="">
                            <img src="../../indexトップページ用/blogbox/image/50674371_480x390.jpeg">
                        </a>
                        <p>2020.8.22</p>
                        <a href="">
                            <h2>夏に着るお洒落でコーデ!</h2>
                            <p>CHECK ></p>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <img src="../../indexトップページ用/blogbox/image/50674371_480x390.jpeg">
                        </a>
                        <p>2020.8.22</p>
                        <a href="">
                            <h2>夏に着るお洒落でコーデ!</h2>
                            <p>CHECK ></p>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <img src="../../indexトップページ用/blogbox/image/50674371_480x390.jpeg">
                        </a>
                        <p>2020.8.22</p>
                        <a href="">
                            <h2>夏に着るお洒落でコーデ!</h2>
                            <p>CHECK ></p>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="arrivalbox">
                <p><a href="">view All</a></p>
            </div>
        </div>
        <!-- 最近見た商品部分スタート -->
        <div class="latest-viewed-box">
            <h2>-最近見た商品-</h2>
            <div class="product-viewed">
                <div class="productds">
                    <a href="">
                        <img src="../../newarrivalページ用/product-viewed/image/80624879_220x220.jpeg">
                    </a>
                    <a href="">
                        <p>プリントT vod32</p>
                        <p class="wol">¥3,200</p>
                    </a>
                </div>
                <div class="productds">
                    <a href="">
                        <img src="../../newarrivalページ用/product-viewed/image/80624879_220x220.jpeg">
                    </a>
                    <a href="">
                        <p>プリントT vod32</p>
                        <p class="wol">¥3,200</p>
                    </a>
                </div>
                <div class="productds">
                    <a href="">
                        <img src="../../newarrivalページ用/product-viewed/image/80624879_220x220.jpeg">
                    </a>
                    <a href="">
                        <p>プリントT vod32</p>
                        <p class="wol">¥3,200</p>
                    </a>
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
                <img src="../../indexトップページ用/footer/images/footer.png">
                <img src="../../indexトップページ用/footer/images/twicon.png">
                <img src="../../indexトップページ用/footer/images/igicon2018.png">
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
    <script src="../../indexトップページ用/top.swiper/slider.js/top-slider.js"></script>
    
        <!-- ハンバーガーメニュー -->
        <script src="../../indexトップページ用/hamburager/hambargur.js"></script>

        <!-- jQuery
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->

        <!-- アコーディオン -->
        <script src="../../newarrivalページ用/accordion/accordion.js"></script>
</body>
</html>