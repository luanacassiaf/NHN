<?php

class Categoria_album extends CI_Controller {
    
    
    function __construct() {
        parent::__construct();
        $this->load->library("controle_acesso");
        $this->controle_acesso->controlar();
    }
    
     public function index() {
         
      

        $crud = new Grocery_CRUD();
        $crud->set_table("categoria");
        $crud->set_subject("Categoria de álbuns");
        
        
        //ADICIONA UMA AÇÃO CUSTOMIZADA
        $crud->add_action('Abrir Álbum', base_url("recursos/img/icones/galery.png"), null, null, array($this, "fotos"));
        
        //DESABILITAR OPÇÃO DE ADICIONAR REGISTRO
        $crud->unset_add();

        //DESABILITAR OPÇÃO DE DELETAR REGISTRO
        $crud->unset_delete();
        
        //DESABILITAR OPÇÃO DE EDITAR REGISTRO
         $crud->unset_edit();
    
        //DESABILITAR OPÇÃO DE IMPRIMIR
        $crud->unset_print();

        //DESABILITAR OPÇÃO DE EXPORTAR
        $crud->unset_export();
        
        //CAMPOS EXIBIDOS NA LISTAGEM
        $crud->columns('categoria');
        
        $crud->display_as("categoria", "Localização");
        
        //GERA O CRUD
        $output = $crud->render();
        
        //DEFINE O TÍTULO QUE SERÁ EXIBIDO SOBRE O FORMULÁRIO DO CRUD
        $output->titulo_crud = 'Álbuns';
        
        //CARREGA A VIEW E PASSA OS PARÂMETROS
        $this->load->view("crud/index", $output);
    }
    
    public function fotos($primary, $album){        
        return site_url("restrito/album/index/$primary");
    }
        
}
