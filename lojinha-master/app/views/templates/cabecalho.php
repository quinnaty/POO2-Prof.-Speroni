<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loja</title>
    <meta charset="utf-8">
    <base href="<?= constant('BASE_URL'); ?>">
    <link rel="stylesheet" href="assets/vendor/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/principal.css">

    <script src="assets/vendor/js/jquery-3.3.1.min.js"></script>
    <script src="assets/vendor/js/bootstrap.min.js"></script>
    <script src="assets/js/principal.js"></script>
</head>
<body>
<nav class="navbar navbar-dark bg-dark navbar-expand-lg ">
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="#"><img src="assets/imagens/logo.png" class="logo" alt="AraquaVille">AraquaVille</a>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Início<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="app/controllers/categorias.php">Categorias</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="app/controllers/produtos.php">Produtos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="app/controllers/usuarios.php?acao=login">Login</a>
            </li>

        </ul>
        <form class="form-inline my-2 my-lg-0" method="post" action="?acao=busca">
            <input class="form-control mr-sm-2" type="text" placeholder="Buscar" name="termo">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
        </form>
    </div>
</nav>