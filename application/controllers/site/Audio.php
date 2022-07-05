<?php


class Audio extends CI_Controller {
    
    public function index(){  
        $this->template->load("template/audios", "audios/audio");
    } 
   
}
