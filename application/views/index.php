<script type='text/javascript'>
    jQuery(document).ready(function(){
        filtrar_ajax();
        $("#idarea").change(function () {
           filtrar_ajax();
        });
    });
    
    function filtrar_ajax(){
         /* get the action attribute from the <form action=""> element */
            var $form = $("#form_consulta"),
                    url = $form.attr('action');

            /* Send the data using post with element id name and name2*/
            var posting = $.post(url, {area: $('#idarea').val()});

            /* Alerts the results */
            posting.done(function (data) {                
                $("#gallery").html(data);
                $("#gallery").unitegallery();
            });
    }        
</script>



<div>
    <div class="form-group area">
        <form method="post" action="<?= site_url("site/categorias/filtrar") ?>" id="form_consulta">
           

            <select style="width: 200px; margin-top: 1px;" id="idarea" name="area" class="form-control">
                <?php
                if (!empty($albums))
                    foreach ($albums as $album):
                        ?>
                        <option value="<?= $album->idalbum ?>"><?= $album->nome ?></option>
                    <?php endforeach; ?>
            </select>
        </form>
    </div>
    <br/>

    <!--                        Galeria de Fotos-->
    <div id="gallery" style="display:none;">

    </div>
    
</div>