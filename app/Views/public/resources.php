<section class="resources-hero">
    <div>
        <span class="eyebrow">Recursos Digitais</span>
        <h1>Materiais digitais para consulta, partilha e download.</h1>
        <p>
            Documentos, programas, panfletos, newsletters, imagens, apresentações
            e outros materiais oficiais da Techpark Mozambique.
        </p>
    </div>
</section>

<section class="tp-intro">
    <div>
        <span class="section-kicker">Biblioteca digital</span>
        <h2>Organização simples por categorias.</h2>
    </div>

    <p>
        Aqui ficam reunidos os materiais digitais disponíveis para o público,
        parceiros, clientes, startups, instituições e comunidade tecnológica.
    </p>
</section>

<section class="section soft-section">
    <div class="resource-categories">
        <?php foreach ($categories as $category): ?>
            <span><?= e($category) ?></span>
        <?php endforeach; ?>
    </div>

    <div class="resource-table-wrap">
        <table class="resource-table">
            <thead>
                <tr>
                    <th>Material</th>
                    <th>Categoria</th>
                    <th>Formato</th>
                    <th>Tamanho</th>
                    <th>Ano</th>
                    <th>Ação</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach ($resources as $resource): ?>
                    <tr>
                        <td>
                            <strong><?= e($resource['title']) ?></strong>
                            <small><?= e($resource['description']) ?></small>
                        </td>
                        <td><?= e($resource['category']) ?></td>
                        <td><span class="file-type"><?= e($resource['type']) ?></span></td>
                        <td><?= e($resource['size']) ?></td>
                        <td><?= e($resource['date']) ?></td>
                        <td>
                            <a class="table-action" href="<?= e($resource['file']) ?>">Download</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</section>

<section class="section innovation-band">
    <div>
        <span class="section-kicker">Precisa de outro material?</span>
        <h2>Podemos disponibilizar documentos específicos mediante solicitação.</h2>
        <p>
            Caso procure proposta, perfil institucional, apresentação, imagens,
            programas ou materiais técnicos, entre em contacto.
        </p>
    </div>

    <a class="btn secondary" href="<?= url('contactos') ?>">Solicitar material</a>
</section>