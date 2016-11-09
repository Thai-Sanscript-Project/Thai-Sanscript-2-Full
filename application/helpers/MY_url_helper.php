<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Extend \system\helpers\url_helper.php
 * CodeIgniter URL Helpers
 * @package	CodeIgniter
 * @subpackage	Helpers
 * @category	Helpers
 * @author	Thanakrit
 */
// ------------------------------------------------------------------------
if (!function_exists('base_resource_url')) {

    function base_resource_url($repopath = '', $filepath = '') {
        $uri = $repopath . $filepath;
        return base_url($uri);
    }

}
// ------------------------------------------------------------------------
if (!function_exists('js_url')) {

    function js_url($filepath = '') {
        return base_resource_url('inc/js/', $filepath);
    }

}
// ------------------------------------------------------------------------
if (!function_exists('css_url')) {

    function css_url($filepath = '') {
        return base_resource_url('inc/css/', $filepath);
    }

}
// ------------------------------------------------------------------------
if (!function_exists('img_url')) {

    function img_url($filepath = '') {
        return base_resource_url('inc/images/', $filepath);
    }

}
// ------------------------------------------------------------------------
if (!function_exists('font_url')) {

    function font_url($filepath = '') {
        return base_resource_url('inc/fonts/', $filepath);
    }

}

// ************************************************************************
if (!function_exists('echo_js')) {

    function echo_js($filepath = '') {
        echo js_url($filepath);
    }

}
// ------------------------------------------------------------------------
if (!function_exists('echo_css')) {

    function echo_css($filepath = '') {
        echo css_url($filepath);
    }

}
// ------------------------------------------------------------------------
if (!function_exists('echo_img')) {

    function echo_img($filepath = '') {
        echo img_url($filepath);
    }

}
// ------------------------------------------------------------------------
if (!function_exists('echo_font')) {

    function echo_font($filepath = '') {
        echo font_url($filepath);
    }

}
// ------------------------------------------------------------------------
if (!function_exists('site')) {

    function site($filepath = '') {
        return site_url('/' . $filepath);
    }

}
// ------------------------------------------------------------------------
if (!function_exists('echo_site')) {

    function echo_site($filepath = '') {
        echo site_url($filepath);
    }

}
// ------------------------------------------------------------------------
if (!function_exists('num_param_url_encode')) {

    function num_param_url_encode($parameter) {
        $result = FALSE;

        $parameter = intval($parameter);
        if (is_int($parameter)) {
            $key = 61;
            $digest = 100;
            $digest2 = intval(gmdate('ymd'));

            $result = $parameter * $digest;
            $result = $result + $key;
            $result = $result * $digest2;
            $result = base_convert($result, 10, 36);
        }
        return $result;
    }

}
// ------------------------------------------------------------------------
if (!function_exists('num_param_url_decode')) {

    function num_param_url_decode($parameter) {
        $result = FALSE;
        if (!is_null($parameter)) {
            $key = 61;
            $digest = 100;
            $digest2 = intval(gmdate('ymd'));

            $parameter = base_convert($parameter, 36, 10);
            $parameter = $parameter / $digest2;

            $poof = $parameter % $digest;
            if ($poof == $key) {
                $decode_key = $parameter - $key;
                $decode_digest = $decode_key / $digest;
                $result = $decode_digest;
            }
        }
        return $result;
    }

}
// ------------------------------------------------------------------------
if (!function_exists('not_found_error')) {

    function not_found_error() {
        redirect(site_url('errors/not_found_error'));
    }

}
