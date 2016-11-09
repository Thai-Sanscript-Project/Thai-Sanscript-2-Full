<?php
if (!defined('BASEPATH')) {
	exit('No direct script access allowed');
}

class Language extends CI_Controller {
	
	public function __construct() {
		parent::__construct();
	}
	
	public function index() {
	}
	
	public function en() {
            $current_url= $this->input->get('url');
            $this->switch_lang('en',$current_url);
	}
	
	public function th() {
            $current_url= $this->input->get('url');
            $this->switch_lang('th',$current_url);		
	}
	private function switch_lang($lang_short,$current_url) {
		$this->session->set_userdata("LANGUAGE",$lang_short);
                redirect($current_url);
	}
}