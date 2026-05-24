<?php require_once dirname(__DIR__, 2) . '/Core/Helpers.php'; ?>

<div class="cms-login-page">
    <section class="cms-login-brand">
        <div class="cms-login-logo">
            <img src="<?= asset('img/logo-techpark.jpeg') ?>" alt="Techpark Mozambique">
            <span>Techpark Mozambique</span>
        </div>

        <h1>Gestão segura da plataforma Techpark.</h1>
        <p>
            Acesso restrito ao CMS para gerir conteúdos, serviços, métricas,
            auditoria e operações digitais da Techpark Mozambique.
        </p>

        <div class="cms-login-points">
            <span>Auditoria ativa</span>
            <span>CMS protegido</span>
            <span>Gestão centralizada</span>
        </div>
    </section>

    <section class="login-card premium-login-card">
        <span class="section-kicker">Área administrativa</span>
        <h2>Entrar no CMS</h2>
        <p>Acesso administrativo seguro.</p>

        <form method="post" action="<?= url('login') ?>">
            <?= App\Core\Csrf::field() ?>

            <label>Email</label>
            <input type="email" name="email" placeholder="admin@techpark.co.mz" required autocomplete="email">

            <label>Senha</label>
            <input type="password" name="password" placeholder="A sua senha" required autocomplete="current-password">

            <button class="btn primary login-btn" type="submit">Entrar com segurança</button>
        </form>

        <div class="login-security-note">
            Acesso monitorado. Todas as ações relevantes podem ser registadas para auditoria.
        </div>
    </section>
</div>