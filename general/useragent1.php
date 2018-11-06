<?php

//Detect special conditions devices
$iPod    = stripos($_SERVER['HTTP_USER_AGENT'],"iPod");
$iPhone  = stripos($_SERVER['HTTP_USER_AGENT'],"iPhone");
$iPad    = stripos($_SERVER['HTTP_USER_AGENT'],"iPad");
$Android = stripos($_SERVER['HTTP_USER_AGENT'],"Android");
$webOS   = stripos($_SERVER['HTTP_USER_AGENT'],"webOS");

//do something with this information
if( $iPod || $iPhone ){
    
    //browser reported as an iPhone/iPod touch -- do something here
    echo  "$('#content').css({'-webkit-overflow-scrolling': 'touch','overflow-y': 'scroll'})";
}else if($iPad){
    //browser reported as an iPad -- do something here
}else if($Android){
    //browser reported as an Android device -- do something here
}else if($webOS){
    //browser reported as a webOS device -- do something here
}

?>