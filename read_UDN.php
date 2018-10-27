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
    </style>
    <script src="./general/menuicon.js"></script>

</head>

<body style="background-color:black">
    <?
        include './general/menu.php'
    ?>
    <div class="container-fluid">

        <? include './general/gold_icon.php' ?>

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

        <? include './general/start.php' ?>


        <div class="row" style="text-align:center;margin-top:25px">
            <div class="col">
                <h4 style="color:white;font-size: 6vmin;" id="choose_art">選擇有興趣的文章</h4>
            </div>
        </div>

        <div class="card" style="height: 70vmin;overflow-y: scroll;background-color:rgba(1,1,1,0);border: 0px white solid;margin-top: 20px;">

            <div class="card-body" style="background-color:rgba(1,1,1,0);">
                <ul class="list-group list-group-flush" id="USA_V">
                    <?php
                        $json_file = 'UDN_S/*.json';
                        $file_ar = glob($json_file);
                        foreach($file_ar as $val){
                            $url_decode = urldecode($val);
                            $url_s1 = substr_replace($url_decode,"",0,6);
                            $url = substr_replace($url_s1,"",strpos($url_s1,".json"),5);
                            echo "<div class='btn_title'>
                            <div class='udnbtn' style='height:11vmin;overflow: hidden;color:white;line-height:12vmin;margin-left: 18vmin;font-size: 4vmin;'>"
                            .$url.
                            "</div>
                            </div>";
                        }
                    ?>

                </ul>
            </div>
        </div>

        <div class="row" style="text-align:center;margin-top:25px">
            <div class="col">
                <h4 style="color:white;font-size: 6vmin;" id="art_content">內文瀏覽</h4>
            </div>
        </div>


        <div class="card" style="height: 80vmin;overflow-y: scroll;background-color:rgba(1,1,1,0);border: 0px;padding-right: 5vmin;padding-left: 5vmin;padding-top: 2vmin;">

            <div class="card-body" style="background-color:rgba(1,1,1,0);border: 1px #FFF solid;">
                <ul class="list-group list-group-flush" id="content" style="color:white">

                </ul>
            </div>
        </div>


        <div class="row" style="text-align:center;margin-top: 6vmin;">
            <div class="col">
                <img id="gold_an" src="./img/內頁/BUTTON-1.png" class="img-fluid" style="width: 45vmin;">
            </div>
        </div>


        <!-- <div class="card" style="height: 300px;overflow-y: scroll; background-color:rgba(1,1,1,0);">

            <div class="card-body" style="background-color:rgba(1,1,1,0);">
                <ul class="list-group list-group-flush" id="keyword" style="color:white">

                </ul>
            </div>
        </div> -->
        <div class="row" style="margin-top: 20px;padding-right:8vmin;padding-left:8vmin;display:none" id="anablock">
            <div class="col" style="height:60vmin;color:white" id="keyword">
                你好,嗨吃屎吧,我是誰
            </div>
        </div>
        <div class="row" style="text-align:center">
            <div class="col">
                <img id="ana_btn" src="./img/內頁/寶藏-關.png" style="width: 40vmin;" class="img-fluid">
            </div>
        </div>



    </div>
    <script>
        $(function () {
            $("#ana_btn").click(function(){

                $("#anablock").css('display','block');
            })
            $(".udnbtn").click(function () {
                $([document.documentElement, document.body]).animate({
                    scrollTop: $("#art_content").offset().top
                }, 1000);
                var url = this.innerText;
                // $.getJSON('https://events.clickforce.com.tw/digiasia2018/' + url, function (data) {

                $.getJSON('http://localhost:8888/digiasia2018/UDN_S/' + url + '.json', function (data) {
                    $("#content").text = "";
                    $("#content").text(data.content);
                    $("#keyword").text = "";
                    $("#keyword").text(data.keywords);
                    opacityset('content', 0);
                    opacityset('keyword', 0);
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

        })
    </script>
</body>

</html>