<?php


class Categorias extends CI_Controller {
    
    public function index(){
        $this->db->where("categoria_idcategoria",7);
        $vetor['titulo'] = "Acervo / Categorias";
        $vetor['albums'] = $this->db->get('album')->result();
        $this->template->load("template/galeria", "categoria/index", $vetor);
    }   
    
     public function filtrar(){
         
        $vetor['albums'] = $this->db->get('album')->result();
        $idAlbum = $this->input->post("area");
        $this->db->where("album_idalbum", $idAlbum);
        $vetor['fotos'] = $this->db->get('fotos')->result();
        $fotos = $vetor['fotos'];
        
            if (!empty($fotos)) {
            foreach ($fotos as $foto) {
            
                echo "<a href='#'>";
                  echo "   <img alt='$foto->legenda'
                         src='". base_url("assets/uploads/files/$foto->foto")."'
                         data-image='".base_url("assets/uploads/files/$foto->foto")."'
                         data-description='". $foto->legenda ."'
                         style='display:none'>";
                echo "</a>";
          
            }
        }
        
        //$this->template->load("template/template2", "categoria/index", $vetor);
    }
    
}
