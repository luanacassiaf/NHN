<?php

class Area extends CI_Controller {

    
    function __construct() {
            parent::__construct();
            $this->load->library("controle_acesso");
            $this->controle_acesso->controlar();
        }
        
    public function index() {
        
        $crud = new Grocery_CRUD();
        $crud->set_table("areas");
        $crud->set_subject("Área");

        $crud->display_as("apresentacao", "Apresentação");
        $crud->display_as("linhas_pesquisa", "Linhas de Pesquisa");

        //DESABILITAR OPÇÃO DE ADICIONAR REGISTRO
        $crud->unset_add();

        //DESABILITAR OPÇÃO DE DELETAR REGISTRO
        $crud->unset_delete();

        //DESABILITAR OPÇÃO DE IMPRIMIR
        $crud->unset_print();

        //DESABILITAR OPÇÃO DE EXPORTAR
        $crud->unset_export();

        //CAMPOS EXIBIDOS NA LISTAGEM
        $crud->columns('nome');
        
        $crud->required_fields('apresentacao','linhas_pesquisa','projetos','parceiros');
        
        $crud->field_type("nome", "readonly");
        $output = $crud->render();
        $output->titulo_crud = 'Áreas de Pesquisa';

        $this->load->view("crud/index", $output);
    }

}
