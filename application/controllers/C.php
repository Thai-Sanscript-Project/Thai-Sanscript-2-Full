<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class C extends CI_Controller {

    public function p($title = "", $section = "", $file = "") {

        $repoSanskrit = "repo/" . $title . "/" . $section . "/" . $file . ".s";

        if (file_exists($repoSanskrit)) {
            $this->trans($repoSanskrit);
        } else {
            redirect(site("errors"));
        }
    }

    public function trans($repoSanskrit = "") {
        $dataTxt = file_get_contents($repoSanskrit);
        $dat = explode("@", $dataTxt);
        if (count($dat) == 3) {
            $data['title'] = $dat[0];
            $data['detail'] = $dat[1];
            $dataSanskrit = $dat[2];

            /* @var $thaisans_adapter Thaisans_adapter */
            $thaisans_adapter = $this->thaisans_adapter;

            $dataIast = $thaisans_adapter->sanscript($dataSanskrit);
            $sansArray = $thaisans_adapter->txtLineToArray($dataSanskrit);
            $lastArray = $thaisans_adapter->txtLineToArray($dataIast);
            $thaiArray = $thaisans_adapter->toThai($dataIast);

            $data['line_sanskrit'] = $sansArray;
            $data['line_iast'] = $lastArray;
            $data['line_thaiform'] = $thaiArray[0];
            $data['line_thai'] = $thaiArray[1];
            $data['meta_title'] = trim($data['title']);
            $data['meta_description'] = trim($data['detail']);
            
            
            $this->template->set_page_title($data['title']);
            $this->template->append_page_section('compare/content');
            $this->template->render_compare_template($this, $data);
        }
    }

}
