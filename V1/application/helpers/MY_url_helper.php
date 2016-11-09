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
if (!function_exists('base_js')) {

    function base_js($filepath = '') {
        return base_resource_url('inc/js/', $filepath);
    }

}
// ------------------------------------------------------------------------
if (!function_exists('base_css')) {

    function base_css($filepath = '') {
        return base_resource_url('inc/css/', $filepath);
    }

}
// ------------------------------------------------------------------------
if (!function_exists('base_image')) {

    function base_image($filepath = '') {
        return base_resource_url('inc/images/', $filepath);
    }

}
// ------------------------------------------------------------------------
if (!function_exists('num_param_url_encode')) {

    function num_param_url_encode($parameter) {
        $result = FALSE;
        if (is_int($parameter)) {
            $key = 13;
            $digest = 100;
            $result = $parameter * $digest;
            $result = $result + $key;
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
            $key = 13;
            $digest = 100;
            $decode_key = $parameter - $key;
            $decode_digest = $decode_key / $digest;

            if (($parameter - $decode_key) == $key) {
               $result =  $decode_digest;
            }
        }
        return $result;
    }

}
// ------------------------------------------------------------------------
