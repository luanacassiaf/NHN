<br/>
<!-- SE NÃO TENHO ou ESTÁ VAZIO -->
<?php if (!isset($conteudo->texto) or is_null($conteudo->texto)): ?>
    <center><h3>Nenhuma informação encontrada.</h3></center>
<?php else: ?>
    <div class="conteudo_editorTexto"><?= $conteudo->texto; ?></div>
<?php endif; ?>
    
