<?php

class Publicacao_model extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->tabela = "publicacoes";
    }

    function buscarTodas() {
        return $this->db->get("publicacoes")->result();
    }

    function listarTodas_porTipo($tipo) {
        $this->db->select('*');
        $this->db->from($this->tabela);
        $this->db->where("tipo", $tipo);
        $query = $this->db->get();
        return $query->result_array();
    }

    function listarTodas_porTipo_Area($tipo, $idarea) {
        $this->db->select('*');
        $this->db->from($this->tabela);
        $this->db->where("tipo", $tipo);
        $this->db->where("areas_idareas", $idarea);
        $query = $this->db->get();
        return $query->result_array();
    }

}
