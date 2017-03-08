<?php

class News_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    public function getNews() {
        $sql = "SELECT * FROM news WHERE news_visible = 'Mostrar' ORDER BY news_date";
        $query = $this->db->query($sql);
        return $query->result();
    }
    
    public function getNew($id) {
        $sql = "SELECT * FROM news WHERE news_id = $id";
        $query = $this->db->query($sql);
        return $query;
    }

}
