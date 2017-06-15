<?php

include "./diCrunch/swap.php";
include "transliterate.php";
error_reporting(E_ERROR | E_PARSE);
$text = filter_input(INPUT_POST, "text");

echo transliterate($text,'burmese','unicode');
