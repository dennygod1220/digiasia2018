<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">
    <script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
    <script src="./index.js"></script>
    <title>爬蟲展示頁</title>
    <style>
        p,
        h4,
        span {
            font-family: Microsoft JhengHei;
            margin: 0px;
            letter-spacing: 1px;
        }
        p {
            font-size: 4vmin;
        }
        *,
        .col-5,
        .col-2 {
            padding: 0px;
        }
        html {
            height: 100%;
        }
        body {
            height: 100%;
            margin: 0px;
            background: url("img/index/BG.jpg") center center fixed no-repeat;
            /* background-size: cover; */
            background-size: 100% 100%;
        }
        .container-fluid {
            padding: 0px;
        }
        .row {
            margin: 0px;
        }
        .nopad {
            padding: 0px;
        }
        .yspan {
            margin-right: 3px;
            color: yellow;
            font-style: italic;
            font-weight: bold;
        }
        .btn_title {
            background-image: url(img/內頁/BUTTON.png);
            background-size: 100% 100%;
        }
        #keyword {
            background-image: url("img/內頁/外框.png");
            background-size: 100% 100%;
        }
        .CompanyProfile{
            color:white;
            margin-top:2vmin;
            font-size: 3vmin;
        }
    </style>
    <script src="./general/menuicon.js"></script>

</head>

