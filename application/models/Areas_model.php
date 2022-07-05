<?php

class Areas_model extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->tabela = "areas";
    }

    function listarTodas() {
        $this->db->select('*');
        $this->db->from($this->tabela);
        $query = $this->db->get();
        return $query->result_array();
    }
        
    function listar_area_porID($idareas){
        $this->db->select('*');
        $this->db->from($this->tabela);
        $this->db->where("idareas", $idareas);
        $query = $this->db->get();        
        $row = $query->row();
        return $row->nome;
    }

}
