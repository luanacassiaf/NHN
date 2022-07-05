<?php

class Categoria_model extends CI_Model {
    
    function __construct() {
        parent::__construct();
       $this->tabela="categoria";
    }
    
        
    function listar_categoria($idcategoria){
        $this->db->select('*');
        $this->db->from($this->tabela);
        $this->db->where("idcategoria", $idcategoria);
        $query = $this->db->get();        
        $row = $query->row();
        return $row->categoria;
    }
  
}
