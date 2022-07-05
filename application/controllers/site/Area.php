<?php

class Area extends CI_Controller {
    

    public function biodiversidade() {
        $this->db->where("nome", "Biodiversidade");
        $vetor['conteudo'] = $this->db->get('areas')->row();
        $this->template->load("template/areas", "area/index", $vetor);
    }

    public function educacao() {
        $this->db->where("nome", "Educação");
        $vetor['conteudo'] = $this->db->get('areas')->row();
        $this->template->load("template/areas", "area/index", $vetor);
    }

    public function etnografia() {
        $this->db->where("nome", 'Etnografia');
        $vetor['conteudo'] = $this->db->get('areas')->row();
        $this->template->load("template/areas", "area/index", $vetor);
    }

    public function geociencias() {
        $this->db->where("nome", 'Geociências');
        $vetor['conteudo'] = $this->db->get('areas')->row();
        $this->template->load("template/areas", "area/index", $vetor);
    }

   
}
