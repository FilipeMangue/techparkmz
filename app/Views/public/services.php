<section class="services-hero">
    <div>
        <span class="eyebrow">Serviços Techpark</span>
        <h1>Soluções tecnológicas para empresas, instituições e startups.</h1>
        <p>
            Da estratégia à implementação, apoiamos organizações com software,
            infraestrutura, segurança eletrónica, formação e inovação digital.
        </p>
    </div>
</section>

<section class="tp-intro">
    <div>
        <span class="section-kicker">Áreas de atuação</span>
        <h2>Serviços pensados para resolver desafios reais.</h2>
    </div>
    <p>
        A Techpark Mozambique combina conhecimento técnico, segurança e visão
        de crescimento para entregar soluções confiáveis e escaláveis.
    </p>
</section>

<section class="section soft-section">
    <div class="grid">
        <?php foreach ($services as $service): ?>
            <article class="card service-card">
                <span class="service-badge">Serviço</span>
                <h3><?= e($service['title']) ?></h3>
                <p><?= e($service['summary']) ?></p>
                <a class="service-link" href="<?= url('contactos') ?>">Solicitar informação →</a>
            </article>
        <?php endforeach; ?>
    </div>
</section>

<section class="section split-section">
    <div>
        <span class="section-kicker">Como trabalhamos</span>
        <h2>Processo simples, seguro e orientado a resultados.</h2>
        <p>
            Cada projeto é analisado com foco em impacto, segurança, usabilidade,
            performance e possibilidade de crescimento futuro.
        </p>
        <a class="btn primary" href="<?= url('contactos') ?>">Falar com a Techpark</a>
    </div>

    <div class="feature-list">
        <article>
            <strong>1. Diagnóstico</strong>
            <p>Entendemos o problema, o contexto e os objetivos da organização.</p>
        </article>

        <article>
            <strong>2. Proposta técnica</strong>
            <p>Definimos solução, tecnologia, prazo, riscos e plano de execução.</p>
        </article>

        <article>
            <strong>3. Implementação</strong>
            <p>Desenvolvemos, testamos, documentamos e acompanhamos a entrega.</p>
        </article>
    </div>
</section>