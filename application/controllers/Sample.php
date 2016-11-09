<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Sample extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        
    }

    public function rigveda() {
        $this->template->append_page_section('sample/rigveda');
        $this->template->render_sample_template($this);
    }

    public function ramayana() {
        $this->template->append_page_section('sample/ramayana');
        $this->template->render_sample_template($this);
    }

    public function vajrasutra() {
        $this->template->append_page_section('sample/vajrasutra');
        $this->template->render_sample_template($this);
    }

    public function pratimoksa() {
        $this->template->append_page_section('sample/pratimoksa');
        $this->template->render_sample_template($this);
    }

    public function lalitavistara() {
        $this->template->append_page_section('sample/lalitavistara');
        $this->template->render_sample_template($this);
    }

    public function buddhacarita() {
        $this->template->append_page_section('sample/buddhacarita');
        $this->template->render_sample_template($this);
    }

    public function mahabharat() {
        //$this->statistics_counter_model->counter("sample-mahabharat");
        $this->template->append_page_section('sample/mahabharat');
        $this->template->render_sample_template($this);
    }

}
