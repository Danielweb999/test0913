<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="google-site-verification" content="uNLPWq_OhX-H3EH3zriV10fosrX7w6xgsuJEW7C8F3g" />
    <title>MLB world</title>
    <link rel="stylesheet" href="css\font-awesome-4.6.3\css\font-awesome.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <link href="https://fonts.googleapis.com/css?family=Sigmar+One" rel="stylesheet">
    <link href="http://fonts.googleapis.com/earlyaccess/cwtexyen.css" rel="stylesheet">
    <link rel="stylesheet" href="js/jquery-ui-1.12.0/jquery-ui.css">
    <script src="js/jquery-3.1.0.min.js" charset="utf-8"></script>
    <script src="js/jquery-ui-1.12.0/jquery-ui.js"></script>
    <script src="js/test.js"></script>
</head>
<!-- <script type="text/javascript">已外掛 test.js
    $(function() {
        $('#MenuIcon').click(function() {
            $('#PrimaryNavigation').slideToggle();
        }); //end click
        var tabs = $(".tabs").tabs();
        tabs.find(".ui-tabs-nav").sortable({
            axis: "x",
            stop: function() {
                tabs.tabs("refresh");
            }
        });
    }); //end
</script> -->

<body>
    <div id="Header">
        <div class="Container">
            <div id="MenuIcon">
                <a class="DB" href="#"><img src="images/cutimg/icon0822_11.png" alt=""><span class="SrOnly">menu icon</span></a>
            </div>
            <h1 id="Logo"><a class="DB" href="index.php"><img src="images/cutimg/icon0822_05.png" alt=""><span class="SrOnly">MLB world</span></a></h1>
            <h2 class="SrOnly">即時對戰成績、球員成績統計、球員系列商品！</h2>
            <!-- 會員區塊start -->
            <div id="MemberContent">
                <div id="MemberIcon">
                    <a href="#" class="DB"><img src="images/cutimg/icon0822_13.png" alt=""><span class="SrOnly">會員登入</span></a>
                </div>
                <div id="CartIcon">
                    <a href="#" class="DB"><img src="images/cutimg/icon0822_07.png" alt=""><span class="SrOnly">購物車</span></a>
                </div>
            </div>
            <!-- 會員區塊end -->
            <div class="clear"></div>
            <nav>
                <div id="PrimaryNavigation">
                    <ul>
                        <li id=NewsBtn><a href="#" class="DB"><span >最新消息</span></a></li>
                        <li id=TeamBtn><a href="#" class="DB"><span >球隊戰績</span></a></li>
                        <li id=PlayerBtn><a href="#" class="DB"><span >球員成績</span></a></li>
                        <li ><a href="#" class="DB"><span >賽程日期</span></a></li>
                        <li id=ProductBtn><a href="#" class="DB"><span >產品商城</span></a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
    <div id="Banner">
        <div id="BannerLeft"></div>
        <div id="BannerContent"><img src="images/cutimg/banner_3.jpg" alt=""></div>
        <div id="BannerRight"></div>
    </div>
    <div id="News">
        <div class="Container">
            <h4>最新消息</h4>
            <!-- 新聞1start -->
            <div class="Content">
                <div class="Wrap">
                    <div class="NewsPotoDiv"> <img src="images/NewsPoto/news1.jpg" alt="" class="NewsImg"></div>
                    <p class="NewsDate">2016/06/10</p>
                    <p class="NewsTitle"><a href="#">鈴木一朗3000安</a></p>
                </div>
            </div>
            <!-- 新聞end -->
            <!-- 新聞1start -->
            <div class="Content">
                <div class="Wrap">
                    <div class="NewsPotoDiv"> <img src="images/NewsPoto/news2.jpg" alt="" class="NewsImg"></div>
                    <p class="NewsDate">2016/06/10</p>
                    <p class="NewsTitle"><a href="#">鈴木一朗3000安</a></p>
                </div>
            </div>
            <!-- 新聞end -->
            <!-- 新聞1start -->
            <div class="Content">
                <div class="Wrap">
                    <div class="NewsPotoDiv"><img src="images/NewsPoto/news3.jpg" alt="" class="NewsImg"></div>
                    <p class="NewsDate">2016/06/11</p>
                    <p class="NewsTitle"><a href="#">鈴木一朗5000安</a></p>
                </div>
            </div>
            <!-- 新聞end -->
        </div>
    </div>
    <div class="Container">
        <div id="Team">
            <div class="tabs">
                <ul>
                    <li><a href="#tabs-1">美國聯盟領先榜</a></li>
                    <li><a href="#tabs-2">國家聯盟領先榜</a></li>

                </ul>
                <div id="tabs-1">
                    <table  border="0" cellspacing="10px" cellpadding="0">
                        <tr>
                            <th width="157" scope="row">美聯東區</th>
                            <td width="143" scope="row">
                                <div align="center">波士頓紅襪</div>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">美聯西區</th>
                            <td>
                                <div align="center">德州遊騎兵</div>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">美聯中區</th>
                            <td>
                                <div align="center">克里夫蘭印地安人</div>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">美聯外卡1</th>
                            <td>
                                <div align="center">巴爾的摩金鷹</div>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">美聯外卡2</th>
                            <td>
                                <div align="center">多倫多藍鳥</div>
                            </td>
                        </tr>
                    </table>
                </div>
                <div id="tabs-2">
                    <table  border="0" cellspacing="10px" cellpadding="0">
                        <tr>
                            <th width="157" scope="row">國聯東區</th>
                            <td width="143">
                                <div align="center">華盛頓國民</div>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">國聯西區</th>
                            <td>
                                <div align="center">洛杉磯道奇</div>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">國聯中區</th>
                            <td >
                                <div align="center">芝加哥小熊</div>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">國聯外卡1</th>
                            <td>
                                <div align="center">舊金山巨人</div>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">國聯外卡2</th>
                            <td>
                                <div align="center">紐約大都會</div>
                            </td>
                        </tr>
                    </table>
                </div>

            </div>
        </div>
        <div id="Player">
            <div class="tabs">
                <ul>
                    <li><a href="#tabs-3">投手數據領先榜</a></li>
                    <li><a href="#tabs-4">打者數據領先榜</a></li>

                </ul>
                <div id="tabs-3">
                    <table    cellspacing="10px" cellpadding="0">
                        <tr>
                            <th width="157" scope="row">防禦率</th>
                            <td width="157" scope="row">Kyle Hendricks</td>
                            <td width="143">
                                <div align="center">2.07</div>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">勝投數</th>
                            <td scope="row">Rick Porcello</td>
                            <td>
                                <div align="center">20</div>
                            </td>
                        </tr>
                        <tr>
                            <th height="21" scope="row">奪三振</th>
                            <td scope="row">Max Scherzer</td>
                            <td>
                                <div align="center">251</div>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">救援點</th>
                            <td scope="row">Jeurys Familia</td>
                            <td>
                                <div align="center">48</div>
                            </td>
                        </tr>
                    </table>
                </div>
                <div id="tabs-4">
                    <table  border="0" cellspacing="10px" cellpadding="0">
                        <tr>
                            <th width="157" scope="row">打擊率</th>
                            <td width="187" scope="row">Daniel Murphy</td>
                            <td width="143">
                                <div align="center">.344</div>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">全壘打</th>
                            <td scope="row">Mark Trumbo</td>
                            <td>
                                <div align="center">41</div>
                            </td>
                        </tr>
                        <tr>
                            <th height="21" scope="row">安打數</th>
                            <td scope="row">Jose Altuve</td>
                            <td>
                                <div align="center">192</div>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">打點</th>
                            <td scope="row">Nolan Arenado</td>
                            <td>
                                <div align="center">118</div>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">盜壘數</th>
                            <td scope="row">Billy Hamilton</td>
                            <td>
                                <div align="center">58</div>
                            </td>
                        </tr>
                    </table>

                </div>
            </div>
        </div>
    </div>

    <div id=Product>
        <div class="Container">
            <h4 class="SrOnly">產品介紹</h4>
            <!-- 產品區塊 start-->
            <div class="PCContent">
                <div class="PCImgContent"></div>
                <div class="PCDecription">手工巧克力</div>
            </div>
            <div class="clear"></div>
            <!-- 產品區塊 end-->
            <!-- 產品區塊 start-->
            <div class="PCContent">
                <div class="PCImgContent PCImgRight"></div>
                <div class="PCDecription">手工巧克力</div>
            </div>
            <div class="clear"></div>
            <!-- 產品區塊 end-->
            <!-- 產品區塊 start-->
            <div class="PCContent">
                <div class="PCImgContent"></div>
                <div class="PCDecription">手工巧克力</div>
            </div>
            <div class="clear"></div>
            <!-- 產品區塊 end-->
        </div>
    </div>
    <div id="Taste">
        <div class="Container">
            <h4>好吃的秘訣</h4>
            <!-- 秘訣區塊 start-->
            <div class="Content">
                <div class="Wrap">
                    <img src="dsfdsf.jpdg" alt="" class="NewsImg">
                    <div class="TipTag"></div>
                    <p>嚴選食材新鮮、實在</p>

                </div>
            </div>
            <!-- 秘訣區塊 end-->
            <!-- 秘訣區塊 start-->
            <div class="Content">
                <div class="Wrap">
                    <img src="dsfdsf.jpdg" alt="" class="NewsImg">
                    <div class="TipTag"></div>
                    <p>嚴選食材新鮮、實在</p>

                </div>
            </div>
            <!-- 秘訣區塊 end-->
            <!-- 秘訣區塊 start-->
            <div class="Content">
                <div class="Wrap">
                    <img src="dsfdsf.jpdg" alt="" class="NewsImg">
                    <div class="TipTag"></div>
                    <p>嚴選食材新鮮、實在</p>

                </div>
            </div>
            <!-- 秘訣區塊 end-->
            <!-- <div id="Map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3618.1149599903943!2d121.1625196503348!3d24.92815334860246!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x346824a20644729b%3A0xe4eeaaf4f13ab40!2zMzI25qGD5ZyS5biC5qWK5qKF5Y2A6auY542F6LevODEz5be3MjLlvIQxMeiZnw!5e0!3m2!1szh-TW!2stw!4v1472545166313"
                        width="100%" height="440" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div> -->
        </div>
    </div>


    <!-- 頁尾 -->
    <footer id="Footer">
        <div class="Container">
            <div id="ContactContent">
                <div id="FooterLogo"><a href="index.php">CakeHouse</a></div>
                <p>桃園市楊梅區高獅路813巷22弄11號</p>
                <p>聯絡專線:0800-028-558</p>
            </div>
            <div id="SocietyContent">
                <div id="FacebookIcon"><a href="" class="DB"><i class="fa fa-facebook-square" aria-hidden="true"></i><span class="SrOnly">Facebook</span></a></div>
                <div id="GooglePlus"><a href="" class="DB"><i class="fa fa-google-plus" aria-hidden="true"></i><span class="SrOnly">Google+</span></a></div>
            </div>
        </div>
        <div class="clear"></div>
        <div id="Copyrights">
            <p>Copyright © 2016 CakeHouse. All Rights Reserved.</p>
        </div>
    </footer>
    <!--BACKtoTOP-START-->
    <div id="PageTop"><a class="DB" href="javascript:void(0)"><i class="fa fa-level-up" aria-hidden="true"></i><span class="SrOnly">回到最上方</span></a></div>
    <!--BACKtoTOP-STOP-->
</body>

</html>
