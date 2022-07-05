
<div>
    <br/>
    <!-- SE NÃO ESTIVER VAZIO -->
    <?php if (!empty($fotos)): ?>
        <div id="gallery">

            <?php foreach ($fotos as $foto): ?>
                <a href="#">
                    <img alt="<?= $foto->legenda ?>"
                         src="<?= base_url("assets/uploads/files/$foto->foto") ?>"
                         data-image="<?= base_url("assets/uploads/files/$foto->foto") ?>"
                         data-description="<?= $foto->legenda ?>"/>

                </a>                   
            <?php endforeach; ?>
        </div>
    </div>


<?php else: ?>
    <center><h3>Nenhuma informação encontrada.</h3></center>
<?php endif; ?>

</div>