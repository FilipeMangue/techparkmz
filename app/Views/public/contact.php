<section class="contact-hero">
    <div>
        <span class="eyebrow">Contactos</span>
        <h1>Vamos construir ligações que geram tecnologia, confiança e impacto.</h1>
        <p>
            A Techpark Mozambique está aberta a clientes, startups, comunidade,
            parceiros, investidores e organizações que procuram soluções digitais confiáveis.
        </p>
    </div>
</section>

<section class="tp-intro">
    <div>
        <span class="section-kicker">Ponto de ligação</span>
        <h2>Fale connosco conforme a sua necessidade.</h2>
    </div>

    <p>
        Seja para solicitar uma proposta, apresentar uma startup, criar uma parceria,
        participar em eventos ou conhecer melhor a Techpark, este é o canal certo.
    </p>
</section>

<section class="section soft-section">
    <div class="grid">
        <?php foreach ($contactOptions as $option): ?>
            <article class="card contact-option-card">
                <span class="service-badge"><?= e($option['action']) ?></span>
                <h3><?= e($option['title']) ?></h3>
                <p><?= e($option['summary']) ?></p>
            </article>
        <?php endforeach; ?>
    </div>
</section>

<section class="section contact-section">
    <div class="contact-form-card">
        <span class="section-kicker">Mensagem</span>
        <h2>Envie a sua solicitação</h2>
        <p>
            Preencha o formulário e a equipa Techpark fará o devido acompanhamento.
        </p>

        <form method="post" action="#">
            <div class="form-grid">
                <div>
                    <label>Nome completo</label>
                    <input type="text" name="name" placeholder="O seu nome" required>
                </div>

                <div>
                    <label>Email</label>
                    <input type="email" name="email" placeholder="exemplo@email.com" required>
                </div>

                <div>
                    <label>Telefone/WhatsApp</label>
                    <input type="text" name="phone" placeholder="+258 ...">
                </div>

                <div>
                    <label>Tipo de contacto</label>
                    <select name="contact_type" required>
                        <option value="">Selecione uma opção</option>
                        <option>Solicitação de serviços</option>
                        <option>Parceria</option>
                        <option>Investimento</option>
                        <option>Startup/iniciativa</option>
                        <option>Evento</option>
                        <option>Comunidade</option>
                        <option>Outro</option>
                    </select>
                </div>
            </div>

            <label>Assunto</label>
            <input type="text" name="subject" placeholder="Ex: Desenvolvimento de plataforma, parceria, evento...">

            <label>Mensagem</label>
            <textarea name="message" rows="6" placeholder="Explique brevemente como podemos ajudar..." required></textarea>

            <button class="btn primary" type="submit">Enviar mensagem</button>
        </form>
    </div>

    <aside class="contact-info-card">
        <span class="section-kicker">Informações</span>
        <h2>Techpark Mozambique, Lda</h2>

        <div class="contact-info-list">
            <div>
                <strong>Localização</strong>
                <span>Maputo, Moçambique</span>
            </div>

            <div>
                <strong>Email</strong>
                <span>info@techparkmz.con</span>
            </div>

            <div>
                <strong>WhatsApp</strong>
                <span>+258 82 260 8614</span>
            </div>

            <div>
                <strong>Horário</strong>
                <span>Segunda a Sexta, 08h00 - 17h00</span>
            </div>
        </div>

        <div class="contact-note">
            <strong>Nota:</strong>
            <p>
                Para propostas técnicas, envie o máximo de detalhes possível:
                objetivo, prazo, orçamento estimado e área de interesse.
            </p>
        </div>
    </aside>
</section>

<section class="section innovation-band">
    <div>
        <span class="section-kicker">Aberto ao mundo</span>
        <h2>Clientes, parceiros, investidores e comunidade: estamos prontos para conversar.</h2>
        <p>
            A Techpark Mozambique quer criar relações sólidas com quem acredita
            em tecnologia, inovação e impacto real.
        </p>
    </div>

    <a class="btn secondary" href="mailto:info@techpark.co.mz">Enviar email</a>
</section>