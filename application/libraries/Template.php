<?php

if (!defined("BASEPATH")) {
    exit("No direct script access allowed");
}

class Template {

    public $page_title = '';
    public $js_file = array();
    public $css_file = array();
    public $js_embed = array();
    public $css_embed = array();
    public $page_section = array();
    public $active_menu = "";
    public $CI;

    public function __construct() {
        $this->CI = & get_instance();
        date_default_timezone_set("Asia/Bangkok");
    }

    public function render_main_template(CI_Controller $controller, $data = array()) {
        $this->render_template($controller, "main_template", $data);
    }

    public function render_demo_template(CI_Controller $controller, $data = array()) {
        $this->render_template($controller, "demo_template", $data);
    }

    public function render_compare_template(CI_Controller $controller, $data = array()) {
        $this->render_template($controller, "compare_template", $data);
    }

    public function render_sample_template(CI_Controller $controller, $data = array()) {
        $this->set_template($controller, "design/templates/sample_template", $data);
    }

    public function render_template(CI_Controller $controller, $templete_name, $data = array()) {
        $this->set_template($controller, "design/templates/" . $templete_name, $data);
    }

    public function set_template(CI_Controller $controller, $template_view_path, $data = array()) {
        $data['page_section'] = $this->page_section;
        $data['page_title'] = $this->page_title;
        $data['js_file'] = $this->js_file;
        $data['css_file'] = $this->css_file;
        $data['js_embed'] = $this->js_embed;
        $data['css_embed'] = $this->css_embed;
        $data['active_menu'] = $this->active_menu;


//        if (($controller->session->userdata("LANGUAGE")) !== null ) {
//            $this->session->set_userdata("LANGUAGE", $this->auto_lang());
//            $this->set_lang($controller);
//        }

        $this->set_lang($controller);
        $controller->parser->parse($template_view_path, $data);
    }

    public function append_page_section($section) {
        array_push($this->page_section, $section);
    }

    function set_page_section($page_section = array()) {
        $this->page_section = $page_section;
    }

    function set_page_title($page_title) {
        $this->page_title = $page_title;
    }

    public function append_js_embed($js_embed) {
        array_push($this->js_embed, $js_embed);
    }

    public function append_css_embed($css_embed) {
        array_push($this->css_embed, $css_embed);
    }

    public function append_js($jsfile) {
        array_push($this->js_file, $jsfile);
    }

    public function append_css($cssfile) {
        array_push($this->css_file, $cssfile);
    }

    public function set_active_menu($active_menu) {
        $this->active_menu = $active_menu;
    }

    public function set_lang(CI_Controller $controller) {



        if (!empty($_GET['lang'])) {
            $controller->session->set_userdata("LANGUAGE", $_GET['lang']);
        }

        $language = $controller->session->userdata("LANGUAGE");

        if ($language == "th") {
            $controller->lang->load('sans', 'thai');
            $controller->session->set_userdata("LANGUAGE", "th");
        } elseif ($language == "en") {
            $controller->lang->load('sans', 'english');
            $controller->session->set_userdata("LANGUAGE", "en");
        } else {
            $controller->lang->load('sans');
        }
    }

    public function allow_access(CI_Controller $controller) {
        if ($controller->session->userdata('logged_in')) {
            return $controller->session->userdata('logged_in');
        } else {
            redirect('admin?error=1', 'refresh');
        }
    }

    public function auto_lang() {
        $ip = $this->get_client_ip();
        $lang = "en";
        if ($ip) {
            $details = json_decode(file_get_contents("http://ipinfo.io/{$ip}/json"));

            if (isset($details->country)) {
                if (strtolower($details->country) === "th") {
                    $lang = "en";
                }
            }
        }

        return $lang;
    }

    public function get_client_ip() {
        $ipaddress = '';
        if (isset($_SERVER['HTTP_CLIENT_IP']))
            $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
        else if (isset($_SERVER['HTTP_X_FORWARDED_FOR']))
            $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
        else if (isset($_SERVER['HTTP_X_FORWARDED']))
            $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
        else if (isset($_SERVER['HTTP_FORWARDED_FOR']))
            $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
        else if (isset($_SERVER['HTTP_FORWARDED']))
            $ipaddress = $_SERVER['HTTP_FORWARDED'];
        else if (isset($_SERVER['REMOTE_ADDR']))
            $ipaddress = $_SERVER['REMOTE_ADDR'];
        else
            $ipaddress = '';
        return $ipaddress;
    }

}
