<section id="principal">

    <div id="menu-topo">
        <ul class="abas">
            <?php foreach ($categorias as $categoria): ?>
                <li class="aba selected" id="cat<?= $categoria->getId() ?>">
                    <?= $categoria->getNome() ?>
                </li>
            <?php endforeach; ?>

        </ul>
    </div>
    <div id="conteudos">
    <?php foreach ($produtos as $produto): ?>
        <div class="conteudo cat<?= $produto->getIdCategoria() ?>">
            <div class="image">
                <img src="assets/imagens/produtos/<?= $produto->getFoto() ?>" alt="<?= $produto->getNome()?>">
            </div>
            <div class="img-grande">
                <img src="assets/imagens/produtos/<?= $produto->getFoto() ?>" alt="<?= $produto->getNome()?>">
            </div>

            <div class="header"><?= $produto->getNome()?></div>
            <div class="description">
                <h3>Descrição</h3>
                <?= $produto->getDescricao()?>
            </div>
        </div>
    <?php endforeach;  ?>

    </div>

</section>
