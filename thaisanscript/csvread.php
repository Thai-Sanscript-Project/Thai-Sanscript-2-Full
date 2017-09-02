<?php

require_once('./include_1.php');

use ThaiSanskrit\ThaiSanscriptAPI;

$thaiSanscriptAPI = new ThaiSanscriptAPI();
if (($handle = fopen("test.csv", "r")) !== FALSE) {
    $str = "";
    while (($data = fgetcsv($handle, 0, ",")) !== FALSE) {

        $str .= $thaiSanscriptAPI->convertThaiInform($data[0]) . "," . $data[0] . ", " . $data[1] .",".mb_strlen($data[0], 'UTF-8'). "\n";
    }
    fclose($handle);

    $fp = fopen('test_1.csv', 'w');
//    fwrite($fp, "thai,roman,count,word length \n");
    fwrite($fp, $str);
    fclose($fp);
}
