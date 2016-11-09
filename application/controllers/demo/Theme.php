<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Theme extends CI_Controller {

    public function index() {
        $this->template->set_page_title("index");
        $this->template->set_active_menu(10);
        $this->template->append_page_section("demo/index");
        $this->template->render_demo_template($this);
    }

    public function about_us() {
        $this->template->set_page_title("about_us");
        $this->template->set_active_menu(20);
        $this->template->append_page_section("demo/about-us");
        $this->template->render_demo_template($this);
    }

    public function services() {
        $this->template->set_page_title("services");
        $this->template->set_active_menu(30);
        $this->template->append_page_section("demo/services");
        $this->template->render_demo_template($this);
    }

    public function portfolio() {
        $this->template->set_page_title("portfolio");
        $this->template->set_active_menu(40);
        $this->template->append_page_section("demo/portfolio");
        $this->template->render_demo_template($this);
    }

    public function blog() {
        $this->template->set_page_title("blog");
        $this->template->set_active_menu(60);
        $this->template->append_page_section("demo/blog");
        $this->template->render_demo_template($this);
    }

    public function contact_us() {
        $this->template->set_page_title("contact_us");
        $this->template->set_active_menu(70);
        $this->template->append_page_section("demo/contact-us");
        $this->template->render_demo_template($this);
    }

    public function blog_item() {
        $this->template->set_page_title("blog_item");
        $this->template->set_active_menu(51);
        $this->template->append_page_section("demo/blog-item");
        $this->template->render_demo_template($this);
    }

    public function error_404() {
        $this->template->set_page_title("error_404");
        $this->template->set_active_menu(52);
        $this->template->append_page_section("demo/404");
        $this->template->render_demo_template($this);
    }

    public function pricing() {
        $this->template->set_page_title("pricing");
        $this->template->set_active_menu(53);
        $this->template->append_page_section("demo/pricing");
        $this->template->render_demo_template($this);
    }

    public function shortcodes() {
        $this->template->set_page_title("shortcodes");
        $this->template->set_active_menu(54);
        $this->template->append_page_section("demo/shortcodes");
        $this->template->render_demo_template($this);
    }

}
