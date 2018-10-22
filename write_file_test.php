<?php

//要建立的檔案
$TxtFileName = "Demo.txt";
//以讀寫方式打寫指定檔案，如果檔案不存則建立
if (($TxtRes = fopen($TxtFileName, "w ")) === false) {
    echo ("建立可寫檔案：" . $TxtFileName . "失敗");
    exit();
}
echo ("建立可寫檔案" . $TxtFileName . "成功！</br>");


 //要 寫進檔案的內容
$StrConents = "FUCK";
if (!fwrite($TxtRes, $StrConents)) { //將資訊寫入檔案
    echo ("嘗試向檔案" . $TxtFileName . "寫入" . $StrConents . "失敗！");
    fclose($TxtRes);
    exit();
}
echo ("嘗試向檔案" . $TxtFileName . "寫入" . $StrConents . "成功！");
fclose($TxtRes); //關閉指標

?>