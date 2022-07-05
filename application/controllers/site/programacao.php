<?php

class programacao extends CI_Controller {

    public function index() {

        //Pesquisa as datas unicas dos eventos
        $this->db->group_by("data"); //agrupa
        $this->db->order_by("data"); //ordena
        $datas = $this->db->get('programacao')->result();
        $obj_eventos = array();

        foreach ($datas as $data) {
            $diaEvento = array();

            //`Pesquisa apenas os eventos que contem informações reais
            $this->db->where("data", $data->data);
            $this->db->where("evento !=", '');
            $eventos = $this->db->get('programacao')->result();

            //cria um vetor com os dados dos eventos pesquisados
            foreach ($eventos as $row_evento) {
                $evento = new Evento();
                $evento->hora = $row_evento->horario;
                $evento->evento = $row_evento->evento;
                $diaEvento[] = $evento;
            }
            if (count($diaEvento) != 0) { //Confere se o dia tem eventos válidos
                $obj_eventos[$data->data] = $diaEvento; //Cria um vetor com as datas e insere os eventos
            }
        }
        $vetor['programacao'] = $obj_eventos;
        $this->template->load("template/galeria", "programacao/index", $vetor);
    }

}

class DiaEvento {

    var $data;
    var $evento;

}

class Evento {

    var $evento;
    var $hora;

}
