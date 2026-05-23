<?php require_once dirname(__DIR__, 2) . '/Core/Helpers.php'; ?>
<div class="login-card">
    <h1>Techpark CMS</h1>
    <p>Acesso administrativo seguro.</p>

    <form method="post" action="<?= url('login') ?>">
        <?= App\Core\Csrf::field() ?>
        <label>Email</label>
        <input type="email" name="email" required>

        <label>Senha</label>
        <input type="password" name="password" required>

        <button class="btn primary" type="submit">Entrar</button>
    </form>
</div>
