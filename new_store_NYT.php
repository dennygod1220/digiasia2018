<?php

set_time_limit(0);
$file = file_get_contents('http://35.234.18.81/urlsinprocessen');
//不知道為啥 沒有加參數 抓不到 CADATA中的東西
$json = json_encode($file);
$decode = json_decode($json, true);

var_dump($decode);

    $TxtFileName ="NYT_S/one.json";

    //以讀寫方式打寫指定檔案，如果檔案不存則建立
    if (($TxtRes = fopen($TxtFileName, "w ")) === false) {
        echo ("建立可寫檔案：" . $TxtFileName . "失敗 || " .$decode["channel"]["item"][$i]["link"] ."\r\n" );
        exit();
    }
    // echo ("建立可寫檔案" . $TxtFileName . "成功！</br>");

    //要 寫進檔案的內容
    if (!fwrite($TxtRes, $decode)) { 
        //將資訊寫入檔案
        echo ("嘗試向檔案" . $TxtFileName . "寫入" . $StrConents . "失敗！|| " );
        fclose($TxtRes);
        exit();
    }
    // echo ("嘗試向檔案" . $TxtFileName . "寫入" . $StrConents . "成功！");
    fclose($TxtRes); //關閉指標

?>