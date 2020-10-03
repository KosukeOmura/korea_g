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
    <link rel="stylesheet" href="indexトップページ用/main.top.css/top.css">
    <link rel="stylesheet" href="indexトップページ用/newarrivalbox/newarrival.css">
    <link rel="stylesheet" href="indexトップページ用/rankingtopbox/ranking.css">
    <link rel="stylesheet" href="indexトップページ用/allitembox/allitem.css">
    <link rel="stylesheet" href="indexトップページ用/blogbox/blog.css">
    <link rel="stylesheet" href="indexトップページ用/snsbox/sns.css">
    <link rel="stylesheet" href="indexトップページ用/footer/footer.css">
    <link rel="stylesheet" href="indexトップページ用/topback/topback.css">
    <!-- ハンバーガーメニューcss -->
    <link rel="stylesheet" href="indexトップページ用/hamburager/hambargur.css">

    <!-- swiper css -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="indexトップページ用/top.swiper/swiper.css">
</head>
<body>
    <!-- トップへ戻る実装スタート -->
    <a href="#top" id="btn-backtotop"><span class="arrow arrow_up"></span></a>

    <!-- ハンバーガーメニュー開始 -->
    <div class="mask" id="mask"></div>
    <div id="top-box">
        <div id="top-weight">
            <div id="textanauns">
                <div id="textanauns-images">
                    <img src="indexトップページ用/top.images/freeshipping.png">
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
    <img class="brandname" src="indexトップページ用/top.images/アア.png">
    
    <div id="List-top">
        <ul>
            <li><a href="#">MENS</a></li>
            <li><a href="#">LADIES</a></li>
            <li><a href="#">SALE</a></li>
        </ul>
    </div>
    </header>

    <!-- スライダースタート -->
    <div class="swiper-container">
        <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide"><img src="indexトップページ用/top.images/bgimage1.png"></div>
                <div class="swiper-slide"><img src="indexトップページ用/top.images/topbg3.png"></div>
                <div class="swiper-slide"><img src="indexトップページ用/top.images/topbg.2.png"></div>
            </div>
            <!-- If we need pagination -->
            <div class="swiper-pagination"></div>
    
            <!-- If we need navigation buttons -->
            <!-- <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div> -->
    
            <!-- If we need scrollbar -->
            <div class="swiper-scrollbar"></div>
    </div>
    
    <!-- バナースタート -->
    <div id="banner" class="grid">
        <ul>
            <li><a href="QandA/q_and_a.php"><img src="indexトップページ用/top.images/banner_faq_pc.png"></a></li>
            <li><a href="LADIES_ONLY/ladies_only.php"><img src="indexトップページ用/top.images/banner_ladies_pc.png"></a></li>
            <li><a href="MENS_ONLY/mens_only.php"><img src="indexトップページ用/top.images/banner_mens_pc.png"></a></li>
            <li><a href="Weekly_Ranking_box/weekly_ranking.php"><img src="indexトップページ用/top.images/banner_nexthit_pc.png"></a></li>
            <li><a href="Weekly_Ranking_box/weekly_ranking.php"><img src="indexトップページ用/top.images/banner_ranking_pc.png"></a></li>
            <li><a href="new_arrival.php"><img src="indexトップページ用/top.images/banner_recommend_pc.png"></a></li>
            <li><a href="new_arrival.php"><img src="indexトップページ用/top.images/banner_recommend_pc (1).png"></a></li>
            <li><a href="WARKINGBOX/warking.php"><img src="indexトップページ用/top.images/banner_shipping_pc.png"></a></li>
        </ul>
    </div>

    <!-- メンズレディースカテゴリスタート -->
    <div id="categories">
        <div id="categoriesCol">
            <div class="mens">
                <p class="titlepc">
                    <img src="indexトップページ用/top.images/categories_ttl_mens.png">
                </p>
                <ul>
                    <li><a href="Category/MENS/tops.php"><img src="indexトップページ用/top.images/categories_tops.png"></a></li>
                    <li><a href="Category/MENS/outer.php"><img src="indexトップページ用/top.images/categories_outer.png"></a></li>
                    <li><a href="Category/MENS/bottoms.php"><img src="indexトップページ用/top.images/categories_bottoms.png"></a></li>
                    <li><a href="Category/MENS/set_up.php"><img src="indexトップページ用/top.images/categories_setup.png"></a></li>
                    <li><a href="Category/MENS/other.php"><img src="indexトップページ用/top.images/categories_other.png"></a></li>
                    <li><a href="Category/MENS/shoes.php"><img src="indexトップページ用/top.images/categories_shoes.png"></a></li>
                    <li><a href="Category/MENS/goods.php"><img src="indexトップページ用/top.images/categories_goods.png"></a></li>
                    <li><a href="Category/MENS/bag.php"><img src="indexトップページ用/top.images/categories_bag.png"></a></li>
                </ul>
            </div>
        </div>
        <div id="categoriesCol2">
            <div class="ladies">
                <p class="titlepc">
                    <img src="indexトップページ用/top.images/categories_ttl_ladies.png">
                </p>
                <ul>
                    <li><a href="Category/LADIES/tops.php"><img src="indexトップページ用/top.images/categories_tops.png"></a></li>
                    <li><a href="Category/LADIES/outer.php"><img src="indexトップページ用/top.images/categories_outer.png"></a></li>
                    <li><a href="Category/LADIES/bottoms.php"><img src="indexトップページ用/top.images/categories_bottoms_ladies.png"></a></li>
                    <li><a href="Category/LADIES/set_up.php"><img src="indexトップページ用/top.images/categories_setup.png"></a></li>
                    <li><a href="Category/LADIES/other.php"><img src="indexトップページ用/top.images/categories_other.png"></a></li>
                    <li><a href="Category/LADIES/shoes.php"><img src="indexトップページ用/top.images/categories_shoes.png"></a></li>
                    <li><a href="Category/LADIES/goods.php"><img src="indexトップページ用/top.images/categories_goods.png"></a></li>
                    <li><a href="Category/LADIES/bag.php"><img src="indexトップページ用/top.images/categories_bag.png"></a></li>
                </ul>
            </div>
        </div>
    </div>

    <!-- New Arrival部分スタート -->

    <div id="newArrival">
        <h2>New Arrival</h2>
        <div class="recommendCol">
            <ul>
                    <?php
                        ini_set("display_errors","On");
                            try { 

                                $db = new PDO(PDO_DSN,DB_USERNAME,DB_PASSWORD);

                                $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);


                                $sql = 'SELECT code,name,image,item_text,price,stock_item FROM item_box WHERE 1';
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
                                    echo '<a href="one_box/one_box.php?pro_code='.$rec['code'].'">';
                                    echo '<li class="column">';
                                    if($rec['image'] == '') {
                    
                                        $pro_image_name[]='';
                                    } else {
                                    echo  $pro_image_name[]='<img src="./image/'.$rec['image'].'">';
                                    }
                                    echo '<h2>'.$rec['name'].'</h2>';?>
                                     <p>¥<?php echo  $rec['price']; ?></p>
                                    <?php
                                    echo '</li>';
                                    echo '</a>';
                                    
                                }
                            }catch(Exception $e) {
                                echo 'ただいまメンテナンス中';
                                exit();
                            }
                    ?>
                </li>
            </ul>
        </div>
        <div class="arrivalbox">
            <p><a href="new_arrival.php">view All</a></p>
        </div>
    </div>

    <!-- RANKING部分スタート -->
    <div id="ranking">
        <h2>Weekly Ranking</h2>
        <div class="ttr">
            <ul>
                <?php
                    ini_set("display_errors","On");

                    try { 

                        $db = new PDO(PDO_DSN,DB_USERNAME,DB_PASSWORD);
                        $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);


                        $sql = 'SELECT code,name,image,item_text,price,stock_item FROM item_box WHERE 1';
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
                            echo '<a href="one_box/one_box.php?pro_code='.$rec['code'].'">';
                            echo '<li class="ttln">';
                                if($rec['image'] == '') {
                                    $pro_image_name[]='';
                                } 
                                else {
                                    echo  $pro_image_name[]='<img class="rankingtopNumber" src="./image/'.$rec['image'].'">';
                                }
                            echo '</li>';
                            echo '</a>';
                                }
                        }catch(Exception $e) {
                            echo 'ただいまメンテナンス中';
                            exit();
                        }
                ?>
            </ul>
        </div>
        <div class="rankingbox">
            <p><a href="Weekly_Ranking_box/weekly_ranking.php">view All</a></p>
        </div>
    </div>

    <!-- ALL ITEM -->
    <div id="allitems">
        <h2>ALL ITEM</h2>
        <div id="itembox">
            <ul>
            <?php
                    ini_set("display_errors","On");

                    try { 

                        $db = new PDO(PDO_DSN,DB_USERNAME,DB_PASSWORD);
                        $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);


                        $sql = 'SELECT code,name,image,item_text,price,stock_item FROM item_box WHERE 1';
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
                            echo '<a href="one_box/one_box.php?pro_code='.$rec['code'].'">';
                            echo '<li>';
                                if($rec['image'] == '') {
                                    $pro_image_name[]='';
                                } 
                                else {
                                    echo  $pro_image_name[]='<img class="rankingtopNumber" src="./image/'.$rec['image'].'">';
                                }
                            echo '</li>';
                            echo '</a>';
                                }
                        }catch(Exception $e) {
                            echo 'ただいまメンテナンス中';
                            exit();
                        }
                ?>
            </ul>
        </div>
        <div class="allitembox">
            <p><a href="ALL_ITEMBOX/all_item.php">view All</a></p>
        </div>
    </div>

    <!-- BLOGスタート -->
    <div id="blog">
        <h2>BLOG</h2>
        <div id="blogCol">
            <ul>
                <li>
                    <a href="">
                        <img src="indexトップページ用/blogbox/image/50674371_480x390.jpeg">
                    </a>
                    <p>2020.8.22</p>
                    <a href="">
                        <h2>夏に着るお洒落でコーデ!</h2>
                        <p>CHECK ></p>
                    </a>
                </li>
                <li>
                    <a href="">
                        <img src="indexトップページ用/blogbox/image/50674371_480x390.jpeg">
                    </a>
                    <p>2020.8.22</p>
                    <a href="">
                        <h2>夏に着るお洒落でコーデ!</h2>
                        <p>CHECK ></p>
                    </a>
                </li>
                <li>
                    <a href="">
                        <img src="indexトップページ用/blogbox/image/50674371_480x390.jpeg">
                    </a>
                    <p>2020.8.22</p>
                    <a href="">
                        <h2>夏に着るお洒落でコーデ!</h2>
                        <p>CHECK ></p>
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <!-- SNSスタート -->
    <div class="snsbox">
        <h2><a href=""><img src="image/instagram.png"></a>Instagram </h2>
        <script src="https://snapwidget.com/js/snapwidget.js"></script>
        <iframe src="https://snapwidget.com/embed/862627" class="snapwidget-widget" allowtransparency="true" frameborder="0" scrolling="no" style="border:none; overflow:hidden;  width:100%; "></iframe>
    </div>

    <footer>
        <div class="leftfooter">
            <img src="indexトップページ用/footer/images/footer.png">
            <img src="indexトップページ用/footer/images/twicon.png">
            <img src="indexトップページ用/footer/images/igicon2018.png">
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
    <script src="indexトップページ用/top.swiper/slider.js/top-slider.js"></script>

    <!-- ハンバーガーメニュー -->
    <script src="indexトップページ用/hamburager/hambargur.js"></script>

    <!-- トップへ戻るボタン実装 -->
    <script src="indexトップページ用/topback/topback.js"></script>
</body>
</html>