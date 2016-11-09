<?php

if (!defined("BASEPATH")) {
    exit("No direct script access allowed");
}

require_once('thaisanscript/include.php');

use ThaiSanskrit\ThaiSanscriptAPI;

class Thaisans_adapter {
    /*
     * @var $thaiSanscriptAPI ThaiSanskrit\ThaiSanscriptAPI
     */

    public $thaiSanscriptAPI;

    public function __construct() {
        $this->CI = & get_instance();
        $this->thaiSanscriptAPI = new ThaiSanscriptAPI();
    }

    public function jsonOutput($txt) {
       return $this->thaiSanscriptAPI->jsonOutput($txt);
    }

   

}
