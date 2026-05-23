<section class="events-hero">
    <div>
        <span class="eyebrow">Eventos Techpark</span>
        <h1>Encontros que aproximam tecnologia, inovação e pessoas.</h1>
        <p>
            Workshops, conferências, formações, feiras e encontros para fortalecer
            o ecossistema tecnológico em Moçambique.
        </p>
    </div>
</section>

<section class="tp-intro">
    <div>
        <span class="section-kicker">Agenda</span>
        <h2>Cronograma de eventos, formações e iniciativas.</h2>
    </div>

    <p>
        A Techpark promove eventos para partilha de conhecimento, demonstração de
        soluções, networking, capacitação e criação de oportunidades para empresas,
        startups, estudantes e profissionais.
    </p>
</section>

<section class="section soft-section">
    <div class="section-title center">
        <div>
            <span class="section-kicker">Próximos eventos</span>
            <h2>Agenda Techpark</h2>
            <p>Eventos pensados para criar conhecimento, colaboração e impacto real.</p>
        </div>
    </div>

    <div class="events-timeline">
        <?php foreach ($events as $event): ?>
            <article class="event-card">
                <div class="event-date">
                    <strong><?= e($event['date']) ?></strong>
                    <span><?= e($event['status']) ?></span>
                </div>

                <div class="event-content">
                    <span class="service-badge"><?= e($event['type']) ?></span>
                    <h3><?= e($event['title']) ?></h3>
                    <p><?= e($event['summary']) ?></p>
                    <a class="service-link" href="<?= url('contactos') ?>">Manifestar interesse →</a>
                </div>
            </article>
        <?php endforeach; ?>
    </div>
</section>

<section class="section split-section">
    <div>
        <span class="section-kicker">Tipos de eventos</span>
        <h2>Formatos para aprender, conectar e inovar.</h2>
        <p>
            A nossa agenda pode incluir encontros técnicos, formações práticas,
            apresentações de startups, painéis com especialistas e programas de capacitação.
        </p>
        <a class="btn primary" href="<?= url('contactos') ?>">Propor evento</a>
    </div>

    <div class="feature-list">
        <article>
            <strong>Workshops técnicos</strong>
            <p>Formações práticas em software, segurança, redes, inovação e novas tecnologias.</p>
        </article>

        <article>
            <strong>Demo days</strong>
            <p>Apresentação de startups, produtos digitais, protótipos e soluções locais.</p>
        </article>

        <article>
            <strong>Conferências e networking</strong>
            <p>Encontros para empresas, parceiros, investidores, instituições e comunidade tecnológica.</p>
        </article>
    </div>
</section>

<section class="section innovation-band">
    <div>
        <span class="section-kicker">Participação</span>
        <h2>Quer participar, apoiar ou organizar um evento com a Techpark?</h2>
        <p>
            Estamos abertos a parcerias com empresas, instituições, escolas,
            universidades, comunidades tecnológicas e startups.
        </p>
    </div>

    <a class="btn secondary" href="<?= url('contactos') ?>">Contactar equipa</a>
</section>