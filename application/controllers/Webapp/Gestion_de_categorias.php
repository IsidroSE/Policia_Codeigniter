<?php

class Gestion_de_categorias extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library("grocery_CRUD");
        $this->load->database();
    }

    public function index() {
        echo 'prueba';
    }
    
    function categories() {
        $crud = new Grocery_CRUD();
        $crud->set_theme('datatables');
        $crud->set_table('categories');
        $crud->set_subject('Categoria');
        $crud->set_relation('category_parent','categories','category_name');
        $crud->display_as('category_name','Nombre de la categoría');
        $crud->display_as('category_parent','Nombre de la categoría superior');
        
        $output = $crud->render();
        
        $this->load->view('example', $output);
    }

}


