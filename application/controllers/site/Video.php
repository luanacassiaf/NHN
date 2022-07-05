<?php


class Video extends CI_Controller {
    
    public function index(){  
        
        $vetor['multimidia'] = $this->db->get('multimidia')->row();
        $this->template->load("template/videos", "video/video", $vetor);
    } 
   
}
