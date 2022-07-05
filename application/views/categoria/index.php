<!-- JQUERY -->
<script src="<?= base_url("recursos/js/jquery-11.0.min.js") ?>"></script>


<script type='text/javascript'>
    jQuery(document).ready(function () {
        filtrar_ajax();
        $("#idarea").change(function () {
            filtrar_ajax();
        });
    });

    function filtrar_ajax() {
        /* get the action attribute from the <form action=""> element */
        var $form = $("#form_consulta"),
                url = $form.attr('action');

        /* Send the data using post with element id name and name2*/
        var posting = $.post(url, {area: $('#idarea').val()});

        /* Alerts the results */
        posting.done(function (data) {
            if (data) {
                $(".sem_foto").hide();
                $("#gallery").show();
                $("#gallery").html(data);
                $("#gallery").unitegallery();
            } else {
                $("#gallery").hide();
                $(".sem_foto").show();
            }
        });
    }
</script>



<div>
    <div class="form-group area">
        <form method="post" action="<?= site_url("site/categorias/filtrar") ?>" id="form_consulta">

            <?php if (!empty($albums)) { ?>
                <select style="width: 200px; margin-top: 1px;" id="idarea" name="area" class="form-control">
                    <?php foreach ($albums as $album): ?>
                        <option value="<?= $album->idalbum ?>"><?= $album->nome ?></option>
                    <?php endforeach; ?>
                </select>
                <br/>

                <!-- Galeria de Fotos-->
                <div id="gallery" >

                </div>
                <!--SEM FOTOS NO ÁLBUM-->
                <div class="sem_foto"> <center><h3>Nenhuma informação encontrada.</h3></center>
                </div>
                <?php
            }else {
                //SEM ÁLBUNS
                echo " <center><h3>Nenhuma informação encontrada.</h3></center>";
            }
            ?>

        </form>
    </div>


</div>