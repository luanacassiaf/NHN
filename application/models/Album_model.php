<?php

class Album_model extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->tabela = "album";
    }

    function listar_album($idalbum) {
        $this->db->select('*');
        $this->db->from($this->tabela);
        $this->db->where("idalbum", $idalbum);
        $query = $this->db->get();
        $row = $query->row();
        return $row->nome;
    }

}
