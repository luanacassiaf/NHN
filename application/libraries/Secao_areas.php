<?php


class Secao_areas {
    
    var $CI;
    
    public function gerar_areas(){
        $this->CI =& get_instance();
        
        $areas = $this->CI->db->get('areas')->result();
        
        $count = 1;
        foreach($areas as $area){
            
          printf("%s\n", "<div class='secao' id='secao_$count'>");
          printf("%s\n", " <div id='trigger$count'><div id='animate$count'>");
          printf("%s\n", "         <div class='transparente'>");
          printf("%s\n", "             <div class='container'>");
          printf("%s\n", "                 <div  class='col-md-12 content'>");
          printf("%s\n", "                     <?php //include('museu.php'); ?>");
          printf("%s\n", "                </div>");
          printf("%s\n", "            </div>  ");                          
          printf("%s\n", "        </div>");
          printf("%s\n", "    </div></div>");
          printf("%s\n", "</div>");
          $count++;  
        }        
        
    }
    
}
