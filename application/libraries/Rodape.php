<?php

class Rodape {
    
    var $CI;
    

    public function site_url($str){
        return site_url($str);
    }
    
    public function principal() {

        $str = <<<EOD
            <!--RODAPÉ-->
            <div id="rodape">
                <p class="texto-rodape">Todos os direitos reservados &copy Núcleo de História Natural </p>
                <p class="texto-rodape">Desenvolvido por: Gustavo Oliveira | João Couto | Luana Freitas | Marcos Miguel | Mariana Araujo 
            </div>             
EOD;
        return $str;
    }

}
