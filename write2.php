<?php

$file = file_get_contents('https://www.voanews.com/api/zq$omekvi_');
$xml = simplexml_load_string($file);
$json = json_encode($xml);
$decode = json_decode($json, true);
//抓取title
foreach ($decode["channel"]["item"] as $value) {
    //判斷是否存在
    if (isset($value["title"])) {
        $StrConents = $StrConents."<li class='list-group-item'><a target='_blank' href='" . $value["link"] . "' class='btn btn-outline-info btn-sm'>" . $value["title"] . "</a></li>";
    }
}

//要建立的檔案
$TxtFileName = "Demo.txt";
//以讀寫方式打寫指定檔案，如果檔案不存則建立
if (($TxtRes = fopen($TxtFileName, "w ")) === false) {
    echo ("建立可寫檔案：" . $TxtFileName . "失敗");
    exit();
}
echo ("建立可寫檔案" . $TxtFileName . "成功！</br>");

//要 寫進檔案的內容
if (!fwrite($TxtRes, $StrConents)) { //將資訊寫入檔案
    echo ("嘗試向檔案" . $TxtFileName . "寫入" . $StrConents . "失敗！");
    fclose($TxtRes);
    exit();
}
echo ("嘗試向檔案" . $TxtFileName . "寫入" . $StrConents . "成功！");
fclose($TxtRes); //關閉指標

?>