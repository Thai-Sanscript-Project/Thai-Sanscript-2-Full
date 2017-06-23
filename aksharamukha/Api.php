<?php

include "./diCrunch/swap.php";
include "transliterate.php";
//error_reporting(E_ERROR | E_PARSE);
$text = filter_input(INPUT_POST, "text");

$text = "အနိရောဓမ် အနုတ္ပာဒမ် အနုစ္ဆေဒမ် အၑာၑွတမ် ၊ အနေကာရ္ထမ် အနာနာရ္ထမ် အနာဂမမ် အနိရ္ဂမမ် ။  ယး ပြတီတျသမုတ္ပာဒံ ပြပဉ္စောပၑမံ ၑိဝမ် ၊";  

echo transliterate($text,'burmese','unicode');
