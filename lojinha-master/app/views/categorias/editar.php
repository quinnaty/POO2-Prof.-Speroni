<?php
  include 'cabecalho.php';
  ?>
        <header class="">
            <h1>Categorias</h1>
        </header>

        <form action="../../controllers/categorias.php?acao=editar" method="post">
            <input type="hidden" name="id" value="<?= $categoria->getId() ?>"
            <label for="nome">Nome</label>
            <input type="text" name="nome" value="<?= $categoria->getNome() ?>">
            <label for="descricao">Descrição</label>
            <input type="text" name="descricao" value="<?= $categoria->getDescricao() ?>">

            <input type="submit" name="btnGravar">
        </form>
    </body>
</html>
