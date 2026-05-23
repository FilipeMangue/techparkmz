<section class="section">
    <h1>Serviços</h1>
    <p>Conheça as principais áreas de atuação da Techpark Mozambique.</p>

    <div class="grid">
        <?php foreach ($services as $service): ?>
            <article class="card">
                <h3><?= e($service['title']) ?></h3>
                <p><?= e($service['summary']) ?></p>
            </article>
        <?php endforeach; ?>
    </div>
</section>
