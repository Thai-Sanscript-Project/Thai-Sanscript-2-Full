<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Stat extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('statistics_counter_model');
    }

    public function index() {
        $this->statistics_counter_model->counter("page-Stat");
        print_r($this->statistics_counter_model->get_all());
    }

}
