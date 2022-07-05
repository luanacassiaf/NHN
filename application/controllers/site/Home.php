<?php


class Home  extends CI_Controller{
    
    
    public function index(){
        $this->db->where("categoria", "Resumo Home");
        $vetor['conteudos'] = $this->db->get('conteudo')->result();
        $this->template->load("template/index", "home/secao", $vetor);
    }
    
    public function quemsomos(){       
        $this->db->where("local", "Quem Somos");
        $vetor['conteudo'] = $this->db->get('conteudo')->row();
        $vetor['titulo'] = "Quem Somos";
        $this->template->load("template/galeria", "quemsomos/quemsomos", $vetor);
    }  
    
   public function faleconosco(){       
        $this->db->where("local", "Fale Conosco");
        $vetor['conteudo'] = $this->db->get('conteudo')->row();
        $vetor['titulo'] = "Fale Conosco";
        $this->template->load("template/galeria", "faleconosco/faleconosco", $vetor);
    }
}
