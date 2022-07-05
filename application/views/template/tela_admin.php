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
        <?= $this->menuad->principal(); ?>
        <!--        final do menu-->

        <?php echo $contents; ?>
        <!-- SCRIPT DO BOOTSTRAP -->
        <script src="<?= base_url("recursos/js/jquery-11.0.min.js") ?>"></script>
        <script type="text/javascript" src="<?= base_url("recursos/js/menu_ativador.js") ?>"></script>
        <script src="<?= base_url("recursos/js/bootstrap.min.js") ?>"></script>

    </body>
</html>
