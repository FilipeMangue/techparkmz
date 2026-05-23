<section class="admin-hero">
    <h1>Dashboard Techpark</h1>
    <p>
        Bem-vindo ao CMS da Techpark Mozambique. Acompanhe conteúdos,
        serviços, contactos, auditoria e métricas principais da plataforma.
    </p>
</section>

<div class="stats">
    <article>
        <strong><?= e($stats['services']) ?></strong>
        <span>Serviços</span>
    </article>

    <article>
        <strong><?= e($stats['users']) ?></strong>
        <span>Utilizadores</span>
    </article>

    <article>
        <strong><?= e($stats['audit_logs']) ?></strong>
        <span>Registos de auditoria</span>
    </article>

    <article>
        <strong><?= e($stats['contacts']) ?></strong>
        <span>Contactos recebidos</span>
    </article>
</div>

<section class="dashboard-grid">
    <article class="dash-card">
        <h2>Ações rápidas</h2>

        <div class="actions">
            <a class="btn primary" href="<?= url('admin/servicos/criar') ?>">Novo serviço</a>
            <a class="btn light" href="<?= url('admin/servicos') ?>">Gerir serviços</a>
            <a class="btn light" href="<?= url('admin/auditoria') ?>">Ver auditoria</a>
        </div>
    </article>

    <article class="dash-card">
        <h2>Estado da plataforma</h2>

        <div class="dash-list">
            <div>
                <strong>CMS ativo</strong>
                <p>Gestão inicial de serviços e dashboard operacional.</p>
            </div>

            <div>
                <strong>Auditoria ativa</strong>
                <p>Login, logout e criação de serviços já são registados.</p>
            </div>

            <div>
                <strong>Segurança base</strong>
                <p>CSRF, sessões seguras e password hashing implementados.</p>
            </div>
        </div>
    </article>
</section>

<section class="dashboard-grid">
    <article class="dash-card">
        <h2>Próximos módulos recomendados</h2>

        <div class="dash-list">
            <div>Gestão de páginas institucionais</div>
            <div>Contactos e leads</div>
            <div>Media manager com uploads seguros</div>
            <div>Eventos, recursos e startups</div>
        </div>
    </article>

    <article class="dash-card">
        <h2>Boas práticas</h2>

        <div class="dash-list">
            <div>Trocar a senha padrão do administrador.</div>
            <div>Usar HTTPS em produção.</div>
            <div>Ativar backups automáticos.</div>
            <div>Rever logs de auditoria regularmente.</div>
        </div>
    </article>
</section>