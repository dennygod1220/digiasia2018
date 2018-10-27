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
        * {
            padding: 0px;
        }

        body {
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
    </style>
    <script src="./general/menuicon.js"></script>

</head>

<body style="background-color:black">
    <?
        include './general/menu.php'
    ?>
    <div class="container-fluid">

        <? include './general/gold_icon.php' ?>



        <div class="card" style="height: 300px;overflow-y: scroll;background-color:rgba(1,1,1,0);border: 1px white solid;">

            <div class="card-body" style='background-color:rgba(1,1,1,0);'>
                <ul class="list-group list-group-flush" id="USA_V">
                    <?php
                        $json_file = 'NYT_S/*.json';
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
        <div class="card" style="height: 300px;overflow-y: scroll;background-color:rgba(1,1,1,0);">

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

                $.getJSON('http://localhost:8888/digiasia2018/NYT_S/' + url + '.json', function (data) {
                    $("#content").text = "";
                    var b = '';
                    for (var val in data.content) {
                        b = b + data.content[val];
                    }

                    $("#content").text(b);
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