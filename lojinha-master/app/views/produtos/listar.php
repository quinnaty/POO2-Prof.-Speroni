<?php
  include 'cabecalho.php';
  ?>
        <header class="">
            <h1>Produtos</h1>
            <a href="produtos.php?acao=incluir">Nova Categoria</a>
        </header>

        <section id="principal" class="">
            <table class="ui celled table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Produto</th>
                        <th>Descrição</th>
                        <th>Categoria</th>
                        <th>Preco</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach ($produtos as $produto): ?>
                    <tr>
                        <td><?= $produto->getId(); ?></td>
                        <td><img src="<?= $produto->getFoto() ?>"><?= $produto->getNome(); ?></td>
                        <td><?= $produto->getDescricao(); ?></td>
                        <td><?= $produto->getNmCategoria(); ?></td>
                        <td>R$ <?= number_format($produto->getPreco(),2, ', ', '.'); ?></td>
                        <td><a href="produtos.php?acao=editar&id=<?= $produto->getId() ?>"><img alt="Editar Produto" title="Editar Categoria" src="../../assets/imagens/editar.png" width="16px"></a>
                            <a href="produtos.php?acao=excluir&id=<?= $produto->getId() ?>"><img alt="Excluir Produto" title="Editar Categoria" src="../../assets/imagens/excluir.png" width="16px"></a></td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </section>
</body>
</html>
