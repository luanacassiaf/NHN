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

        <script src="<?= base_url("recursos/js/jquery-11.0.min.js") ?>"></script>

    </head>

    <body class="login_adm">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class='col-md-3'></div>
                    <div class="col-md-6">
                        <div class="login-box well">
                            <form action="<?= site_url("site/login/entrar") ?>"  method="post">
                                <legend>Área do Administrador</legend>
                                <div class="form-group">
                                    <label for="usuario">Usuário</label>
                                    <input value='' name="usuario" placeholder="" type="text" class="form-control" />
                                </div>
                                <div class="form-group">
                                    <label for="senha">Senha</label>
                                    <input name="senha" value='' placeholder="" type="password" class="form-control" />
                                </div>

                                <div class="form-group">
                                    <input type="submit" class="btn btn-primary btn-login-submit btn-block m-t-md" value="Entrar" />
                                </div>
                                <div style="text-align: center; font-size: 15px;">
                                    <a href='<?= site_url("site/home") ?>' >Voltar à navegação</a>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>

</html>


