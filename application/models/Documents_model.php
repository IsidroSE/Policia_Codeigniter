<?php

class Documents_model extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->load->model("Rol_model");
    }

    public function getDocuments($rol_id) {
        $rol = $this->Rol_model->getPermissions($rol_id);
        $sql = "SELECT * FROM document WHERE document_rol_id in (SELECT rol_id FROM rol WHERE rol_level >= $rol) ORDER BY document_date DESC";
        $query = $this->db->query($sql);
        return $query->result();
    }

}

