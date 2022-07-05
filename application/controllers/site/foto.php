<?php


class Categorias extends CI_Controller {
    
    public function index(){
        $vetor['albun'] = $this->db->get('album2')->result();
        $this->template->load("template/template2", "categoria/index", $vetor);
    }   
    
     public function filtrar(){
        $vetor['albun'] = $this->db->get('album')->result();
        $idAlbum = $this->input->post("area");
        $this->db->where("album2_idalbum2", $idAlbum);
        $vetor['fotos'] = $this->db->get('fotos2')->result();
        $this->template->load("template/template2", "categoria/index", $vetor);
    }
    
}
