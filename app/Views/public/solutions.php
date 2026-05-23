<section class="solutions-hero">
    <div>
        <span class="eyebrow">Soluções Techpark</span>
        <h1>Produtos digitais criados em Moçambique para resolver desafios reais.</h1>
        <p>
            Desenvolvemos plataformas e soluções próprias, pensadas para empresas,
            instituições, startups e comunidades moçambicanas, com potencial para o mundo.
        </p>
    </div>
</section>

<section class="tp-intro">
    <div>
        <span class="section-kicker">De Moçambique para o mundo</span>
        <h2>Soluções feitas por quem entende o contexto local.</h2>
    </div>

    <p>
        A Techpark Mozambique desenvolve produtos digitais com foco em segurança,
        simplicidade, escalabilidade e impacto. Cada solução nasce para responder
        a necessidades concretas do mercado moçambicano, mas com visão global.
    </p>
</section>

<section class="section soft-section">
    <div class="section-title center">
        <div>
            <span class="section-kicker">Produtos e plataformas</span>
            <h2>O que estamos a construir</h2>
            <p>
                Soluções próprias que podem ser adaptadas para empresas,
                instituições públicas, organizações, escolas, incubadoras e startups.
            </p>
        </div>
    </div>

    <div class="grid solutions-grid">
        <?php foreach ($solutions as $solution): ?>
            <article class="card solution-card">
                <span class="service-badge"><?= e($solution['category']) ?></span>
                <h3><?= e($solution['title']) ?></h3>
                <p><?= e($solution['summary']) ?></p>
                <a class="service-link" href="<?= url('contactos') ?>">Solicitar demonstração →</a>
            </article>
        <?php endforeach; ?>
    </div>
</section>

<section class="section split-section">
    <div>
        <span class="section-kicker">Nossa visão</span>
        <h2>Tecnologia moçambicana com padrão internacional.</h2>
        <p>
            Queremos criar produtos que não sejam apenas websites ou sistemas,
            mas plataformas úteis, seguras, auditáveis e capazes de gerar valor
            para pessoas, empresas e instituições.
        </p>
        <a class="btn primary" href="<?= url('contactos') ?>">Apresentar necessidade</a>
    </div>

    <div class="feature-list">
        <article>
            <strong>Produtos adaptáveis</strong>
            <p>Soluções que podem ser ajustadas por setor, dimensão e necessidade operacional.</p>
        </article>

        <article>
            <strong>Segurança e auditoria</strong>
            <p>Registos, permissões, controlo de acessos e rastreabilidade desde a base.</p>
        </article>

        <article>
            <strong>Escalabilidade</strong>
            <p>Preparadas para evoluir, integrar APIs, crescer em módulos e suportar novos mercados.</p>
        </article>
    </div>
</section>

<section class="section innovation-band">
    <div>
        <span class="section-kicker">Impacto</span>
        <h2>Feito por moçambicanos. Pensado para competir globalmente.</h2>
        <p>
            Acreditamos que Moçambique pode produzir tecnologia de qualidade,
            útil para o mercado local e preparada para atravessar fronteiras.
        </p>
    </div>

    <a class="btn secondary" href="<?= url('contactos') ?>">Criar solução connosco</a>
</section>