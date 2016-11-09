<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Errors extends CI_Controller {

    public function index() {
        $this->template->set_page_title("404 Page Not Found");
        $this->template->append_page_section("errors/theme/error_404");
        $this->template->render_main_template($this);
    }
  
}
