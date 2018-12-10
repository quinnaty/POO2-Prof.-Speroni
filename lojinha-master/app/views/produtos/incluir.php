
        <header class="">
            <h1>Categorias</h1>
        </header>

        <form action="../../controllers/categorias.php?acao=gravarInclusao" method="post">
            <label for="nome">Nome</label>
            <input type="text" name="nome" value="">
            <label for="descricao">Descrição</label>
            <input type="text" name="descricao" value="">
            <label for="preco">Preço</label>
            <input type="text" name="preco" ">
            <label for="id-categoria">Categoria</label>
            <select>
                <option value="0">Selecione...</option>
                <?php foreach ($categorias as $categoria): ?>
                    <option value="<?= $categoria->getId() ?>" ><?= $categoria->getNome() ?></option>
                <?php endforeach; ?>
            </select>


            <input type="submit">
        </form>

    </body>
</html>
