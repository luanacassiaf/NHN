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

        <?php foreach ($css_files as $file): ?>
            <link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
        <?php endforeach; ?>
        <?php foreach ($js_files as $file): ?>
            <script src="<?php echo $file; ?>"></script>
        <?php endforeach; ?>
    </head>

    <body>
 
        <?= $this->menuad->principal(); ?>
        
        <div class="container">
            <br><br>
            <h2 class="titulo_crud"><?= $titulo_crud; ?></h2>
            <hr>
            <?= $output; ?>
        </div>
        
        <hr class="featurette-divider">

        <!-- JS --> 
        <script type="text/javascript" src="<?= base_url("recursos/js/menu_ativador.js") ?>"></script>
        <script src="<?= base_url("recursos/js/bootstrap.min.js") ?>"></script>


    </body>
</html>
