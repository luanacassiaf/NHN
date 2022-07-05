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

        <!-- MENU -->
        <?= $this->menu->principal(); ?>

        <!-- CABEÇALHO -->
        <header class="header-image">
            <div class="headline">
                <div class="container">
                    <h2><?= $titulo_cabecalho ?></h2>
                    <h2>Núcleo de História Natural</h2>
                </div>
            </div>
        </header>

        <!-- CONTEÚDO -->
        <div class="container">
            <br/>
            <div class="row col-md-12">
                <!-- NOME DA ÁREA QUE FOI PESQUISADA -->
                <center><h3 class="titulo-pagina" text-><?= $filtro_pesquisa; ?></h3></center>
                <hr>
            </div>

            <br>
            <div class="form-group">
                <form action="<?= $action_post ?>" method="POST">
                    <div class="row">
                        <div class="col-md-3">
                            <label style=" margin-bottom: 1px;" class="lead" for="area">Área de Pesquisa:</label>
                            <?php if (isset($areas) && !is_null($areas)): ?>
                                <select style="margin-top: 1px;" id="area" name="area" class="form-control">
                                    <option value="0">Listar Todos</option>
                                    <?php foreach ($areas as $area): ?>
                                        <option value="<?php echo $area['idareas']; ?>"><?php echo $area['nome']; ?></option>
                                    <?php endforeach; ?> 
                                </select>
                            <?php endif; ?>
                        </div>

                        <div class="col-md-2">
                            <button class="btn btn-primary btn-block " type="submit" style="margin-top:30px;">Filtrar publicações</button>
                        </div>
                    </div>
                </form>
                <hr>
            </div>
        </div>


        <br>
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