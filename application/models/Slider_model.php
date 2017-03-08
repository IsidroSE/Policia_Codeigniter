<?php

class Slider_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    public function getAllImages() {
        $sql = "SELECT * FROM slider";
        $query = $this->db->query($sql);
        return $query->result();
    }

}

