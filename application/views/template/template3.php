<!DOCTYPE html>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Museu de História Natural</title>

     <!-- ESTILO CSS -->
    <link rel="stylesheet" href="<?= base_url("recursos/css/estilo-principal.css") ?>">   

    
    <!-- Plugin unitegallery CSS -->
    <link rel='stylesheet' href='<?= base_url("recursos/unitegallery/css/unite-gallery.css") ?>' type='text/css' />

    <!-- Bootstrap Core CSS -->
    <link href="<?= base_url("recursos/css/bootstrap.min.css") ?>" rel="stylesheet">

    <!-- ESTILO CSS -->
    <link rel="stylesheet" href="<?= base_url("recursos/unitegallery/css/unite-gallery.css") ?>">

    <!-- Custom CSS -->
    <link href="css/one-page-wonder.css" rel="stylesheet">
</head>

<body>

    <!-- Navigation -->
    <?php include("menu.php"); ?>

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
    <div class="container">
        <h2 class="featurette-heading">Acervo /
            <span class="text-muted">Fotos</span>
        </h2>
        <br/>
        <!-- GALERIA DE FOTOS -->
        <section id="galeria-fotos" class="sessao">
            <div class="container">
                  <div class="col-lg-12 t">
                    <?= $contents ?>
                </div>
            </div>
        </section>
    </div>

    <hr class="featurette-divider">

    <?= $this->rodape->principal(); ?>

    <!-- jQuery -->
    <script src="<?= base_url("recursos/js/jquery-11.0.min.js") ?>"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?= base_url("recursos/js/bootstrap.mim.js") ?>"></script>


    <script type='text/javascript' src='<?= base_url("recursos/unitegallery/js/unitegallery.min.js") ?>'></script>
    <script type='text/javascript' src='<?= base_url("unitegallery/themes/tiles/ug-theme-tiles.js") ?>'></script>

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
                tiles_type: "justified"
            });

        });
    </script>

</body>

</html>
