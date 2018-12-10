        <header class="">
            <h1>Categorias</h1>
            <a href="../../controllers/categorias.php?acao=incluir">Nova Categoria</a>
        </header>

        <section id="principal" class="">
            <table class="ui celled table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nome</th>
                        <th>Descrição</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach ($categorias as $categoria): ?>
                    <tr>
                        <td><?= $categoria->getId(); ?></td>
                        <td><?= $categoria->getNome(); ?></td>
                        <td><?= $categoria->getDescricao(); ?></td>
                        <td><a href="../../controllers/categorias.php?acao=editar&id=<?= $categoria->getId() ?>"><img alt="Editar Categoria" title="Editar Categoria" src="../../assets/imagens/editar.png" width="16px"></a>
                            <a href="../../controllers/categorias.php?acao=excluir&id=<?= $categoria->getId() ?>"><img alt="Excluir Categoria" title="Editar Categoria" src="../../assets/imagens/excluir.png" width="16px"></a></td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </section>
</body>
</html>
