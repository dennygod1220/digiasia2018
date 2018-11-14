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
    <title>DIGIASIA 2018 語意分析</title>

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
                <h4 style="color:white;font-size: 6vmin;">Semantic analysis</h4>
            </div>
        </div>
        <div class="row" style="text-align:center;margin-top: 5px;">
            <div class="col">
                <p style="color:white;">Semantic analysis focuses on the key </p>
            </div>
        </div>
        <div class="row" style="text-align:center;">
            <div class="col">
                <p style="color:white">messages in the article. It can grasp</p>
            </div>
        </div>
        <div class="row" style="text-align:center;">
            <div class="col">
                <p style="color:white">market trends and help understand </p>
            </div>
        </div>
        <div class="row" style="text-align:center;">
            <div class="col">
                <p style="color:white">consumer needs. </p>
            </div>
        </div>


        <?php  include('./general/start.php'); ?>

        <!-- 按鈕標頭。 -->
        <div class="row" style="text-align:center;margin-top:25px">
            <div class="col">
                <h4 style="color:white;font-size: 6vmin;" id="choose_art">Choose your article</h4>
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
                        $file = file_get_contents('NYT_S/one.json');
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
                <h4 style="color:white;font-size: 6vmin;" id="art_content">Article browsing</h4>
            </div>
        </div>

        <!-- 文章內文顯示區 -->
        <div class="card" style="height: 80vmin;overflow-y: scroll;background-color:rgba(1,1,1,0);border: 0px;padding-right: 5vmin;padding-left: 5vmin;padding-top: 2vmin;margin-top: 5vmin;">

            <div class="card-body" id="content" style="color:white;padding:2vmin;height:100%;background-color:rgba(1,1,1,0);border: 1px #FFF solid;overflow-y: scroll;">

            </div>
        </div>

        <!-- 金幣按鈕_點擊觀看語意分析 -->
        <div class="row" style="text-align:center;margin-top: 10vmin;">
            <div class="col">
                <img id="gold_an" src="./img/1102_EN/內頁/clickhere_1.png" class="img-fluid" style="width: 26vmin;">
            </div>
        </div>
        <!-- 關鍵字顯示區 -->
        <div class="row" style="display:none;margin: 20px 2vmin 0px 2vmin;padding-right:3vmin;padding-left:3vmin;height: 80vmin;"
            id="anablock">
            <div class="container-fluid" id="keyword_block">
                <div class="row">
                    <div class="col" style="color:white;padding:0px;margin-top: 5vmin;">
                        <img src="./img/KEYWORDS.png" class="img-fluid">
                    </div>
                </div>
                <div class="row">
                    <div class="col" style="border:1px #fff solid;color:white;margin-top: 3vmin;font-size: 5vmin;word-break: break-all;"
                        id="keyword"></div>
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
                <p style="color:white;font-size:4vmin">Discover business opportunities</p>
            </div>
        </div>
        <!-- 隨身影音 -->
        <div class="row" style=" margin-top: 8vmin;">
            <div class="col" style="text-align:center">
                <ins class="clickforceads" style="display:inline-block;width:301px;height:251px;" data-ad-zone="8669"></ins>
                <script async type="text/javascript" src="//cdn.doublemax.net/js/init.js"></script>
            </div>
        </div>

        <!-- 同場加映 -->
        <div class="row" style="text-align:center;margin-top: 5vmin;">
            <div class="col">
                <h4 style="color:white">Adding in the same field</h4>
                <h4 style="color:white">Telecommunications data</h4>
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
                <h4 style="color:white">Company Profile</h4>
                <p class="CompanyProfile">Domain Marketing is committed to the development of digital media network,</p>
                <p class="CompanyProfile">Focus on the dynamic development of digital networks,</p>
                <p class="CompanyProfile">Insight into media trends and consumer behavior analysis.</p>
                <p class="CompanyProfile">Internationalized DSP/SSP/DMP advertising system,</p>
                <p class="CompanyProfile">Through the AI optimization engine Holmes digital advertising prophecy core,</p>
                <p class="CompanyProfile">Improve the automatic advertising optimization technology.</p>
                <p class="CompanyProfile">Provide the best integrated marketing solution for advertiser digital media</p>
            </div>
        </div>

        <!-- 公司標語 -->
        <div class="row" style="margin-top:10vmin;">
            <div class="col" style="padding: 0px;background-color: black;color: white;text-align: center;">
                Select CLICKFORCE to achieve the set goals
            </div>
        </div>
        <div class="row" style="margin-top:-1px;background-color: black;">
            <div class="col" style="padding: 0px;">
                <div class="row" style="padding: 0px;">
                    <div class="col-1" style="padding: 0px;">
                        <img src="./img/內頁/telephone.png" alt="" class="img-fluid">
                    </div>
                    <div class="col-11" style="color:white;padding: 4px;">
                        <p style="font-size: 3vmin;">
                            02-2719-8500(代表線)
                        </p>
                    </div>

                </div>
            </div>
            <div class="col" style="padding: 0px;">
                <div class="row" style="padding: 0px;">
                    <div class="col-1" style="padding: 0px;">
                        <img src="./img/內頁/black-back-closed-envelope-shape.png" class="img-fluid">
                    </div>
                    <div class="col-11" style="color:white;    padding: 4px;">
                        <p style="font-size: 3vmin;">
                            service@clickforce.com.tw
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <script>
        $(function () {
            $(".udnbtn").click(function () {
                $("#anablock").css('display', 'none');
                $("#ana_btn").attr("src", "./img/內頁/寶藏-關.png");
                $([document.documentElement, document.body]).animate({
                    scrollTop: $("#art_content").offset().top
                }, 1000);
                var url = $(this).attr("if_url");
                var ar_num = $(this).attr('file_path');
                $(".append_row").remove();
                $.getJSON('https://events.clickforce.com.tw/digiasia2018/NYT_S/one.json', function (
                    data) {
                    // $.getJSON('http://localhost:8888/digiasia2018/NYT_S/one.json', function (data) {

                    //顯示內文
                    $("#content").text("");
                    var content = '';
                    for (var id in data[ar_num].content) {
                        content = content + data[ar_num].content[id];
                    }
                    $("#content").text(content);

                    $("#keyword").css('display', 'none');
                    $("#keyword").text("");
                    $("#keyword").text(data[ar_num].keywords);
                });


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
                $("#gold_an").attr('src', './img/1102_EN/內頁/clickhere_2.png');
            });
            $("#gold_an").on('touchend', function () {
                $("#gold_an").attr('src', './img/1102_EN/內頁/clickhere_1.png');
            })
            $("#gold_an").click(function () {
                ENanalysis();
                $([document.documentElement, document.body]).animate({
                    scrollTop: $("#gold_an").offset().top,
                }, 1000);
                setTimeout(() => {
                    $("#ana_btn").attr("src", "./img/內頁/寶藏-開.png");
                    $("#anablock").css('display', 'block');
                    $(".append_row").css('display', 'flex');

                    $("#keyword").css('display', 'block');
                }, 500);
            })
        })
    </script>
</body>

</html>