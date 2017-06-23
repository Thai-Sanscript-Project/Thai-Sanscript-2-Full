<?php
header('Content-Type: text/html; charset=utf-8');
include "./diCrunch/diCrunch_config-en.php";
include "./diCrunch/swap.php";
include "transliterate.php";
include "web_transliterater.php";
include "cook.php";

/* Initial preference and option variables */

$textareasrc = "";
$count = 0;
$textareatgt = "";
$pref[12] = "";
$pref[13] = "";

$src = "burmese";
$tgt = "unicode";
$text = filter_input(INPUT_POST, "source");

$tmp = $text;

$_SESSION['src'] = $src;
$_SESSION['tgt'] = $tgt;


/* Get user preferences */

$pref[0] = "devanagari";
$pref[1] = "thai";




include "./diCrunch/diCrunch_charsets.php";
include "./diCrunch/diCrunch_preprocess.php";

if (empty($_SESSION['src'])) {

    $_SESSION['src'] = $pref[0];
}
if (empty($_SESSION['tgt'])) {

    //echo "inside loop";
    $_SESSION['tgt'] = $pref[1];
}





cook("avagra");

cookrad("melanu");
cookrad("pchillu");
cookrad("remkhata");
cookrad("aremkhata");
cookrad("conyab");
cookrad("aconyab");
cookrad("wava");
cookrad("yayya");

cook("finalm");
cook("finala");
cook("removedia");
cook("replacesha");
cook("ri");
cook("taom");
cook("nna");
cook("ksha");
cook("knukta");
cook("oldbur");
cook("transc");
cook("mau");
cook("mtrad");
cook("vabab");
cook("level2");
cook("sanpali");
cook("disaddak");
cook("guruvisarg");
cook("vaba");
cook("stanu");
cook("spac");
cook("virem");
cook("normra");
cook("yaphala");
cook("shorta");
cook("anugna");
cook("transthai");
cook("nature");
cook("tavarga1");
cook("tasub");
cook("remshrturd");
cook("removedot");
cook("haaru");
cook("santextag");

if (empty($_POST['nature'])) {

    // Enable Tamil Trancription by default
    //$_SESSION['transc'] = 1;

    if ($_SESSION['tgt'] != "dtamil") {

        $_SESSION['removedia'] = 1;
    }

    if ($_SESSION['tgt'] == "dtamil") {

        $_SESSION['nna'] = 1;
        $_SESSION['melanu'] = 1;
    }

    if ($_SESSION['tgt'] == "telugu" || $_SESSION['tgt'] == "kannada") {

        $_SESSION['melanu'] = 2;
        $_SESSION['finalm'] = 1;
        $_SESSION['removedot'] = 1;
    }

    if ($_SESSION['tgt'] == "urdu") {

        $_SESSION['melanu'] = 2;
    }

    if ($_SESSION['tgt'] == "malayalam") {

        $_SESSION['finalm'] = 1;
        $_SESSION['melanu'] = 1;
        $_SESSION['removedot'] = 1;
    }

    if ($_SESSION['tgt'] == "bengali") {

        $_SESSION['conyab'] = 1;
        $_SESSION['vabab'] = 1;
    }

    if ($_SESSION['tgt'] == "oriya") {

        $_SESSION['yayya'] = 1;
        $_SESSION['wava'] = 1;
    }

    if ($_SESSION['tgt'] == "assamese") {

        $_SESSION['aconyab'] = 1;
    }
}
$text = transliterate($text, $_SESSION['src'], $_SESSION['tgt']); // Transliterate the Inputbox Text
$ssrc = $_SESSION['src'];
$ttgt = $_SESSION['tgt'];
echo $text;
