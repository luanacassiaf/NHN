<?php

class Menuad {

    var $CI;

    public function site_url($str) {
        return site_url($str);
    }

    public function principal() {

        $str = <<<EOD
 <!--        menu-->
    <div class="navbar-wrapper">
        <div class="container-fluid">
            <nav class="navbar navbar-fixed-top">
                <div class="container">
                    <div class="navbar-header">
                                <button type='button' class='navbar-toggle collapsed' data-toggle='collapse' data-target='#navbar' aria-expanded='false' aria-controls='navbar'>
                                    <span class='sr-only'></span>
                                    <span class='icon-bar'></span>
                                    <span class='icon-bar'></span>
                                    <span class='icon-bar'></span>
                                </button>
                        <a class="navbar-brand" href='{$this->site_url('site/tela/tela_admin')}' title='Administração do site'><span class='glyphicon glyphicon-user'></span> Administrador</a>
                    </div>
                    <div id="navbar" class="navbar-collapse collapse">
                        <ul class="nav navbar-nav">
                            <li><a href='{$this->site_url('restrito/conteudo')}'><span class='glyphicon glyphicon-th-list'></span> Conteúdos das páginas</a></li>
                            <li><a href='{$this->site_url('restrito/categoria_album')}'><span class='glyphicon glyphicon-th-list'></span> Álbuns</a></li>
                            <li><a href='{$this->site_url('restrito/programacao')}'><span class='glyphicon glyphicon-th-list'></span> Programação</a></li>
                            <li><a href='{$this->site_url('restrito/area')}'><span class='glyphicon glyphicon-th-list'></span> Áreas de Pesquisa</a></li>
                            <li><a href='{$this->site_url('restrito/publicacao')}'><span class='glyphicon glyphicon-th-list'></span> Publicações</a></li>
                            <li><a href='{$this->site_url('site/home')}' aria-haspopup='true' aria-expanded='false' target="_blank"><span class=' glyphicon glyphicon-globe'></span> Ver site</a></li>
                            <li><a href='{$this->site_url('site/login/sair')}' aria-haspopup='true' aria-expanded='false'><span class='glyphicon glyphicon-log-out'></span> Sair</a></li>
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
