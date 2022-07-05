<?php

class Tela extends CI_Controller {

    public function tela_admin() {

        $this->template->load("template/tela_admin",'tela/index');
    }

}
