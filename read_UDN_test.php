<?php 

$file = file_get_contents('UDN_S/one.json');
$json = json_decode($file);
echo count($json);
var_dump($json[0]);

?>