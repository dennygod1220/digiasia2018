<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>test</h1>

    <div>
        <?php
            $file = file_get_contents('https://www.voanews.com/api/zq$omekvi_');
            $xml = simplexml_load_string($file);
            $json = json_encode($xml);
            $decode = json_decode($json, true);


            foreach ($decode["channel"]["item"] as $value) {
                //判斷是否存在
                if(isset($value["title"])){
                    echo $value["title"] . "<br>";
                }
            }
        ?>

    </div>

    <hr>
    <?php
        echo count($decode['channel']['item']);
        var_dump($decode['channel']['item'][0]);
    ?>
    </body>

</html>