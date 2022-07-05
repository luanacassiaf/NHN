<?php

class programacao extends CI_Controller {
    
     function __construct() {
            parent::__construct();
            $this->load->library("controle_acesso");
            $this->controle_acesso->controlar();
        }

    public function index() {

       

        $crud = new Grocery_CRUD();
        $crud->set_table("programacao");
        $crud->set_subject("Programação");
        
        $crud->display_as("horario", "Horário");

        //DESABILITAR OPÇÃO DE IMPRIMIR
        $crud->unset_print();

        //DESABILITAR OPÇÃO DE EXPORTAR
        $crud->unset_export();

        //CAMPOS EXIBIDOS NA LISTAGEM
        $crud->columns('data', 'evento');
        
        $crud->required_fields('data','horario','evento');

        $output = $crud->render();

        //DEFINE O TÍTULO QUE SERÁ EXIBIDO SOBRE O FORMULÁRIO DO CRUD
        $output->titulo_crud = 'Programação';

        $this->load->view("crud/index", $output);
    }

}
