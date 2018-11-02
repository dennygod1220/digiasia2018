<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>爬蟲API</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>


    <script src="./index.js"></script>

    <style>
        * {
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
    </style>
    <script src="./general/menuicon.js"></script>
</head>

<body style="background-color:black">
    <?php
        include('./general/menu.php');
    ?>
    <div class="container-fluid">
        <div class="row" style="height:50px">
            <div class="col">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <img src="./img/index/powerwordB.png" class="img-fluid" id="pwa">
            </div>
        </div>
        <div class="row" style="height:25px"></div>
        <div class="row">
            <div class="col-3"></div>
            <div class="col-6">
                <img src="./img/index/articlemoney.png" class="img-fluid">
            </div>
            <div class="col-3"></div>
        </div>
        <div class="row" style="height:50px;"></div>
        <div class="row">
            <div class="col-2"></div>
            <div class="col-4">
                <a href="./read_UDN.php" onclick="chineseBtn()">
                    <img src="./img/index/ch_money.png" class="img-fluid">
                </a>
            </div>
            <div class="col-4">
                <a href="./read_NYT.php" onclick="englishBtn()">
                    <img src="./img/index/en_money.png" class="img-fluid">
                </a>
            </div>
            <div class="col-2"></div>
        </div>
    </div>

    <script>
        // $(function () {
        //     $("#pwa").on('touchstart', function () {
        //         $("#pwa").attr('src', './img/index/powerwordB.png');
        //     });
        //     $("#pwa").on('touchend', function () {
        //         $("#pwa").attr('src', './img/index/powerwordA.png');
        //     })
        // })
    </script>
</body>

</html>