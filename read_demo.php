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
</head>

<body>

    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-light bg-light" style="position: fixed;margin-top: 0px;width: 100%;z-index: 999999999999999;">
            <a class="navbar-brand" href="#">首頁</a>
        </nav>
        <div style="height:100px"></div>

        <div class="card-header">
            測試連結區域
        </div>
        <div class="card" style="height: 300px;overflow-y: scroll;">

            <div class="card-body">
                <ul class="list-group list-group-flush" id="USA_V">
                    <?php
                        $json_file = 'UDN_S/*.json';
                        $file_ar = glob($json_file);
                        foreach($file_ar as $val){
                            echo "<div class='btn btn-outline-success udnbtn'>".urldecode($val)."</div>";
                        }
                    ?>

                </ul>
            </div>
        </div>

        <div class="row" style="height:100px;"></div>
        <div class="card-header">
            文章內容區域
        </div>
        <div class="card" style="height: 300px;overflow-y: scroll;">

            <div class="card-body">
                <ul class="list-group list-group-flush" id="content">

                </ul>
            </div>
        </div>
        <div class="row" style="height:100px;"></div>
        <div class="card-header">
            關鍵字區域
        </div>
        <div class="card" style="height: 300px;overflow-y: scroll;">

            <div class="card-body">
                <ul class="list-group list-group-flush" id="keyword">

                </ul>
            </div>
        </div>



    </div>
<script>
        $(function () {
            $(".udnbtn").click(function () {
                var url = this.innerText;
                $.getJSON('http://localhost:8888/digiasia2018/' + url, function (data) {
                    $("#content").text = "";
                    $("#content").text(data.content);
                    $("#keyword").text = "";
                    $("#keyword").text(data.keywords);
                    opacityset('content', 0);
                    opacityset('keyword',0);
                })
            });

            function opacityset(id, num) {

                if (num < 1) {
                    $("#" + id).css('opacity', num);
                    setTimeout(() => {
                        opacityset(id,num+0.1);                        
                    }, 300);
                }
            }
        })
    </script>
</body>

</html>