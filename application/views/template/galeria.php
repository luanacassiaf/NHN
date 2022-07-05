<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Núcleo de História Natural</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- ESTILO CSS -->
        <link rel="stylesheet" href="<?= base_url("recursos/unitegallery/css/unite-gallery.css") ?>">

        <!-- Bootstrap Core CSS -->
        <link href="<?= base_url("recursos/css/bootstrap.min.css") ?>" rel="stylesheet">

        <!-- ESTILO CSS -->
        <link rel="stylesheet" href="<?= base_url("recursos/css/estilo-principal.css") ?>">   



        <!-- Custom CSS -->
        <link rel="stylesheet" href="<?= base_url("recursos/css/one-page-wonder.css") ?>">

    </head>

    <body>

        <!--        menu-->
        <?= $this->menu->principal(); ?>



        <!-- Full Width Image Header -->
        <header class="header-image">
            <div class="headline">
                <div class="container">
                    <h2>Museu de História Natural</h2>
                    <h2>Professor Laércio Loures</h2>
                </div>
            </div>
        </header>

        <!-- Page Content -->
        <?php if (isset($titulo)): ?>
            <div class="container">
                <h2 class="featurette-heading"><?= $titulo ?></h2>

            <?php endif; ?>    
            <!-- GALERIA DE FOTOS -->

            <section id="galeria-fotos" class="sessao">
                <?= $contents ?>
            </section>
        </div>



        <hr class="featurette-divider">

        <?= $this->rodape->principal(); ?>

        <!-- JQUERY -->
        <script src="<?= base_url("recursos/js/jquery-11.0.min.js") ?>"></script>


        <!-- SCRIPT DO BOOTSTRAP -->
        <script src="<?= base_url("recursos/js/bootstrap.min.js") ?>"></script>



        <script type="text/javascript" src="<?= base_url("recursos/js/menu_ativador.js") ?>"></script>




        <script type='text/javascript' src='<?= base_url("recursos/unitegallery/js/unitegallery.min.js") ?>'></script>	
        <script type='text/javascript' src='<?= base_url("recursos/unitegallery/themes/tiles/ug-theme-tiles.js") ?>'></script>   

        <!-- Codigo JavaScript -->
        <script type="text/javascript">

            jQuery(document).ready(function () {
                /* Codigo do painel com abas para expandir conteudo ao clicar no icone +*/
                $(".detalhe").on("click", function () {
                    $(this).next().slideToggle(200);
                    $expand = $(this).find(">:first-child");

                    if ($expand.text() == "+") {
                        $expand.text("-");
                    } else {
                        $expand.text("+");
                    }
                });

                /* Codigo para alinhar as imagens da galeria pela extensao da pagina */
                jQuery("#gallery").unitegallery({
                    tiles_type: "columns"
                });

            });
        </script>
    </body>
</html>