<body style="background-color:black">
    <?php echo include './general/menu.php';?>
    <div class="container-fluid">

        <?php echo include './general/gold_icon.php'; ?>

        <div class="row" style="text-align:center;margin-top:5px">
            <div class="col">
                <h4 style="color:white;font-size: 6vmin;">語意分析說明</h4>
            </div>
        </div>
        <div class="row" style="text-align:center;margin-top: 5px;">
            <div class="col">
                <p style="color:white;">知道一篇文章有多少<span class="yspan">關鍵訊息</span>嗎？</p>
            </div>
        </div>
        <div class="row" style="text-align:center;">
            <div class="col">
                <p style="color:white"><span class="yspan">語意分析</span>讓你快速瞭解文章要點，</p>
            </div>
        </div>
        <div class="row" style="text-align:center;">
            <div class="col">
                <p style="color:white">掌握<span class="yspan">市場趨勢</span>與消費者<span class="yspan">潛在需求</span>。</p>
            </div>
        </div>

        <?php echo include './general/start.php'; ?>

        <!-- 按鈕標頭。 -->
        <div class="row" style="text-align:center;margin-top:25px">
            <div class="col">
                <h4 style="color:white;font-size: 6vmin;" id="choose_art">選擇有興趣的文章</h4>
            </div>
        </div>

        <!-- 爬蟲文章按鈕 -->
        <div class="card" style="height: 70vmin;overflow-y: scroll;background-color:rgba(1,1,1,0);border: 0px white solid;margin-top: 20px;">

            <div class="card-body" style="background-color:rgba(1,1,1,0);">
                <ul class="list-group list-group-flush" id="USA_V">
                    <?php
                        function NoRand($begin=0,$end=20,$limit=5){ 
                            $rand_array=range($begin,$end);                            
                            shuffle($rand_array);//調用現成的數組隨機排列函數 
                            return array_slice($rand_array,0,$limit);//截取前$limit個 
                        } 
                        $json_file = 'NYT_S/*.json';
                        $file_ar = glob($json_file);
                        $file_rand = NoRand(1,count($file_ar)-1);
                        for($x=0;$x<count($file_rand);$x++){
                            $file_path = $file_ar[$file_rand[$x]];
                            $file = file_get_contents($file_path);
                            $file_obj = json_decode($file);
                            $title = $file_obj->title;
                            $url_decode = urldecode($val);
                            $url_s1 = substr_replace($file_path,"",0,6);
                            $url = substr_replace($url_s1,"",strpos($url_s1,".json"),5);
                            echo "<div class='btn_title'>
                            <div class='udnbtn' style='height:11vmin;overflow: hidden;color:white;line-height:12vmin;margin-left: 18vmin;font-size: 4vmin;' file_path='".$url."'>"
                            .$title.
                            "</div>
                            </div>";
                        }
                    ?>

                </ul>
            </div>
        </div>
        <!-- 內文瀏覽標頭 -->
        <div class="row" style="text-align:center;margin-top:25px">
            <div class="col">
                <h4 style="color:white;font-size: 6vmin;" id="art_content">內文瀏覽</h4>
            </div>
        </div>

        <!-- 文章內文顯示區 -->
        <div class="card" style="height: 80vmin;overflow-y: scroll;background-color:rgba(1,1,1,0);border: 0px;padding-right: 5vmin;padding-left: 5vmin;padding-top: 2vmin;margin-top: 5vmin;">

            <div class="card-body" style="background-color:rgba(1,1,1,0);border: 1px #FFF solid;">
                <ul class="list-group list-group-flush" id="content" style="color:white">

                </ul>
            </div>
        </div>

        <!-- 金幣按鈕_點擊觀看語意分析 -->
        <div class="row" style="text-align:center;margin-top: 10vmin;">
            <div class="col">
                <img id="gold_an" src="./img/內頁/BUTTON-1.png" class="img-fluid" style="width: 45vmin;">
            </div>
        </div>
        <!-- 關鍵字顯示區 -->
        <div class="row" style="margin-top: 20px;padding-right:8vmin;padding-left:8vmin;height: 40vmin;" id="anablock">
            <div class="col" style="height:50vmin;color:white;display:none;word-break: break-all;opacity:0" id="keyword">
                <p style="color:white" id="keywordp"></p>
            </div>
        </div>
        <!-- 寶藏相 -->
        <div class="row" style="text-align:center;    margin-top: 10vmin;">
            <div class="col">
                <img id="ana_btn" src="./img/內頁/寶藏-關.png" style="width: 40vmin;" class="img-fluid">
            </div>
        </div>
        <!-- 語意分析 商績變業績 -->
        <div class="row" style="text-align:center">
            <div class="col">
                <p style="color:white;font-size:2vmin">語意分析快速掌握消費者需求 讓商機變業績</p>
            </div>
        </div>
        <!-- 隨身影音 -->
        <div class="row" style=" margin-top: 8vmin;">
            <div class="col" style="text-align:center">
                <ins class="clickforceads" style="display:inline-block;width:301px;height:251px;" data-ad-zone="8660"></ins>
                <script async type="text/javascript" src="//cdn.doublemax.net/js/init.js"></script>
            </div>
        </div>

        <!-- 同場加映 -->
        <div class="row" style="text-align:center;margin-top: 5vmin;">
            <div class="col">
                <h4 style="color:white">同場加映</h4>
                <h4 style="color:white">電信大數據應用</h4>
            </div>
        </div>
        <!-- 比利哥YouTube -->
        <div class="row" style="text-align:center;margin-top: 5vmin;">
            <div class="col">
                <iframe src="https://www.youtube.com/embed/CnT1IniYwIY?rel=0&autoplay=1" frameborder="0" allowfullscreen allow="autoplay"></iframe>
            </div>
        </div>
        <!-- 公司簡介 -->
        <div class="row" style="text-align:center;margin-top: 5vmin;">
            <div class="col">
                <h4 style="color:white">公司簡介</h4>
                <p class="CompanyProfile">域動行銷致力發展數位媒體聯播網絡，</p>
                <p class="CompanyProfile">專注於數位網路動態發展、</p>
                <p class="CompanyProfile">洞察媒體趨勢與消費者行為興趣分析。</p>
                <p class="CompanyProfile">擁有國際化規格之DSP/SSP/DMP廣告系統，</p>
                <p class="CompanyProfile">透過AI優化引擎Holmes 數位廣告先知核心，</p>
                <p class="CompanyProfile">全面提升廣告自動優化技術。</p>
                <p class="CompanyProfile">提供廣告主數位媒體最佳整合行銷方案</p>
            </div>
        </div>
        <!-- 公司標語 -->
        <div class="row" style="margin-top:10vmin;">
          <div class="col" style="padding: 0px;">
            <img src="./img/內頁/KPI要達標 就找域動行銷.png" alt="" class="img-fluid">
          </div>
        </div>
        <div class="row" style="margin-top:-1px;">
          <div class="col" style="padding: 0px;">
            <img src="./img/內頁/電話.png" alt="" class="img-fluid">
          </div>
          <div class="col" style="padding: 0px;">
            <img src="./img/內頁/MAIL.png" alt="" class="img-fluid">
          </div>
        </div>
    </div>
    <script>
        $(function () {
            $(".udnbtn").click(function () {
                $("#ana_btn").attr("src", "./img/內頁/寶藏-關.png");
                $([document.documentElement, document.body]).animate({
                    scrollTop: $("#art_content").offset().top
                }, 1000);
                var url = $(this).attr("file_path");
                console.log(url);
                $.getJSON('https://events.clickforce.com.tw/digiasia2018/NYT_S/' + url+ '.json', function (data) {
                // $.getJSON('http://localhost:8889/digiasia2018/NYT_S/' + url + '.json', function (data) {
                    var b = '';
                    for(var val in data.content){
                        b = b + data.content[val];
                    }
                    $("#content").text("");
                    $("#content").text(b);
                    $("#keyword").css('display', 'none');
                    $("#keywordp").text("");
                    $("#keywordp").text(data.keywords);
                    opacityset('content', 0);
                })
            });
            function opacityset(id, num) {
                if (num < 1) {
                    $("#" + id).css('opacity', num);
                    setTimeout(() => {
                        opacityset(id, num + 0.1);
                    }, 300);
                }
            }
            //點了 start gif 檔後跳轉到 選文章區域
            $("#start_btn").click(function () {
                $([document.documentElement, document.body]).animate({
                    scrollTop: $("#choose_art").offset().top
                }, 1000);
            })
            //按鈕 hover效果
            $("#gold_an").on('touchstart', function () {
                $("#gold_an").attr('src', './img/內頁/BUTTON-2.png');
            });
            $("#gold_an").on('touchend', function () {
                $("#gold_an").attr('src', './img/內頁/BUTTON-1.png');
            })
            $("#gold_an").click(function () {
                $([document.documentElement, document.body]).animate({
                    scrollTop: $("#gold_an").offset().top,
                    opacity: 1
                }, 1000);
                setTimeout(() => {
                    $("#ana_btn").attr("src", "./img/內頁/寶藏-開.png");
                    $("#keyword").css('display', 'block');
                    opacityset('keyword', 0);
                }, 500);
            })
        })
    </script>
</body>

</html>
