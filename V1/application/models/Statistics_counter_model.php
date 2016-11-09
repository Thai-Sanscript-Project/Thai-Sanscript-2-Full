<?php

if (!defined("BASEPATH")) {
    exit("No direct script access allowed");
}

class Statistics_counter_model extends CI_Model {

    public $id;
    public $key;
    public $counter;
    public $date;
    
    private $dbname = "statistics_counter";
    private $pkname = "id";

    public function __construct() {
        parent::__construct();
    }

    public function counter($key, $increase = 1) {
        $query = $this->db->get_where($this->dbname, array('key' => $key,'date' =>date("Ymd")));
        $row = $query->row();

        if ($row) {
            $this->set_model($row->id, $row->key, ($row->counter + $increase));
            $this->update();
        } else {
            $this->set_model(null, $key, $increase);
            $this->insert();
        }
    }

    public function set_model($id, $key, $counter) {
        $this->id = $id;
        $this->key = $key;
        $this->counter = $counter;
        $this->date = date("Ymd");
    }

    public function insert() {

        $this->db->insert($this->dbname, $this);
    }

    public function update() {

        $this->db->update($this->dbname, $this, array($this->pkname => $this->id));
    }

    public function delete() {

        $this->db->delete($this->dbname, array($this->pkname => $this->id));
    }

    public function get_all() {
        $query = $this->db->get($this->dbname);
        return $query->result();
    }

}
