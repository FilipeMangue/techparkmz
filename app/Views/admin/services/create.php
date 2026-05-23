<h1>Novo serviço</h1>

<form class="form-card" method="post" action="<?= url('admin/servicos') ?>">
    <?= App\Core\Csrf::field() ?>

    <label>Título</label>
    <input name="title" required>

    <label>Resumo</label>
    <textarea name="summary" rows="3"></textarea>

    <label>Descrição</label>
    <textarea name="description" rows="6"></textarea>

    <label>Ícone</label>
    <input name="icon" value="chip">

    <label>Estado</label>
    <select name="status">
        <option value="draft">Rascunho</option>
        <option value="published">Publicado</option>
    </select>

    <label>Ordem</label>
    <input name="sort_order" type="number" value="0">

    <button class="btn primary" type="submit">Guardar</button>
</form>
