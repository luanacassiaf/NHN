<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Núcleo de História Natural</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- BOOTSTRAP CSS -->
        <link href="<?= base_url("recursos/css/bootstrap.min.css") ?>" rel="stylesheet">

        <!-- ESTILO CSS -->
        <link rel="stylesheet" href="<?= base_url("recursos/css/estilo-principal.css") ?>">   

        <!-- Custom CSS -->
        <link href="<?= base_url("recursos/css/one-page-wonder.css") ?>" rel="stylesheet">

    </head>

    <body>

        <!--        menu-->
        <?= $this->menu->principal(); ?>
        <!--        final do menu-->



        <!-- Full Width Image Header -->
        <header class="header-image">
            <div class="headline">
                <div class="container">
                    <h2><?= $conteudo->nome; ?></h2>
                    <h2>Núcleo de História Natural</h2>
                </div>
            </div>
        </header>

        <!-- Page Content -->
        <?= $contents; ?>

        <hr class="featurette-divider">

        <?= $this->rodape->principal(); ?>

        <!-- JQUERY -->
        <script src="<?= base_url("recursos/js/jquery-11.0.min.js") ?>"></script>
        <script type="text/javascript" src="<?= base_url("recursos/js/menu_ativador.js") ?>"></script>
        <!-- SCRIPT DO BOOTSTRAP -->
        <script src="<?= base_url("recursos/js/bootstrap.min.js") ?>"></script>

    </body>
</html>