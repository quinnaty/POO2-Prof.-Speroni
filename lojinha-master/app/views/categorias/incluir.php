<?php
  include 'cabecalho.php';
  ?>
        <header class="">
            <h1>Categorias</h1>
        </header>

        <form action="../../controllers/categorias.php?acao=gravarInclusao" method="post">
            <label for="nome">Nome</label>
            <input type="text" name="nome" value="">
            <label for="descricao">Descrição</label>
            <input type="text" name="descricao" value="">

            <input type="submit">
        </form>

    </body>
</html>
