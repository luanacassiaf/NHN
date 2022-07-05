<?php

class Foto extends CI_Controller {
    
     function __construct() {
            parent::__construct();
            $this->load->library("controle_acesso");
            $this->controle_acesso->controlar();
        }

    public function index($album = null) {

     

        if ($album == NULL) {
            redirect(site_url("restrito/album"));
        }

        $crud = new Grocery_CRUD();
        $crud->set_table("fotos");
        $crud->set_subject("Foto");

        //DESABILITAR OPÇÃO DE IMPRIMIR
        $crud->unset_print();

        //DESABILITAR OPÇÃO DE EXPORTAR
        $crud->unset_export();

        //CAMPOS EXIBIDOS NA LISTAGEM
        $crud->columns("foto", "legenda");
        
        $crud->required_fields('foto','legenda');

        //OCULTA O CAMPO
        $crud->field_type("album_idalbum", "hidden", $album);

        //ALTERA O CAMPO FOTO PARA O TIPO UPLOAD
        $crud->set_field_upload("foto");

        //CONDIÇÃO COM BASE NO FILTRO CRIADO
        $crud->where("album_idalbum", $album);

        //GERA O CRUD
        $output = $crud->render();


        //BUSCA O NOME DO ÁLBUM COM BASE NO ID PASSADO VIA URL
        $idalbum = $this->uri->segment(4);
        $this->load->model("album_model");
        $nome_album = $this->album_model->listar_album($idalbum);
        //LINK PARA VOLTAR PARA A PÁGINA ANTERIOR
        $link_albuns = "<a href='" . site_url('restrito/categoria_album') . "'>Álbuns</a>";

        //DEFINE O TÍTULO QUE SERÁ EXIBIDO SOBRE O FORMULÁRIO DO CRUD
        $output->titulo_crud = $link_albuns . " / Álbum: " . $nome_album;

        //CARREGA A VIEW E PASSA OS PARÂMETROS
        $this->load->view("crud/index", $output);
    }

}
