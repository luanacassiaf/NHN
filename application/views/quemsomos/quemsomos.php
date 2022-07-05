<br/>
<!-- SE ESTÁ VAZIO -->
<?php if (empty($conteudo->texto)): ?>
    <center><h3>Nenhuma informação encontrada.</h3></center>
<?php else: ?>
    <div class="conteudo_editorTexto"><?= $conteudo->texto; ?></div>
<?php endif; ?>
    

