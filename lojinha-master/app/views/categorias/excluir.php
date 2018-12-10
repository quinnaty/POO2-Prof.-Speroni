<?php
include 'cabecalho.php';
?>
<header class="">
    <h1>Confirma a exclusão da Categoria?</h1>
</header>

<form action="../../controllers/categorias.php?acao=gravarExclusao" method="post">
    <input type="hidden" name="id" value="<?= $categoria->getId() ?>"
    <label for="nome">Nome</label>
    <input type="text" name="nome" value="<?= $categoria->getNome() ?>" disabled>
    <label for="descricao">Descrição</label>
    <input type="text" name="descricao" value="<?= $categoria->getDescricao() ?>" disabled>

    <input type="submit">
</form>
</body>
</html>
