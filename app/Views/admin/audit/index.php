<h1>Auditoria</h1>
<p>Registo das principais ações realizadas na plataforma.</p>

<table>
    <thead>
        <tr><th>Data</th><th>Utilizador</th><th>Módulo</th><th>Ação</th><th>Descrição</th><th>IP</th></tr>
    </thead>
    <tbody>
        <?php foreach ($logs as $log): ?>
            <tr>
                <td><?= e($log['created_at']) ?></td>
                <td><?= e($log['user_name']) ?></td>
                <td><?= e($log['module']) ?></td>
                <td><?= e($log['action']) ?></td>
                <td><?= e($log['description']) ?></td>
                <td><?= e($log['ip_address']) ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
