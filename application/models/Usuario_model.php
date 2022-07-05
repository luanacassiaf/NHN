<?php

class Usuario_model extends CI_Model{
    
    var $nome;
    var $cpf;
    var $telefone;
    var $endereco;
    
    public function inserir(){
        $this->nome = $this->input->post('nome');
        $this->cpf = $this->input->post('cpf');
        $this->telefone = $this->input->post('telefone');
        $this->endereco = $this->input->post('endereco');
        $this->db->insert('usuario', $this);
    }
    
    public function obterTodos(){     
        return $this->db->get('usuario')->result();
    }
    
    public function apagar($idUsuario){
        $this->db->where("idUsuario", $idUsuario);
        $this->db->delete('usuario');
    }
    
    public function obterUsuario($idUsuario){
        $this->db->where("idUsuario", $idUsuario);
        return $this->db->get('usuario')->row();
    }
    
    public function atualizar(){
        $this->nome = $this->input->post('nome');
        $this->cpf = $this->input->post('cpf');
        $this->telefone = $this->input->post('telefone');
        $this->endereco = $this->input->post('endereco');
        $id = $this->input->post('id');
        $this->db->where("idUsuario", $id);
        $this->db->update('usuario', $this);
    }
}
