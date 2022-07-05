<?php

class Album extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->library("controle_acesso");
        $this->controle_acesso->controlar();
    }

    function index($categoria) {

        $idcategoria = $this->uri->segment(4);

        //CRIA UM FILTRO COM BASE NA CATEGORIA
        if ($categoria == NULL) {
            redirect(site_url("restrito/categoria_album"));
        }

        $crud = new Grocery_CRUD();
        $crud->set_table("album");
        $crud->set_subject("Álbum");
        $crud->required_fields('nome');

        //ADICIONA UMA OPÇÃO
        $crud->add_action("Gerenciar Fotos", base_url("recursos/img/icones/foto.png"), null, null, array($this, "fotos"));

        if ($idcategoria != 7) {
            //DESABILITAR OPÇÃO DE DELETAR REGISTRO
            $crud->unset_delete();

            //DESABILITAR OPÇÃO DE ADICIONAR REGISTRO
            $crud->unset_add();

            //DESABILITAR OPÇÃO DE EDITAR REGISTRO
            $crud->unset_edit();

            $crud->unset_search(); //remove a pesquisa
        }

        //DESABILITAR OPÇÃO DE IMPRIMIR
        $crud->unset_print();

        //DESABILITAR OPÇÃO DE EXPORTAR
        $crud->unset_export();

        //CAMPOS EXIBIDOS NA LISTAGEM
        $crud->columns('nome');

        //OCULTA O CAMPO CATEGORIA
        $crud->field_type("categoria_idcategoria", "hidden", $categoria);

        //CONDIÇÃO PARA EXIBIR COM BASE NO FILTRO
        $crud->where("categoria_idcategoria", $categoria);

        $crud->display_as("nome", "Nome do Álbum");

        //GERA O CRUD
        $output = $crud->render();

        //BUSCA O NOME DA CATEGORIA DO ÁLBUM COM BASE NO ID PASSADO VIA URL
        $this->load->model("categoria_model");
        $nome_categoria = $this->categoria_model->listar_categoria($idcategoria);
        //LINK PARA VOLTAR PARA A PÁGINA ANTERIOR
        $link_albuns = "<a href='" . site_url('restrito/categoria_album') . "'>Álbuns</a>";

        //DEFINE O TÍTULO QUE SERÁ EXIBIDO SOBRE O FORMULÁRIO DO CRUD
        $output->titulo_crud = $link_albuns . " / " . $nome_categoria;


        //CARREGA A VIEW E PASSA OS PARÂMETROS
        $this->load->view("crud/index", $output);
    }

    public function fotos($primary, $album) {
        return site_url("restrito/foto/index/$primary");
    }

}
