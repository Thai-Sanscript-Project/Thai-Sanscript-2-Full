<?php

if (!defined("BASEPATH")) {
    exit("No direct script access allowed");
}

require_once('thaisanscript/include.php');

use ThaiSanskrit\ThaiSanscriptAPI;
use Sanskrit\Sanscript;

class Thaisans_adapter {
    /*
     * @var $thaiSanscriptAPI ThaiSanskrit\ThaiSanscriptAPI
     */

    public $thaiSanscriptAPI;
    public $sanscript;

    public function __construct() {
        $this->CI = & get_instance();
        $this->thaiSanscriptAPI = new ThaiSanscriptAPI();
        $this->sanscript = new Sanscript();
    }

    public function jsonOutput($txt) {
        return $this->thaiSanscriptAPI->jsonOutput($txt);
    }

    public function sanscript($txt, $from = "devanagari", $to = "iast") {
        return $this->sanscript->t($txt, $from, $to);
    }

    public function txtLineToArray($txt) {
        $txtPool =  preg_split('/\r\n|\r|\n/', $txt);
        $output =array();
        foreach ($txtPool as $i => $line) {
            $output[$i] = explode(" ", $line);
        }
        return $output;
    }

    public function toThai($txt) {
        $txt = $this->thaiSanscriptAPI->prepareTxt($txt);
        return $this->thaiSanscriptAPI->convertLineTxt($txt);
    }

//bengali
//devanagari
//gujarati
//gurmukhi
//kannada
//malayalam
//oriya
//tamil
//telugu
//and the following Roman schemes:
//
//hk (Harvard-Kyoto)
//iast (International Alphabet of Sanskrit Transliteration)
//itrans (ITRANS)
//itrans_dravidian (ITRANS with support for Dravidian short "e" and "o")
//kolkata (National Library at Kolkata)
//slp1 (Sanskrit Library Phonetic Basic)
//velthuis (Velthuis)
//wx (WX)
}
