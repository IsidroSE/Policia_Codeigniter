<?php
    class Vistas_model extends CI_Model {
        
        function __construct() {
            parent::__construct();
            $this->load->model("Category_model");
        }
        
        public function cargarVistaFront($view, $content) {
            $this->load->view('frontoffice/templates/header', $content);
            $this->load->view("frontoffice/".$view, $content);
            $this->load->view('frontoffice/templates/footer');
        }

    }