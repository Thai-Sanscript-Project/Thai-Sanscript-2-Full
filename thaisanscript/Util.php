<?php

namespace ThaiSanskrit;

use ThaiSanskrit\ThaiSanscript;

class Util {

    public $thaimapper;
    public $consonantThai = 'ก ข ค ฆ ง จ ฉ ช ฌ ญ ฏ ฐ ฑ ฒ ณ ต ถ ท ธ น ป ผ พ ภ ม ย ร ล ว ศ ษ ส ห ฬ อ';
    public $consonantLao = 'ກ ຂ ຄ ຆ ງ ຈ ຉ ຊ ຌ ຎ ຏ ຐ ຑ ຒ ຓ ຕ ຖ ທ ຘ ນ ປ ຜ ພ ຠ ມ ຍ ຣ ລ ວ ຨ ຩ ສ ຫ ຬ ອ';
    public $thaiSymbol = "๐ ๑ ๒ ๓ ๔ ๕ ๖ ๗ ๘ ๙ ' ฯ ๚";
    public $laoSymbol = "໐ ໑ ໒ ໓ ໔ ໕ ໖ ໗ ໘ ໙ ' ฯ ฯฯ";
    public $chandrabinduThai = "ัํ";
    public $chandrabinduLao = "ັ";
    public $anusvaraThai = "ํ";
    public $anusvaraLao = "ໍ";
    public $viramaThai = "ฺ";
    public $viramaLao = "຺";
//    public $viramaLao =  "ຯຮ";

    public $cancleMarkLao = "໌";
    public $cancleMarkThai = "์";
    public $vowelThai = "ั ะ า ิ ี ุ ู โ ไ เ ฤๅ ฦๅ ฤ ฦ";
    public $vowelLao = "ັ ະ າ ິ ີ ຸ ູ ໂ ໄ ເ ຤າ ຦າ ຤ ຦";

    public function __construct($inForm = FALSE) {
        $this->thaimapper = new ThaiSanscript($inForm);
        $this->consonantThai = preg_split("/[\s,]+/", $this->consonantThai);
        $this->consonantLao = preg_split("/[\s,]+/", $this->consonantLao);
        $this->laoSymbol = preg_split("/[\s,]+/", $this->laoSymbol);
        $this->thaiSymbol = preg_split("/[\s,]+/", $this->thaiSymbol);

        $this->vowelThai = preg_split("/[\s,]+/", $this->vowelThai);
        $this->vowelLao = preg_split("/[\s,]+/", $this->vowelLao);
    }

    /*     * *******************    util part  ************************ */

    public function convertThaiToLao($txt) {
        $txt = str_replace($this->chandrabinduThai, $this->chandrabinduLao, $txt);
        $txt = str_replace($this->cancleMarkThai, $this->cancleMarkLao, $txt);
        $txt = str_replace($this->anusvaraThai, $this->anusvaraLao, $txt);
        $txt = str_replace($this->viramaThai, $this->viramaLao, $txt);
        $txt = str_replace($this->thaiSymbol, $this->laoSymbol, $txt);
        $txt = str_replace($this->consonantThai, $this->consonantLao, $txt);
        $txt = str_replace($this->vowelThai, $this->vowelLao, $txt);

        return $txt;
    }

    public function swapArray($swapCondition, $charList, $index) {

        if ($swapCondition && isset($charList[1])) {
//        if ($swapCondition && count($charList) > 1) {
            $tmp = $charList[$index];
            $charList[$index] = $charList[$index - 1];
            $charList[$index - 1] = $tmp;
        }
        return $charList;
    }

    public function Mapper($mapping, $romanize) {
        foreach ($mapping as $key => $value) {
            $romanize = str_replace($key, $value, $romanize);
        }
        return $romanize;
    }

    /*     * *******************    check part  ************************ */

    public function isThaiVowel($strChar) {
        $mapping = $this->thaimapper->mappingIsThaiVowel();
        return isset($mapping[$strChar]);
    }

    public function isThaiConsonant($strChar) {
        $mapping = $this->thaimapper->mappingIsThaiConsonant();
        return isset($mapping[$strChar]);
    }

    public function isThaiCharacter($strChar) {
        return $this->isThaiConsonant($strChar) || $this->isThaiVowel($strChar);
    }

    /*     * *******************    convertList  ************************ */

    public function convertListTostring($charList) {
        return implode("", $charList);
    }

    public function charList($thaiChar) {
        return preg_split('//u', $thaiChar, -1, PREG_SPLIT_NO_EMPTY);
    }

    /*     * *******************    convert ************************ */

    public function convertAvagarahaRemove($txt) {
        return str_replace("'", "", $txt);
    }

    public function convertRomanChandrabinduToSingle($txt) {
        return str_replace($this->thaimapper->chandrabinduRoman, $this->thaimapper->chandrabinduRomanSingle, $txt);
    }

    public function convertNumber($txt) {
        return str_replace($this->thaimapper->numRm, $this->thaimapper->numTh, $txt);
    }

    public function convertRomanizeSingleConsonant($romanize) {
        return str_replace($this->thaimapper->singleConsonantRm, $this->thaimapper->singleConsonantTh, $romanize);
    }

    public function convertRomanizeMixConsonant($romanize) {
        return str_replace($this->thaimapper->mixConsonantRm, $this->thaimapper->mixConsonantTh, $romanize);
    }

    public function convertRomanizeSingleVowel($romanize) {
        return str_replace($this->thaimapper->singleVowelRm, $this->thaimapper->singleVowelTh, $romanize);
    }

