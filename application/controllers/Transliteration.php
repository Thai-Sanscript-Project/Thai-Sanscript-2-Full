<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Transliteration extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        
    }

    public function json() {

        $txt = $this->input->post('src-txt');
        $lang = $this->input->post('lang');
        $destType = $this->input->post('destType');
        $json = $this->thaisans_adapter->jsonOutput($txt,$lang,$destType);
        $this->output->set_content_type('application/json')->set_output($json);
    }

}
