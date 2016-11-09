<?php

defined('BASEPATH') OR exit('No direct script access allowed');

if (!function_exists('get_line')) {

    function get_line($line) {
        $CI = & get_instance();
        return $CI->lang->line($line);       
    }

    function echo_line($line) {
        echo get_line($line);
    }

}