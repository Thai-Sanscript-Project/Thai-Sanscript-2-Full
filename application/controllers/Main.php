<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

    public function index() {
        $this->template->set_page_title("ไทย-สันสคริปท์");
        $this->template->set_active_menu(10);
        $this->template->append_page_section("main/index/index");
        $this->template->render_main_template($this);
    }

    public function transliterate() {
        $this->template->set_page_title("ปริวรรตอักษร");
        $this->template->set_active_menu(20);
        $this->template->append_page_section("main/transliterate/index");
        $this->template->append_js_embed("main/transliterate/js-main");
        $this->template->append_js_embed("main/transliterate/form-js");
        $this->template->append_js_embed("main/transliterate/form-compare-js");
        $this->template->append_js_embed("main/transliterate/table-compare-js");
        $this->template->render_main_template($this);
    }
    public function example() {
       $this->template->set_page_title("ไทย-สันสคริปท์");
        $this->template->set_active_menu(30);
        $this->template->append_page_section("main/example/index");
        $this->template->render_main_template($this);
    }

    public function transliterate_compare() {
        $this->load->view('main/transliterate_compare/index');
    }

}
