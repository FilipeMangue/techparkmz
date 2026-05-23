<h1>Métricas</h1>
<p>Área preparada para analytics interno.</p>

<div class="stats">
    <?php foreach ($metrics as $label => $value): ?>
        <article><strong><?= e($value) ?></strong><span><?= e(str_replace('_', ' ', $label)) ?></span></article>
    <?php endforeach; ?>
</div>
