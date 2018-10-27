<?php
set_time_limit(0);
$file = file_get_contents('https://udn.com/rssfeed/news/2/6638?ch=news');
//不知道為啥 沒有加參數 抓不到 CADATA中的東西
$xml = simplexml_load_string($file,null,LIBXML_NOCDATA);
$json = json_encode($xml);
$decode = json_decode($json, true);


//////刪除目錄下原有的檔案///////
$dir = glob('UDN_S/*.json'); //
foreach ($dir as $val) {     
    unlink($val);            
}                           //
///////////////////////////////

///////////////////////////////將xml link 取出後 呼叫儲存文章API //////////////////////////////////////////////////////////////////////
// for($i=0;$i<count($decode["channel"]["item"]);$i++){
//     if (isset($decode["channel"]["item"][$i]["title"])) {
//                     $ch = curl_init();
//                     curl_setopt($ch,CURLOPT_URL,"http://35.234.18.81/udn?url=".$decode["channel"]["item"][$i]["link"]);
//                     curl_setopt($ch,CURLOPT_HEADER,false);
//                     curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
//                     curl_setopt($ch, CURLOPT_CONNECTTIMEOUT_MS, 60); 
//                     $res = curl_exec($ch);
//                     echo "儲存: " . $decode['channel']['item'][$i]['link'] ."  ||  " .$res ."<br>";
//                     //取得http 狀態碼 
//                     $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
//                     if (curl_errno($ch) == 28) {
//                         echo "Timeout";
//                     }
//                     curl_close($ch);
//             }
// }
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

///////////////////////////////xml 解析後 呼叫關鍵字API 將response存起來 //////////////////////////////////////////////////////////////////
for($i=0;$i<count($decode["channel"]["item"]);$i++){
    if (isset($decode["channel"]["item"][$i]["title"])) {
        $ch = curl_init();
        curl_setopt($ch,CURLOPT_URL,"http://35.234.18.81/result/udn?url=".$decode["channel"]["item"][$i]["link"]);
        curl_setopt($ch,CURLOPT_HEADER,false);
        curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT_MS, 60); 
        $res = curl_exec($ch);
        //取得http 狀態碼 
        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        if (curl_errno($ch) == 28) {
            echo "Timeout";
        }
        curl_close($ch);
        $title = $decode["channel"]["item"][$i]["title"];
        
        //要建立的檔案
        $TxtFileName ="UDN_S/".$decode["channel"]["item"][$i]["title"].".json";
        //以讀寫方式打寫指定檔案，如果檔案不存則建立
        if (($TxtRes = fopen($TxtFileName, "w ")) === false) {
            echo ("建立可寫檔案：" . $TxtFileName . "失敗");
            exit();
        }
        echo ("建立可寫檔案" . $TxtFileName . "成功！</br>");

        //要 寫進檔案的內容
        if (!fwrite($TxtRes, $res)) { 
            //將資訊寫入檔案
            echo ("嘗試向檔案" . $TxtFileName . "寫入" . $StrConents . "失敗！");
            fclose($TxtRes);
            exit();
        }
        echo ("嘗試向檔案" . $TxtFileName . "寫入" . $StrConents . "成功！");
        fclose($TxtRes); //關閉指標
    }
}

// ////////////////////////////////////////////////////////////////////////////////////////////////////////////////
 

?>