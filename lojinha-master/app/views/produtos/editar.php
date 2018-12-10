<?php
  include 'cabecalho.php';
  ?>
        <header class="">
            <h1>Categorias</h1>
        </header>

        <form action="../../controllers/categorias.php?acao=gravarEdicao" method="post">
            <input type="hidden" name="id" value="<?= $produto->getId() ?>"
            <label for="nome">Nome</label>
            <input type="text" name="nome" value="<?= $produto->getNome() ?>">
            <label for="descricao">Descrição</label>
            <input type="text" name="descricao" value="<?= $produto->getDescricao() ?>">
            <label for="preco">Preço</label>
            <input type="text" name="preco" value="<?= $produto->getPreco() ?>">
            <label for="id-categoria">Categoria</label>
            <select>
            <?php foreach ($categorias as $categoria): ?>
                <?php if($categoria->getId() == $produto->getIdCategoria()){
                    $selected = "selected";
                }else{
                    $selected = "";
                }
                ?>
                    <option value="<?= $categoria->getId() ?>" <?= $selected ?>><?= $categoria->getNome() ?></option>
            <?php endforeach; ?>
            </select>
            <input type="submit" value="Alterar" class="ui button positive">
            <input type="button" onclick="javascript:history.back();" class="ui button">
        </form>
    </body>
</html>
