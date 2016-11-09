<?php

defined('BASEPATH') OR exit('No direct script access allowed');
require_once('thaisanscript.php/src/ThaiSanscriptAPI.php');
require_once('thaisanscript.php/src/ThaiSanscript.php');
require_once('thaisanscript.php/src/ThaiSanscriptRule.php');
require_once('thaisanscript.php/src/ThaiSanscriptInformRule.php');
require_once('thaisanscript.php/src/ThaiVisargaRuleConvert.php');
require_once('thaisanscript.php/src/Util.php');

use ThaiSanskrit\ThaiSanscriptAPI;

class Api extends CI_Controller {

    public static $ROMANIZE = 0;
    public static $THAI = 1;
    public static $THAIINFORM = 2;
    public static $DEVANAGARI = 3;

    public function index() {

//        /* @var $thaiSanscriptAPI ThaiSanscriptAPI */
        $timestamp = filter_input(INPUT_POST, 'timestamp');
        $romanize = filter_input(INPUT_POST, 'sanskrit-romanize');
        $devanagari = filter_input(INPUT_POST, 'sanskrit-devanagari');
        $thaiSanscriptAPI = new ThaiSanscriptAPI();
        $line_sanskrit = $thaiSanscriptAPI->transliterationToArray($romanize, $devanagari);
        $checkbox = array();
        $romanize = array();
        $dev = array();
        $thai = array();

        if (isset($line_sanskrit[Api::$DEVANAGARI])) {
            $devanagari_id = Api::$DEVANAGARI;
            $lang_name = "เทวนาครี";
            $show = FALSE;
            $dev = $this->setLang($devanagari_id, $lang_name, $show, $line_sanskrit);
            $checkbox = $this->setCheckbox($devanagari_id, $lang_name, $show, $checkbox);
        }
        $romanize_id = Api::$ROMANIZE;
        $lang_name = "โรมาไนซ์";
        $show = TRUE;
        $romanize = $this->setLang($romanize_id, $lang_name, $show, $line_sanskrit);
        $checkbox = $this->setCheckbox($romanize_id, $lang_name, $show, $checkbox);

        $thai_id = Api::$THAI;
        $lang_name = "ไทย-ทั่วไป(แบบปรับรูป)";
        $show = TRUE;
        $thai = $this->setLang($thai_id, $lang_name, $show, $line_sanskrit);
        $checkbox = $this->setCheckbox($thai_id, $lang_name, $show, $checkbox);

        $thai_inform_id = Api::$THAIINFORM;
        $lang_name = "ไทย-แบบแผน(แบบคงรูป)";
        $show = FALSE;
        $thai_inform = $this->setLang($thai_inform_id, $lang_name, $show, $line_sanskrit);
        $checkbox = $this->setCheckbox($thai_inform_id, $lang_name, $show, $checkbox);



        $this->load->view('api/checkbox_generate', $checkbox);
        if (isset($line_sanskrit[Api::$DEVANAGARI])) {
            $this->load->view('api/textcompare', $dev);
        }
        $this->load->view('api/textcompare', $romanize);
        $this->load->view('api/textcompare', $thai);
        $this->load->view('api/textcompare', $thai_inform);
        $data['timestamp'] = $timestamp;
        $this->load->view('api/time_stamp', $data);
    }

    private function setLang($lang_id, $lang_name, $show, $line_sanskrit) {

        $array['lang_id'] = $lang_id;
        $array['lang_name'] = $lang_name;
        if (isset($line_sanskrit[$lang_id])) {
            $array['line_sanskrit'] = $line_sanskrit[$lang_id];
        }
        $array['lang_show'] = $show;
        return $array;
    }

    private function setCheckbox($lang_id, $lang_name, $show, $checkbox) {

        $checkbox['checkbox'][] = $lang_id;
        $checkbox['label'][] = $lang_name;
        $checkbox['show'][] = $show;
        return $checkbox;
    }

}
