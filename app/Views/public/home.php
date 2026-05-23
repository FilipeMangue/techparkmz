<section class="hero">
    <div>
        <span class="eyebrow">Hub tecnológico em Moçambique</span>
        <h1>Inovação, software, segurança eletrónica e transformação digital.</h1>
        <p>A Techpark Mozambique conecta empresas, startups, talentos e tecnologia para criar soluções confiáveis e escaláveis.</p>
        <div class="actions">
            <a class="btn primary" href="<?= url('contactos') ?>">Fale connosco</a>
            <a class="btn secondary" href="<?= url('servicos') ?>">Ver serviços</a>
        </div>
    </div>
</section>

<section class="cards">
    <article><strong>Software</strong><p>Plataformas, websites, portais e aplicativos.</p></article>
    <article><strong>Segurança eletrónica</strong><p>CCTV, controlo de acesso, alarmes e integração.</p></article>
    <article><strong>Startups</strong><p>Incubação, mentoria e programas de inovação.</p></article>
</section>

<section class="section">
    <h2>Serviços em destaque</h2>
    <div class="grid">
        <?php foreach ($services as $service): ?>
            <article class="card">
                <h3><?= e($service['title']) ?></h3>
                <p><?= e($service['summary']) ?></p>
            </article>
        <?php endforeach; ?>
    </div>
</section>
