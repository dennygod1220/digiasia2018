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
        p{
            font-size:4vmin;
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
    </style>
    <script>
        $(function () {
            //讓那該死的按鈕可以漂亮點
            var menu_H = $("#menu").css("height");            
            var menu_H_num = parseInt(menu_H.replace('px', ''));
            $("#iconF").css('right', menu_H_num - 10 + 5 + 5);
            $("#iconF").css('top', 5);
            $("#iconY").css('top', 5);
        })
    </script>
</head>

<body style="background-color:black">
    <div class="row">
        <a href="./index.php">
            <img src="./img/MENU_noimg.png" class="img-fluid" id="menu">
        </a>
        <img src="./img/index/facebook (1).png" class="img-fluid" id="iconF" style="position: absolute;right: 50px;top: 8px;width: 13vmin;">
        <img src="./img/index/youtube (2).png" class="img-fluid" id="iconY" style="position: absolute;right: 5px;top: 8px;width: 13vmin;">

    </div>
    <div class="container-fluid">
        <div class="row" style="height:25px;"></div>
        <div class="row">
            <div class="col-5"></div>
            <div class="col-2">
                <img src="./img/內頁/金幣.png" class="img-fluid">
            </div>
            <div class="col-5"></div>
        </div>
        <div class="row" style="text-align:center;margin-top:5px">
            <div class="col">
                <h4 style="color:white">語意分析說明</h4>
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

        <div class="row" style="text-align:center;margin-top:15px">
            <div class="col">
                <img src="./img/內頁/START.gif" style="width: 50px;" class="img-fluid">
            </div>
        </div>

        <div class="card-header">
            測試連結區域
        </div>
        <div class="card" style="height: 300px;overflow-y: scroll;background-color:rgba(1,1,1,0);border: 1px white solid;">

            <div class="card-body" style="background-color:rgba(1,1,1,0);">
                <ul class="list-group list-group-flush" id="USA_V">
                    <?php
                        $json_file = 'UDN_S/*.json';
                        $file_ar = glob($json_file);
                        foreach($file_ar as $val){
                            $url_decode = urldecode($val);
                            $url_s1 = substr_replace($url_decode,"",0,6);
                            $url = substr_replace($url_s1,"",strpos($url_s1,".json"),5);
                            echo "<div class='btn btn-outline-success udnbtn' style='overflow: hidden;color:white'>".$url."</div>";
                        }
                    ?>

                </ul>
            </div>
        </div>

        <div class="row" style="height:100px;"></div>
        <div class="card-header">
            文章內容區域
        </div>
        <div class="card" style="height: 300px;overflow-y: scroll;background-color:rgba(1,1,1,0);">

            <div class="card-body" style="background-color:rgba(1,1,1,0);">
                <ul class="list-group list-group-flush" id="content" style="color:white">

                </ul>
            </div>
        </div>
        <div class="row" style="height:100px;"></div>
        <div class="card-header">
            關鍵字區域
        </div>
        <div class="card" style="height: 300px;overflow-y: scroll; background-color:rgba(1,1,1,0);">

            <div class="card-body" style="background-color:rgba(1,1,1,0);">
                <ul class="list-group list-group-flush" id="keyword" style="color:white">

                </ul>
            </div>
        </div>



    </div>
    <script>
        $(function () {
            $(".udnbtn").click(function () {
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
        })
    </script>
</body>

</html>