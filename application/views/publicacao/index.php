<div class="container">
    <!-- SE NÃO ESTIVER VAZIO -->
    <?php if (!empty($publicacoes)): ?>
        <?php foreach ($publicacoes as $publicacao): ?>
            <div class="row"><!-- PUBLICACAO -->
                <div class="col-md-12">
                    <div id="postlist">
                        <div class="panel">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <h3 class="pull-left titulo-publicacao"><?= $publicacao['titulo']; ?><br/>
                                            <span class="pull-left autor-publicacao"><?= $publicacao['autor']; ?></span></h3>
                                    </div>
                                </div>
                            </div>
                            <div class="panel-body texto-publicacao">
                                <div style="text-align:left!important;"><?= $publicacao['resumo']; ?></div>
                                <a class="pull-left btn btn-primary" href="<?= base_url("assets/uploads/files/" . $publicacao['arquivo']); ?>" target="_blank">Abrir arquivo</a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    <?php else: ?>
        <center><h3>Nenhuma informação encontrada.</h3></center>
    <?php endif; ?>
</div>
<!-- /.container -->
