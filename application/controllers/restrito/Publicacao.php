<?php

class Publicacao extends CI_Controller {
    
    function __construct() {
        parent::__construct();
        $this->load->library("controle_acesso");
        $this->controle_acesso->controlar();
    }


    public function index() {
        
        $crud = new Grocery_CRUD();
        $crud->set_table("publicacoes");
        $crud->set_subject("Publicação");

        //DESABILITAR OPÇÃO DE IMPRIMIR
        $crud->unset_print();

        //DESABILITAR OPÇÃO DE EXPORTAR
        $crud->unset_export();
        
        //CAMPOS EXIBIDOS NA LISTAGEM
        $crud->columns('titulo', 'tipo', 'autor', 'areas_idareas');
        
        $crud->required_fields('titulo','tipo','autor','areas_idareas','resumo','arquivo');

        //ALTERA O CAMPO ARQUIVO PARA O TIPO UPLOAD
        $crud->set_field_upload("arquivo");
        
        //DEFINE A RELAÇÃO COM A TABELA ÁREAS
        $crud->set_relation('areas_idareas', 'areas', 'nome');
        
        //DEFINE O NOME QUE SERÁ EXIBIDO PARA OS CAMPOS
        $crud->display_as('areas_idareas', 'Área de pesquisa');
        $crud->display_as('tipo', 'Tipo de publicação');    
        $crud->display_as('titulo', 'Título');    
        
        //GERA O CRUD
        $output = $crud->render();
        
        //DEFINE O TÍTULO QUE SERÁ EXIBIDO SOBRE O FORMULÁRIO DO CRUD
        $output->titulo_crud = 'Publicações';
        
        //CARREGA A VIEW E PASSA OS PARÂMETROS
        $this->load->view("crud/index", $output);
    }

}
