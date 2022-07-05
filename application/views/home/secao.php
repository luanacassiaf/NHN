<?php
$count = 1;
foreach ($conteudos as $conteudo) {
    ?>
    <div class="secao" id="secao_<?= $count ?>">
        <div id="trigger<?= $count ?>">
            <div id="animate<?= $count ?>">
                <div class="transparente">
                    <div class="container">
                        <div  class="col-md-12 content">
                            <div id="informacao" class="informacao">
                                <p class="titulo">
                                    <?= $conteudo->local ?>
                                </p>
                                <hr>
                                <div>
                                    <!-- SE NÃO ESTIVER VAZIO -->
                                    <?php if (!empty($conteudo->texto)): ?>
                                        <p class="conteudo_editorTexto"><?= $conteudo->texto; ?></p>
                                    <?php else: ?>
                                        <h3>Nenhuma informação encontrada.</h3>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>                            
                </div>
            </div>
        </div>
    </div>


    <?php
    $count++;
}
?>
