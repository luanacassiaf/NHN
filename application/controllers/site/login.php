<?php

class login extends CI_Controller {
    
    public function index() {
        $this->load->view("login/login");
    }

    public function entrar() {
        $usuario = $this->input->post("usuario");
        $senha = $this->input->post("senha");

        $this->db->where("login", $usuario);
        $this->db->where("senha", $senha);
        $resultado = $this->db->get("usuario");
        
        if ($resultado->num_rows() == 1) {
            $usuario = $resultado->row();
            $this->session->set_userdata("usuario", $usuario->login);
            redirect("site/tela/tela_admin");
        } else {
            redirect("site/login");
        }
    }

    public function sair() {
        $this->session->set_userdata("usuario", "");
        redirect("site/login");
    }

}
