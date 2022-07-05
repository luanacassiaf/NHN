<?php

class Album2 extends CI_Controller {
    
     function __construct() {
        parent::__construct();
        $this->load->library("controle_acesso");
        $this->controle_acesso->controlar();
    }

    public function index() {
        
    
        $crud = new Grocery_CRUD();
        $crud->set_table("album2");

        $crud->add_action("Gerenciar Fotos", null, null, "icone", array($this, "foto"));

        $form = $crud->render();
        $this->load->view("crud/index", $form);
    }

    public function fotos($primary, $album2) {

        return site_url("restrito/foto2/index/$primary");
    }

}
