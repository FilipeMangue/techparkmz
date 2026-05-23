<div class="page-head">
    <div>
        <h1>Serviços</h1>
        <p>Gerir serviços apresentados no website.</p>
    </div>
    <a class="btn primary" href="<?= url('admin/servicos/criar') ?>">Novo serviço</a>
</div>

<table>
    <thead>
        <tr><th>Título</th><th>Estado</th><th>Ordem</th></tr>
    </thead>
    <tbody>
        <?php foreach ($services as $service): ?>
            <tr>
                <td><?= e($service['title']) ?></td>
                <td><?= e($service['status']) ?></td>
                <td><?= e($service['sort_order']) ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
