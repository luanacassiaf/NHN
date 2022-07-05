<?php


class Galeria extends CI_Controller {
    
    //acervo categorias de fotos
    public function index(){
        $this->db->where("categoria_idcategoria", 8); //fotos do acervo
        $this->db->join("fotos", "album.idalbum = fotos.album_idalbum");
        $vetor['fotos'] = $this->db->get('album')->result();
        $vetor['titulo'] = "Acervo / Fotos";
        $this->template->load("template/galeria", "galeria/index", $vetor);
    }   
     //acervo de multimidia imagens
    public function imagem_multimidia(){
        $this->db->where("categoria_idcategoria", 2); //fotos do acervo
        $this->db->join("fotos", "album.idalbum = fotos.album_idalbum");
        $vetor['fotos'] = $this->db->get('album')->result();
        $vetor['titulo'] = "Multímidia / Imagens";
        $this->template->load("template/galeria", "galeria/index", $vetor);
    }  
    
    //acervo de exposição temporária
    public function temporaria(){
        $this->db->where("categoria_idcategoria", 1); //fotos do acervo
        $this->db->join("fotos", "album.idalbum = fotos.album_idalbum");
        $vetor['fotos'] = $this->db->get('album')->result();
        $vetor['titulo'] = "Acervo / Exposição temporária";
        $this->template->load("template/galeria", "galeria/index", $vetor);
    }  
    
      //acervo de curadoria
    public function curadoria(){
        $this->db->where("categoria_idcategoria", 4); //fotos do acervo
        $this->db->join("fotos", "album.idalbum = fotos.album_idalbum");
        $vetor['fotos'] = $this->db->get('album')->result();
        $vetor['titulo'] = "Curadoria";
        $this->template->load("template/galeria", "galeria/index", $vetor);
    }
    
       //acervo de visitas_escola
    public function visitas_escola(){
        $this->db->where("categoria_idcategoria", 9); //fotos do acervo
        $this->db->join("fotos", "album.idalbum = fotos.album_idalbum");
        $vetor['fotos'] = $this->db->get('album')->result();
        $vetor['titulo'] = "Visitas a Escolas";
        $this->template->load("template/galeria", "galeria/index", $vetor);
    }
    
        //acervo de visitas_mediadas
    public function visitas_mediadas(){
        $this->db->where("categoria_idcategoria", 3); //fotos do acervo
        $this->db->join("fotos", "album.idalbum = fotos.album_idalbum");
        $vetor['fotos'] = $this->db->get('album')->result();
        $vetor['titulo'] = "Visitas Mediadas";
        $this->template->load("template/galeria", "galeria/index", $vetor);
    }
    
        //acervo de visitas_observatorio
    public function observatorio(){
        $this->db->where("categoria_idcategoria", 5); //fotos do acervo
        $this->db->join("fotos", "album.idalbum = fotos.album_idalbum");
        $vetor['fotos'] = $this->db->get('album')->result();
        $vetor['titulo'] = "Observatório Astronômico";
        $this->template->load("template/galeria", "galeria/index", $vetor);
    }
    
        //acervo de visitas_ferias
    public function atividade_ferias(){
        $this->db->where("categoria_idcategoria", 6); //fotos do acervo
        $this->db->join("fotos", "album.idalbum = fotos.album_idalbum");
        $vetor['fotos'] = $this->db->get('album')->result();
        $vetor['titulo'] = "Atividade de Férias";
        $this->template->load("template/galeria", "galeria/index", $vetor);
    }
    
       

    
}