    public function convertRomanizeMixVowel($romanize, $lang = "sans") {
        if ($lang == "pali") {
            $this->thaimapper->setLang("pali");
        }
        return str_replace($this->thaimapper->mixVowelRm, $this->thaimapper->mixVowelTh, $romanize);
    }

    public function convertAO($txt) {
        return str_replace("ัโ", "ะโ", $txt);
    }

    public function convertAE($txt) {
        return str_replace("ัเ", "ะเ", $txt);
    }

    public function convertThaiVowelPrefix($thaiChar) {
        $thaiChar = "     " . $thaiChar; // before space 4 after space 6  reserve  for condition
        $charList = $this->charList($thaiChar);
        foreach ($charList as $i => $char) {
            $check = $char === "เ" ||
                    $char === "โ" ||
                    $char === "ไ";
            if ($check) {
//432101234 แบบปรับรูป
// FCR
                $samyuta = ($charList[$i - 1] == "ร" || $charList[$i - 1] == "ล");
                $condition1 = $check &&
                        $this->isThaiConsonant($charList[$i - 2]) &&
//                        $charList[$i - 1] == "ร" &&
                        $samyuta &&
                        ($charList[$i - 2] != "ร" && $charList[$i - 2] != "ล") &&
                        $charList[$i - 2] != "อ" && //arogita,อะโรคิตะ,อโรคิต,
                        $charList[$i - 3] != "เ" &&
                        $charList[$i - 3] != "โ" &&
                        $charList[$i - 3] != "ไ";
//                  ยaตฺกฺรเาญฺ
//432101234 แบบคงรูป
//FCDR
                $samyutaKS = $charList[$i - 3] == "ก" && $charList[$i - 1] == "ษ";
                $condition2 = $check &&
                        $this->isThaiConsonant($charList[$i - 3]) &&
//                        $charList[$i - 1] == "ร" &&
                        ($samyuta || $samyutaKS) &&
                        ($charList[$i - 3] != "ร" && $charList[$i - 3] != "ล") &&
                        $charList[$i - 2] == "ฺ" &&
                        $charList[$i - 4] != "เ" &&
                        $charList[$i - 4] != "โ" &&
                        $charList[$i - 4] != "ไ";

                if ($condition1) {
                    $charList = $this->swapArray($check, $charList, $i);
                    $charList = $this->swapArray($check, $charList, $i - 1);
                } elseif ($condition2) {
                    $charList = $this->swapArray($check, $charList, $i);
                    $charList = $this->swapArray($check, $charList, $i - 1);
                    $charList = $this->swapArray($check, $charList, $i - 2);
                } elseif ($this->isThaiConsonant($charList[$i - 1])) {
                    $charList = $this->swapArray($check, $charList, $i);
                }
            }
        }
//        return str_replace(" ", "", $this->convertListTostring($charList));
        return trim($this->convertListTostring($charList));
    }

    public function convertThaiVowelInFist($thaiChar) {
        $thaiChar = " " . $thaiChar . " "; // before space 3 after space 6  reserve  for condition
        $mapping = $this->thaimapper->thaiVowelInFist;
        $charList = $this->charList($thaiChar);
        $s1 = $this->thaimapper->thaiVowelInFist1;
        $s2 = $this->thaimapper->thaiVowelInFist2;
//        in_array("Glenn", $people);
        if (isset($charList[0])) {

//            foreach ($mapping as $key => $value) {
//                if ($charList[0] === $key) {
//                    $charList[0] = $value;
//                }
            if (in_array($charList[0], $s1)) {
                $charList[0] = str_replace($s1, $s2, $charList[0]);
            }
            foreach ($charList as $index => $char) {
//                for ($index = 1; $index < count($charList); $index++) {
                if ($index > 0) {
                    $check1 = ($charList[$index - 1] == "อ" || !$this->isThaiConsonant($charList[$index - 1])) && in_array($char, $s1); //$char == $key;
                    $check2 = $charList[$index] != "เ" && $charList[$index] != "า"; //ยกเว้นไว้กรณี สระเอา ก่อน

                    if ($check1 && $check2) {
                        //$charList[$index] = $value;
                        $charList[$index] = str_replace($s1, $s2, $charList[$index]);
                    } elseif ($check1 && $charList[$index] == "เ" && $charList[$index + 1] != "า") {
                        //$charList[$index] = $value;
                        $charList[$index] = str_replace($s1, $s2, $charList[$index]);
                    } elseif ($check1 && $charList[$index] == "า" && $charList[$index - 1] != "เ") {
                        // $charList[$index] = $value;
                        $charList[$index] = str_replace($s1, $s2, $charList[$index]);
                    }
                }
            }
            $thaiChar = trim($this->convertListTostring($charList));
            $thaiChar = str_replace("\xE2\x80\x8D", "", $thaiChar); //Remove ZERO WIDTH JOINER
        }
//        }
        return $thaiChar;
    }

    public function convertThaiAAInFist($thaiChar) { //แปลงท้ายสุดแก้ปัญหา สระ เอา จะเหลือสระอา ดังนั้นต้องแปลงอีก
        $charList = $this->charList($thaiChar);
        foreach ($charList as $i => $char) {
//for ($index = 1; $index < count($charList); $index++) {
            if ($i > 0) {
                $check1 = !$this->isThaiConsonant($charList[$i - 1]) &&
                        $char == 'า';

                if ($check1) {
                    $charList[$i] = "อา";
                }
            }
        }
        $thaiChar = $this->convertListTostring($charList);
        $thaiChar = str_replace("\xE2\x80\x8D", "", $thaiChar); //Remove ZERO WIDTH JOINER
        return $thaiChar;
    }

}
