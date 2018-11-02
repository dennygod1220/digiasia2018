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
    <title>爬蟲展示頁</title>

    <script>
        $(function () {
            function getRandom(min, max) {
                return Math.floor(Math.random() * (max - min + 1)) + min;
            };

            // console.log($(".udnbtn").length);
            var max = $(".udnbtn").length;
            var ran_ar = [];
            for (var x = 0; x < 5; x++) {
                ran_ar.push(getRandom(0, max));
            }
        })
    </script>

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
        #anablock {
            background-image: url("img/1101/border.png");
            background-size: 100% 100%;
        }
        .CompanyProfile{
            color:white;
            margin-top:2vmin;
            font-size: 3vmin;
        }
        .cf_key_p{
            padding: 0px;
            border:1px #fff solid;
            word-wrap: break-word;
            color:white;
            font-size:3vmin !important;
            height: 100%;
        }
        .cf_key_div{
            padding: 0px;
            font-size:2vmin;
            margin-left: 1vmin;
            max-width: 21%;
        }
    </style>
    <script src="./general/menuicon.js"></script>

</head>

<body style="background-color:black">
    <?php include('./general/menu.php');?>
    <div class="container-fluid">

        <?php  include('./general/gold_icon.php'); ?>

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

        <?php  include('./general/start.php'); ?>

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
                        $file = file_get_contents('UDN_S/one.json');
                        $json = json_decode($file);

                        $file_rand = NoRand(0,count($json)-1);
                        for($x=0;$x<count($file_rand);$x++){

                            $title = $json[$file_rand[$x]]->title;
                            $url = $json[$file_rand[$x]]->url;
                            echo "<div class='btn_title'>
                            <div class='udnbtn' style='height:11vmin;overflow: hidden;color:white;line-height:12vmin;margin-left: 18vmin;font-size: 4vmin;' if_url='".$url."' file_path='".$file_rand[$x]."'>"
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
        <div class="card" style="height: 115vmin;overflow-y: scroll;background-color:rgba(1,1,1,0);border: 0px;padding-right: 5vmin;padding-left: 5vmin;padding-top: 2vmin;margin-top: 5vmin;">

            <div class="card-body" id="content" style="padding:2vmin;height:100%;background-color:rgba(1,1,1,0);border: 1px #FFF solid;-webkit-overflow-scrolling:touch;-webkit-overflow-scrolling: touch;overflow-y: scroll;">

            </div>
        </div>

        <!-- 金幣按鈕_點擊觀看語意分析 -->
        <div class="row" style="text-align:center;margin-top: 10vmin;">
            <div class="col">
                <img id="gold_an" src="./img/內頁/BUTTON-1.png" class="img-fluid" style="width: 45vmin;">
            </div>
        </div>
        <!-- 關鍵字顯示區 -->
        <div class="row" style="margin: 20px 2vmin 0px 2vmin;padding-right:3vmin;padding-left:3vmin;height: 110vmin;"
            id="anablock">
            <div class="container-fluid" id="keyword_block" style="display:none">
                <div class="row">
                    <div class="col" style="color:white;padding:0px;margin-top: 5vmin;">
                        <img src="./img/1101/key.png" class="img-fluid">
                    </div>
                </div>
                <div class="row">
                    <div class="col" style="border:1px #fff solid;color:white;margin-top: 3vmin;font-size: 4vmin;" id="keyword"></div>
                </div>
                <div class="row" style="margin-top: 3vmin;" id="people">
                    <div class="col-4" style="padding: 0px;">
                        <img src="./img/1101/man.png" style="height:20vmin" id="people_img">
                    </div>
                    <div class="col-8" style="padding: 0px;">
                        <img src="./img/1101/ad.png" style="height:20vmin">
                    </div>
                </div>

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
                <iframe src="https://www.youtube.com/embed/CnT1IniYwIY?rel=0&autoplay=1" frameborder="0"
                    allowfullscreen allow="autoplay"></iframe>
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
        <?php include("./general/cf_title.php");?>
    </div>
    <script>
        $(function () {
            $(".udnbtn").click(function () {
                $("#ana_btn").attr("src", "./img/內頁/寶藏-關.png");
                $([document.documentElement, document.body]).animate({
                    scrollTop: $("#art_content").offset().top
                }, 1000);
                var url = $(this).attr("if_url");
                var ar_num = $(this).attr('file_path');
                $(".append_row").remove();
                $.getJSON('https://events.clickforce.com.tw/digiasia2018/UDN_S/one.json', function (data) {
                // $.getJSON('http://localhost:8889/digiasia2018/UDN_S/one.json', function (data) {
                    // console.log(data[ar_num].topic_odd);
                    // var mapping = $.getJSON(
                    //     'http://localhost:8889/digiasia2018/UDN_S/mapping_key.json',
                    //     function (mapp) {
                    //         // console.log(JSON.stringify(mapp));

                    //         return JSON.stringify(mapp.key);
                    //     })
                    
                    var mapping_key;
                    var mapping_val;
                    $.ajax({
                        url: 'https://events.clickforce.com.tw/digiasia2018/UDN_S/mapping_key.json',
                        // url: 'http://localhost:8889/digiasia2018/UDN_S/mapping_key.json',
                        type: 'GET',
                        async: false,
                        error: function (xhr) {
                            console.log('Ajax request key error');
                        },
                        success: function (data) {
                            mapping_key = data.key;
                        }
                    });
                    $.ajax({
                        // url: 'http://localhost:8889/digiasia2018/UDN_S/mapping_val.json',
                        url: 'https://events.clickforce.com.tw/digiasia2018/UDN_S/mapping_val.json',
                        type: 'GET',
                        async: false,
                        error: function (xhr) {
                            console.log('Ajax request val error');
                        },
                        success: function (data) {
                            mapping_val = data.val;
                        }
                    });




                    $("#content").text("");
                    // $("#content").append('<iframe src="https://events.clickforce.com.tw/digiasia2018/test.php?url=' + url +'" style="width:100%;height:100%" frameBorder="0">');
                    $("#content").append('<iframe id="content_if" src="'+ url +'" style="width: 1px; min-width: 100%;*width: 100%;" frameBorder="0" scrolling="no">');
                    console.log( "height " + $("#content").css('height'));
                    console.log( "width " + $("#content").css('width'));
                    var if_h = $("#content").css('height');
                    if_h = parseInt(if_h.replace("px",""))-20;
                    var if_w = $("#content").css('width');
                    if_w = if_w.replace("px","");
                    $("#content_if").attr("width",if_w-10);
                    $("#content_if").attr("height",if_h);


                    $("#keyword").css('display', 'none');
                    $("#keyword").text("");
                    $("#keyword").text(data[ar_num].keywords);
                    opacityset('content', 0);


                    for (var key in data[ar_num].topic_odd) {

                        var index;
                        //找出人群陣列的index
                        for (var x = 0; x < mapping_key.length; x++) {
                            if (key == mapping_key[x]) {
                                index = x;
                            }
                        }

                        // console.log(mapping_val[index]);
                        console.log($("#people_img").css('height'))

                        var s ='<div class="row append_row"style="margin-top: 3vmin;display:none"id="people"><div class="col-4" style="padding: 0px;max-width: 29%;"><p class="cf_key_p">'+key+'</p></div><div class="col-3" style="padding: 0px;max-width: 21%;margin-left: 4vmin;"><p class="cf_key_p">'+mapping_val[index][0]+'</p></div><div class="col-3 cf_key_div"><p class="cf_key_p">'+mapping_val[index][1]+'</p></div><div class="col-3 cf_key_div"><p class="cf_key_p">'+mapping_val[index][2]+'</p></div></div>'
                          
                        $(s).insertAfter("#people");
                    }


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
                CHanalysis();
                $([document.documentElement, document.body]).animate({
                    scrollTop: $("#gold_an").offset().top,
                }, 1000);
                setTimeout(() => {
                    $("#ana_btn").attr("src", "./img/內頁/寶藏-開.png");
                    $("#keyword_block").css('display', 'block');
                    $(".append_row").css('display', 'flex');

                    $("#keyword").css('display', 'block');
                    opacityset('keyword', 0);
                }, 500);
            })
        })
    </script>
</body>

</html>