<?php

class Menu {
    
    var $CI;
    
    public function site_url($str){
        return site_url($str);
    }
    
    public function principal() {

        $str = <<<EOD
 <!--        menu-->
            <div class='navbar-wrapper'>
                <div class='container-fluid'>
                    <nav class='navbar navbar-fixed-top'>
                        <div class='container'>
                            <div class='navbar-header'>
                                <button type='button' class='navbar-toggle collapsed' data-toggle='collapse' data-target='#navbar' aria-expanded='false' aria-controls='navbar'>
                                    <span class='sr-only'></span>
                                    <span class='icon-bar'></span>
                                    <span class='icon-bar'></span>
                                    <span class='icon-bar'></span>
                                </button>
                                <a class='navbar-brand' href='{$this->site_url('site/home')}'>Núcleo de História Natural</a>
                            </div>
                            <div id='navbar' class='navbar-collapse collapse'>
                                <ul class='nav navbar-nav'>
                                    <li class=' dropdown'>
                                        <a href='#' class='dropdown-toggle' data-toggle='dropdown' role='button' aria-haspopup='true' aria-expanded='false'>Museu <span class='caret'></span></a>
                                        <ul class='dropdown-menu'>
                                            <li class=' dropdown'>
                                                <a href='{$this->site_url('site/home/quemsomos')}' >Quem Somos</a>
                                            </li>
                                             <li class=' dropdown'>
                                                <a href='#' class='dropdown-toggle' data-toggle='dropdown' role='button' aria-haspopup='true' aria-expanded='false'>Acervo <span class='caret'></span></a>
                                                <ul class='dropdown-menu submenu'>
                                                        <li><a href='{$this->site_url('site/categorias')}'>Categorias</a></li>
                                                        <li><a href='{$this->site_url('site/galeria')}'>Fotos</a></li>
                                                        <li><a href='{$this->site_url('site/galeria/temporaria')}'>Exposição Temporária</a></li>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class=' dropdown'>
                                                <a href='#' class='dropdown-toggle' data-toggle='dropdown' role='button' aria-haspopup='true' aria-expanded='false'>Multimídia <span class='caret'></span></a>
                                                <ul class='dropdown-menu submenu'>
                                                    <li><a href='{$this->site_url('site/galeria/imagem_multimidia')}'>Imagens</a></li>
                                                    <li><a href='{$this->site_url('site/video/index')}'>Vídeos</a></li>
                                                    <li><a href='{$this->site_url('site/audio/index')}'>Áudios</a></li>
                                                </ul>
                                            </li>
                                            <li class=' dropdown'>
                                                <a href='{$this->site_url('site/galeria/curadoria')}'  >Curadoria</a>
                                            </li>
                                            <li class=' dropdown'>
                                                <a href='#' class='dropdown-toggle' data-toggle='dropdown' role='button' aria-haspopup='true' aria-expanded='false'>Ações Educativas <span class='caret'></span></a>
                                                <ul class='dropdown-menu submenu'>
                                                    <li><a href='{$this->site_url('site/galeria/visitas_escola')}'>Visitas a Escolas</a></li>
                                                    <li><a href='{$this->site_url('site/galeria/observatorio')}'>Observatório Astronômico</a></li>
                                                    <li><a href='{$this->site_url('site/galeria/atividade_ferias')}'>Atividades de Férias</a></li>
                                                    <li><a href='{$this->site_url('site/galeria/visitas_mediadas')}'>Visitas Mediadas</a></li>
                                                </ul>
                                            </li>
                                            <li class=' dropdown'>
                                                <a href='{$this->site_url('site/programacao')} ' >Programação</a>
                                            </li>
                                            <li><a href='{$this->site_url('site/home/faleconosco')}'>Fale Conosco</a></li>
                                        </ul>
                                    </li>
                                    <li class=' dropdown'><a href='#' class='dropdown-toggle' data-toggle='dropdown' role='button' aria-haspopup='true' aria-expanded='false'>Áreas de Pesquisa <span class='caret'></span></a>
                                        <ul class='dropdown-menu'>
                                            <li><a href='{$this->site_url('site/area/biodiversidade')}'>Biodiversidade</a></li>
                                            <li><a href='{$this->site_url('site/area/educacao')}'>Educação</a></li>
                                            <li><a href='{$this->site_url('site/area/etnografia')}'>Etnografia</a></li>
                                            <li><a href='{$this->site_url('site/area/geociencias')}'>Geociências</a></li>
                                        </ul>
                                    </li>
                                    <li class=' dropdown'><a href='#' class='dropdown-toggle' data-toggle='dropdown' role='button' aria-haspopup='true' aria-expanded='false'>Publicações <span class='caret'></span></a>
                                                                    <ul class='dropdown-menu'>
                                            <li><a href='{$this->site_url('site/publicacao/periodicos')}'>Periódicos</a></li>
                                            <li><a href='{$this->site_url('site/publicacao/artigos')}'>Artigos</a></li>
                                            <li><a href='{$this->site_url('site/publicacao/tcc_dissertacoes_teses')}'>TCC/Dissertações/Teses</a></li>
                                            <li><a href='{$this->site_url('site/publicacao/anais_de_congresso')}'>Anais de Congresso</a></li>
                                            <li><a href='{$this->site_url('site/publicacao/resumos')}'>Resumos</a></li>
                                        </ul>
                                    </li>
                                    <li><a class='drop' href='http://vespas.ifs.ifsuldeminas.edu.br/' target="_blank">Vespas Sociais</a></li>
                                    <li><a href='{$this->site_url('site/login')}' aria-haspopup='true' aria-expanded='false'>Entrar</a></li>    
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>


            </div>          
            <!--        final do menu-->                 
EOD;
        return $str;
    }

}
