
<div class="container">

    <div class="featurette" id="about">

        <h2 class="featurette-heading">Apresentação</h2><br/>
        <!-- SE NÃO ESTIVER VAZIO -->
        <?php if (!empty($conteudo->apresentacao)): ?>
            <div class="conteudo_editorTexto" style="text-align:left!important;"><?= $conteudo->apresentacao; ?></div>
        <?php else: ?>
            <center><h3>Nenhuma informação encontrada.</h3></center>
        <?php endif; ?>

        <hr class="featurette-divider">
        <h2 class="featurette-heading">Linhas de pesquisas</h2><br/>
        <!-- SE NÃO ESTIVER VAZIO -->
        <?php if (!empty($conteudo->linhas_pesquisa)): ?>
            <div class="conteudo_editorTexto" style="text-align:left!important;"><?= $conteudo->linhas_pesquisa; ?></div>
        <?php else: ?>
            <center><h3>Nenhuma informação encontrada.</h3></center>
        <?php endif; ?>

        <hr class="featurette-divider">
        <h2 class="featurette-heading">Projetos</h2><br/>
       <!-- SE NÃO ESTIVER VAZIO -->
        <?php if (!empty($conteudo->projetos)): ?>
            <div class="conteudo_editorTexto" style="text-align:left!important;"><?= $conteudo->projetos; ?></div>
        <?php else: ?>
            <center><h3>Nenhuma informação encontrada.</h3></center>
        <?php endif; ?>

        <hr class="featurette-divider">
        <h2 class="featurette-heading">Parceiros</h2><br/>
        <!-- SE NÃO ESTIVER VAZIO -->
        <?php if (!empty($conteudo->parceiros)): ?>
            <div class="conteudo_editorTexto" style="text-align:left!important;"><?= $conteudo->parceiros; ?></div>
        <?php else: ?>
            <center><h3>Nenhuma informação encontrada.</h3></center>
        <?php endif; ?>

    </div>
</div>