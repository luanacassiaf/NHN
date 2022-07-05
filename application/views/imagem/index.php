<div>

    <br/>
    <!--                        Galeria de Fotos-->
    <div id="gallery" style="display:none;">
        
        <?php if (!empty($imagem)){
            foreach($imagem as $foto){
            ?>
        <a href="#">
            <img alt="<?= $foto->legenda ?>"
                 src="<?= base_url("assets/uploads/files/$foto->foto") ?>"
                 data-image="<?= base_url("assets/uploads/files/$foto->foto") ?>"
                 data-description="<?= $foto->legenda ?>"
                 style="display:none">
        </a>                             
        <?php } }?>
    </div>

</div>