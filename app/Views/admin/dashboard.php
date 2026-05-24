<section class="admin-hero dashboard-hero">
    <div>
        <span class="admin-kicker">Painel Administrativo</span>
        <h1>Dashboard Techpark</h1>
        <p>
            Bem-vindo ao CMS da Techpark Mozambique. Acompanhe conteúdos,
            serviços, contactos, auditoria e métricas principais da plataforma.
        </p>
    </div>
</section>

<div class="stats premium-stats">
    <article>
        <span class="stat-icon">
            <svg viewBox="0 0 24 24" fill="none">
                <path d="M4 7h16M4 12h16M4 17h10" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/>
            </svg>
        </span>
        <div>
            <strong><?= e($stats['services'] ?? 0) ?></strong>
            <span>Serviços</span>
        </div>
    </article>

    <article>
        <span class="stat-icon">
            <svg viewBox="0 0 24 24" fill="none">
                <path d="M16 21v-2a4 4 0 0 0-8 0v2" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/>
                <circle cx="12" cy="7" r="4" stroke="currentColor" stroke-width="1.8"/>
            </svg>
        </span>
        <div>
            <strong><?= e($stats['users'] ?? 0) ?></strong>
            <span>Utilizadores</span>
        </div>
    </article>

    <article>
        <span class="stat-icon">
            <svg viewBox="0 0 24 24" fill="none">
                <path d="M12 3L20 6v5c0 5-3.5 9-8 10-4.5-1-8-5-8-10V6l8-3Z" stroke="currentColor" stroke-width="1.8" stroke-linejoin="round"/>
            </svg>
        </span>
        <div>
            <strong><?= e($stats['audit_logs'] ?? 0) ?></strong>
            <span>Registos de auditoria</span>
        </div>
    </article>

    <article>
        <span class="stat-icon">
            <svg viewBox="0 0 24 24" fill="none">
                <path d="M4 5h16v12H7l-3 3V5Z" stroke="currentColor" stroke-width="1.8" stroke-linejoin="round"/>
            </svg>
        </span>
        <div>
            <strong><?= e($stats['contacts'] ?? 0) ?></strong>
            <span>Contactos recebidos</span>
        </div>
    </article>
</div>

<section class="dashboard-grid">
    <article class="dash-card quick-card">
        <div class="dash-card-head">
            <div>
                <span class="admin-kicker">Gestão</span>
                <h2>Ações rápidas</h2>
            </div>
        </div>

        <div class="quick-actions">
            <a class="quick-action primary" href="<?= url('admin/servicos/criar') ?>">
                <svg viewBox="0 0 24 24" fill="none">
                    <path d="M12 5v14M5 12h14" stroke="currentColor" stroke-width="1.9" stroke-linecap="round"/>
                </svg>
                <span>Novo serviço</span>
            </a>

            <a class="quick-action" href="<?= url('admin/servicos') ?>">
                <svg viewBox="0 0 24 24" fill="none">
                    <path d="M4 7h16M4 12h16M4 17h10" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/>
                </svg>
                <span>Gerir serviços</span>
            </a>

            <a class="quick-action" href="<?= url('admin/auditoria') ?>">
                <svg viewBox="0 0 24 24" fill="none">
                    <path d="M12 3L20 6v5c0 5-3.5 9-8 10-4.5-1-8-5-8-10V6l8-3Z" stroke="currentColor" stroke-width="1.8" stroke-linejoin="round"/>
                </svg>
                <span>Ver auditoria</span>
            </a>
        </div>
    </article>

    <article class="dash-card">
        <div class="dash-card-head">
            <div>
                <span class="admin-kicker">Sistema</span>
                <h2>Estado da plataforma</h2>
            </div>
        </div>

        <div class="dash-list premium-list">
            <div>
                <span class="status-dot success"></span>
                <div>
                    <strong>CMS ativo</strong>
                    <p>Gestão inicial de serviços e dashboard operacional.</p>
                </div>
            </div>

            <div>
                <span class="status-dot success"></span>
                <div>
                    <strong>Auditoria ativa</strong>
                    <p>Login, logout e criação de serviços já são registados.</p>
                </div>
            </div>

            <div>
                <span class="status-dot warning"></span>
                <div>
                    <strong>Segurança base</strong>
                    <p>CSRF, sessões seguras e password hashing implementados.</p>
                </div>
            </div>
        </div>
    </article>
</section>

<section class="dashboard-grid">
    <article class="dash-card">
        <div class="dash-card-head">
            <div>
                <span class="admin-kicker">Evolução</span>
                <h2>Próximos módulos recomendados</h2>
            </div>
        </div>

        <div class="dash-list premium-list">
            <div><span class="status-dot"></span><strong>Gestão de páginas institucionais</strong></div>
            <div><span class="status-dot"></span><strong>Contactos e leads</strong></div>
            <div><span class="status-dot"></span><strong>Media manager com uploads seguros</strong></div>
            <div><span class="status-dot"></span><strong>Eventos, recursos e startups</strong></div>
        </div>
    </article>

    <article class="dash-card">
        <div class="dash-card-head">
            <div>
                <span class="admin-kicker">Segurança</span>
                <h2>Boas práticas</h2>
            </div>
        </div>

        <div class="dash-list premium-list">
            <div><span class="status-dot warning"></span><strong>Trocar a senha padrão do administrador.</strong></div>
            <div><span class="status-dot success"></span><strong>Usar HTTPS em produção.</strong></div>
            <div><span class="status-dot"></span><strong>Ativar backups automáticos.</strong></div>
            <div><span class="status-dot"></span><strong>Rever logs de auditoria regularmente.</strong></div>
        </div>
    </article>
</section>