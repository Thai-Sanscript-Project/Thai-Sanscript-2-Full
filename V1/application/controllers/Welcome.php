<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
      public function __construct() {
        parent::__construct();
        $this->load->model('statistics_counter_model');
    }

    public function index() {
        /* @var $this->template libraries/Template */
        /* @var $this->statistics_counter_model Statistics_counter_model */
//        $this->statistics_counter_model->counter("main-website");
        $data = array();
        $this->template->append_page_section('welcome_message/index');
        $this->template->append_js_embed('welcome_message/js');
        $this->template->render_main_template($this, $data);
    }

}
