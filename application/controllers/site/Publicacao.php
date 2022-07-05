<?php

class Publicacao extends CI_Controller {

    function __construct() {
        parent::__construct();
        //CARREGAR O MODEL
        $this->load->model("publicacao_model", "publicacao");
        $this->load->model("areas_model", "areas");
    }
 

    public function Periodicos() {

        if (isset($_POST['area']) && $_POST['area'] > 0) {
            $idarea = $_POST['area'];
            //BUSCAR TODAS AS PUBLICAÇÕES POR ÁREA
            $vetor['publicacoes'] = $this->publicacao->listarTodas_porTipo_Area("Periódicos", $idarea);
            $vetor['filtro_pesquisa'] = 'Periódicos: '.$this->areas->listar_area_porID($idarea);
        } else {
            //BUSCAR TODAS AS PUBLICAÇÕES POR TIPO
            $vetor['publicacoes'] = $this->publicacao->listarTodas_porTipo("Periódicos");
            $vetor['filtro_pesquisa'] = "Periódicos: Todas as Áreas";
        }
        //var_dump($vetor['publicacoes'] );
        $vetor['areas'] = $this->areas->listarTodas();

        //TITULO DO CABEÇALHO DO TEMPLATE
        $this->template->set('titulo_cabecalho', 'Periódicos');
        
        //ACTION DO FORMULÁRIO DE FILTRAGEM POR ÁREA DE PESQUISA
        $this->template->set('action_post', site_url('/site/publicacao/periodicos/'));

        //CARREGA O TEMPLATE
        $this->template->load("template/publicacao", "publicacao/index", $vetor);
    }

    public function Artigos() {

        if (isset($_POST['area']) && $_POST['area'] > 0) {
            $idarea = $_POST['area'];

            //BUSCAR TODAS AS PUBLICAÇÕES POR ÁREA
            $vetor['publicacoes'] = $this->publicacao->listarTodas_porTipo_Area("Artigos", $idarea);
            $vetor['filtro_pesquisa'] = 'Artigos: '.$this->areas->listar_area_porID($idarea);
        } else {
            //BUSCAR TODAS AS PUBLICAÇÕES POR TIPO
            $vetor['publicacoes'] = $this->publicacao->listarTodas_porTipo("Artigos");
            $vetor['filtro_pesquisa'] = "Artigos: Todas as Áreas";
        }
        //var_dump($vetor['publicacoes'] );
        $vetor['areas'] = $this->areas->listarTodas();


        //TITULO DO CABEÇALHO DO TEMPLATE
        $this->template->set('titulo_cabecalho', 'Artigos');
        
        //ACTION DO FORMULÁRIO DE FILTRAGEM POR ÁREA DE PESQUISA
        $this->template->set('action_post', site_url('/site/publicacao/Artigos/'));

        //CARREGA O TEMPLATE
        $this->template->load("template/publicacao", "publicacao/index", $vetor);
    }

    public function TCC_Dissertacoes_Teses() {
        
        if (isset($_POST['area']) && $_POST['area'] > 0) {
            $idarea = $_POST['area'];
            //BUSCAR TODAS AS PUBLICAÇÕES POR ÁREA
            $vetor['publicacoes'] = $this->publicacao->listarTodas_porTipo_Area("TCC/Dissertações/Teses", $idarea);
            $vetor['filtro_pesquisa'] = 'TCC/Dissertações/Teses: '.$this->areas->listar_area_porID($idarea);
            
        } else {
            //BUSCAR TODAS AS PUBLICAÇÕES POR TIPO
            $vetor['publicacoes'] = $this->publicacao->listarTodas_porTipo("TCC/Dissertações/Teses");
            $vetor['filtro_pesquisa'] = "TCC/Dissertações/Teses: Todas as Áreas";
        }
        //var_dump($vetor['publicacoes'] );
        $vetor['areas'] = $this->areas->listarTodas();


        //TITULO DO CABEÇALHO DO TEMPLATE
        $this->template->set('titulo_cabecalho', 'TCC/Dissertações/Teses');
        
        //ACTION DO FORMULÁRIO DE FILTRAGEM POR ÁREA DE PESQUISA
        $this->template->set('action_post', site_url('/site/publicacao/TCC_Dissertacoes_Teses/'));

        //CARREGA O TEMPLATE
        $this->template->load("template/publicacao", "publicacao/index", $vetor);
    }

    public function Anais_de_Congresso() {
        
        if (isset($_POST['area']) && $_POST['area'] > 0) {
            $idarea = $_POST['area'];
            //BUSCAR TODAS AS PUBLICAÇÕES POR ÁREA
            $vetor['publicacoes'] = $this->publicacao->listarTodas_porTipo_Area("Anais de Congresso", $idarea);
            $vetor['filtro_pesquisa'] = 'Anais de Congresso: '. $this->areas->listar_area_porID($idarea);
            
        } else {
            //BUSCAR TODAS AS PUBLICAÇÕES POR TIPO
            $vetor['publicacoes'] = $this->publicacao->listarTodas_porTipo("Anais de Congresso");
            $vetor['filtro_pesquisa'] = "Anais de Congresso: Todas as Áreas";
        }
        //var_dump($vetor['publicacoes'] );
        $vetor['areas'] = $this->areas->listarTodas();

        //TITULO DO CABEÇALHO DO TEMPLATE
        $this->template->set('titulo_cabecalho', 'Anais de Congresso');
        
        //ACTION DO FORMULÁRIO DE FILTRAGEM POR ÁREA DE PESQUISA
        $this->template->set('action_post', site_url('/site/publicacao/Anais_de_Congresso/'));

        //CARREGA O TEMPLATE
        $this->template->load("template/publicacao", "publicacao/index", $vetor);
    }

    public function Resumos() {
        
        if (isset($_POST['area']) && $_POST['area'] > 0) {
            $idarea = $_POST['area'];
            //BUSCAR TODAS AS PUBLICAÇÕES POR ÁREA
            $vetor['publicacoes'] = $this->publicacao->listarTodas_porTipo_Area("Resumos", $idarea);
            $vetor['filtro_pesquisa'] = 'Resumos: '.$this->areas->listar_area_porID($idarea);
            
        } else {
            //BUSCAR TODAS AS PUBLICAÇÕES POR TIPO
            $vetor['publicacoes'] = $this->publicacao->listarTodas_porTipo("Resumos");
            $vetor['filtro_pesquisa'] = "Resumos: Todas as Áreas";
        }
        //var_dump($vetor['publicacoes'] );
        $vetor['areas'] = $this->areas->listarTodas();


        //TITULO DO CABEÇALHO DO TEMPLATE
        $this->template->set('titulo_cabecalho', 'Resumos');
        
         //ACTION DO FORMULÁRIO DE FILTRAGEM POR ÁREA DE PESQUISA
        $this->template->set('action_post', site_url('/site/publicacao/Resumos/'));


        //CARREGA O TEMPLATE
        $this->template->load("template/publicacao", "publicacao/index", $vetor);
    }

}
