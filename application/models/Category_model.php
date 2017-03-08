<?php

class Category_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    public function get_category_name($id) {
        
        $sql = "SELECT * FROM categories WHERE category_id = $id";
        
        $query = $this->db->query($sql);
        
        $fila = $query->row();
            
        $rol = $fila->category_name;
        
        return $rol;
    }

}