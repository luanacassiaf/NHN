<?php


class Foto extends CI_Controller {
    
    
     function __construct() {
        parent::__construct();
        $this->load->library("controle_acesso");
        $this->controle_acesso->controlar();
    }
    public function index($album = null){
        
       
    
        if ($album  == NULL){
            redirect(site_url("restrito/album2"));
        }
        
        $crud = new Grocery_CRUD();
        $crud->set_table("fotos2");
        $crud->set_subject("Foto");
        
        $crud->field_type ("album2_idalbum2", "hidden", $album);
        $crud->set_field_upload("foto");
        $crud->where("album2_idalbum2", $album);
        $form = $crud->render();
        $this->load->view("crud/index", $form);
    }
        
}
