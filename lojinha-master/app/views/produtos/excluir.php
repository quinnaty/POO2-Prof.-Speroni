<?php
include 'cabecalho.php';
?>
<header class="">
    <h1>Confirma a exclusão da Categoria?</h1>
</header>

<form action="../../controllers/categorias.php?acao=gravarExclusao" method="post">
    <input type="hidden" name="id" value="<?= $produto->getId() ?>"
    <label for="nome">Nome</label>
    <input type="text" name="nome" value="<?= $produto->getNome() ?>" disabled>
    <label for="descricao">Descrição</label>
    <input type="text" name="descricao" value="<?= $produto->getDescricao() ?>" disabled>
    <label for="preco">Preço</label>
    <input type="text" name="preco" value="<?= $produto->getPreco() ?>" disabled>
    <label for="id-categoria">Categoria</label>
    <select disabled>
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
    <input type="submit" value="Excluir" class="ui button negative">
    <input type="button" onclick="javascript:history.back();" value="Cancelar" class="ui button">

</form>
</body>
</html>
