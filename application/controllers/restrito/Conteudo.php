<?php

class conteudo extends CI_Controller {
    
   function __construct() {
        parent::__construct();
        $this->load->library("controle_acesso");
        $this->controle_acesso->controlar();
    }

    
    public function index() {
       

        $crud = new Grocery_CRUD();
        $crud->set_table("conteudo");
        $crud->set_subject("Conteúdo");

        //DESABILITAR OPÇÃO DE ADICIONAR REGISTRO
        $crud->unset_add();

        //DESABILITAR OPÇÃO DE DELETAR REGISTRO
        $crud->unset_delete();

        //DESABILITAR OPÇÃO DE IMPRIMIR
        $crud->unset_print();

        //DESABILITAR OPÇÃO DE EXPORTAR
        $crud->unset_export();

        //CAMPOS EXIBIDOS NA LISTAGEM
        $crud->columns('local', 'categoria');
        
        $crud->required_fields('texto');

        //DEFINE O NOME QUE SERÁ EXIBIDO PARA OS CAMPOS
        $crud->display_as('local', 'Página');
        $crud->display_as('categoria', 'Localização');

        $crud->field_type('local', 'readonly');
        $crud->field_type('categoria', 'readonly');
        //GERA O CRUD
        $output = $crud->render();

        //DEFINE O TÍTULO QUE SERÁ EXIBIDO SOBRE O FORMULÁRIO DO CRUD
        $output->titulo_crud = 'Conteúdos das páginas';

        //CARREGA A VIEW E PASSA OS PARÂMETROS
        $this->load->view("crud/index", $output);
    }

    public function fotos($primary, $quemsomos) {
        return site_url("restrito/conteudo/index/$primary");
    }

}
