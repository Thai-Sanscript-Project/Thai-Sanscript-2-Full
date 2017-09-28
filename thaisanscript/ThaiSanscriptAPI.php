<?php

namespace ThaiSanskrit;

use ThaiSanskrit\ThaiSanscriptRule;
use ThaiSanskrit\ThaiSanscriptInformRule;

class ThaiSanscriptAPI {
    /* @var $thaiInformRule ThaiSanskrit\ThaiSanscriptInformRule */

    public $thaiInformRule;
    /* @var $thaiRule ThaiSanskrit\ThaiSanscriptRule */
    public $thaiRule;
    private $spaceDilimiter = '@';
    private $mode = 2;

    public function __construct($mode = '') {
        mb_internal_encoding("UTF-8");
        $this->mode = $mode ? $mode : $this->mode;
        $this->thaiRule = new ThaiSanscriptRule();
        $this->thaiInformRule = new ThaiSanscriptInformRule();
    }

    public function prepareTxt($txt) {
        $txt = preg_replace('/\x20+/', $this->spaceDilimiter, $txt);
        $txt = strtolower($txt);
        return preg_replace('/\x20+/', $this->spaceDilimiter, $txt);
    }

    public function line_split($txt) {
        $list = array_map(function ($line) {
            return explode($this->spaceDilimiter, $line);
        }, preg_split('/\r\n|\r|\n/', $txt)
        );
        return $list;
    }

    public function convertThaiInform($txt,$lang="sans") {
        return $this->thaiInformRule->convert($txt,$lang);
    }

    public function convertThai($txt,$lang="sans") {
        return $this->thaiRule->convert($txt,$lang);
    }

//    public function jsonOutput($txt) {
//        $txt = $this->prepareTxt($txt);
//        $output = array();
//        if ($this->mode == 1) {
//            $output = $this->convertSyllableTxt($txt);
//        } elseif ($this->mode == 2) {
//            $output = $this->convertLineTxt($txt);
//        } elseif ($this->mode == 3) {
//            $output = $this->convertAllTxt($txt);
//        } 
//        return json_encode($output);
//    }
    public function jsonOutput($txt,$lang) {
        $txt = $this->prepareTxt($txt);
        $output = $this->convertLineTxt($txt,$lang);
        return json_encode($output);
    }

    public function convertAllTxt($txt) {

        $output = array();
        $output[0] = $this->line_split($this->convertThaiInform($txt));
        $output[1] = $this->line_split($this->convertThai($txt));
        return $output;
    }

    public function convertLineTxt($txt,$lang) {

        $output = array();
        $output[0] = array();
        $output[1] = array();
        $txtPool = preg_split('/\r\n|\r|\n/', $txt);
        foreach ($txtPool as $i => $line) {
            $output[0][$i] = explode($this->spaceDilimiter, $this->convertThaiInform($line,$lang));
            $output[1][$i] = explode($this->spaceDilimiter, $this->convertThai($line,$lang));
        }
        return $output;
    }

    public function convertSyllableTxt($txt) {

        $output = array();
        $output[0] = array();
        $output[1] = array();
        $txtPool = $this->line_split($txt);
        foreach ($txtPool as $i => $line) {
            foreach ($line as $j => $syllable) {
                $output[0][$i][$j] = $this->convertThaiInform($syllable);
                $output[1][$i][$j] = $this->convertThai($syllable);
            }
        }

        return $output;
    }

    public function transliterationTracking($romanize, $mode = 1) {
        if ($mode == 1) {
            $real = $this->thaiRule->convert($romanize,'sans');
            $track = $this->thaiRule->convertTrackMode($romanize);
        } else {
            $real = $this->thaiInformRule->convert($romanize);
            $track = $this->thaiInformRule->convertTrackMode($romanize);
        }
        $check_concurrent = $real == $track;
        if ($check_concurrent) {
            return $track;
        } else {
            echo 'transliterationTracking not concurrent';
        }
        return "";
    }

    // desperate function
    public function transliterationToArray($romanize, $devanagari) {

        $romanize = mb_strtolower($romanize, "UTF-8");
        $returnArray = array();
        $listRomanize = preg_split('/\r\n|\r|\n/', $romanize);
        foreach ($listRomanize as $key => $line) {
            $syllableRomanize = explode(" ", $line);
            $syllableThai = array();
            $syllableThaiInform = array();

            foreach ($syllableRomanize as $i => $syllable) {
                $syllableThai[$i] = $this->thaiRule->convert($syllable);
                $syllableThaiInform[$i] = $this->thaiInformRule->convert($syllable);
            }
            $returnArray['0'][$key] = $syllableRomanize;
            $returnArray['1'][$key] = $syllableThai;
            $returnArray['2'][$key] = $syllableThaiInform;
        }
        if (trim($devanagari) != "") {
            $listDevanagari = preg_split('/\r\n|\r|\n/', $devanagari);
            foreach ($listDevanagari as $key => $line) {
                $syllableDevanagari = explode(" ", $line);
                $returnArray['3'][$key] = $syllableDevanagari;
            }
        }
        return $returnArray;
    }

}
