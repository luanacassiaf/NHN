<div>

    <div class="form-group area">
        <form method="post" action="<?= site_url("site/categorias/filtrar")?>">
            <label style="width: 200px; margin-bottom: 1px;" class="lead" for="area">Categorias</label>

            <select style="width: 200px; margin-top: 1px;" id="time" name="area" class="form-control" onchange="this.form.submit()">
                <option value=""></option>
                <?php if (!empty($albums))
                      foreach ($albums as $album): ?>
                    <option value="<?= $album->idalbum ?>"><?= $album->nome ?></option>
                <?php endforeach; ?>
            </select>
        </form>
    </div>
    <br/>
    <!--                        Galeria de Fotos-->
    <div id="gallery" style="display:none;">
        
        <?php if (!empty($foto2)){
            foreach($foto2 as $foto){
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