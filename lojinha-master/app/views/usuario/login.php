<form action="<?= constant('BASE_URL');      ?>app/controllers/usuarios.php?acao=login" method="post">
    <label for="login">Login</label>
    <input type="text" name="login" />

    <label for="senha">Senha</label>
    <input type="password" name="senha" />

    <input type="submit" name="entrar" value="Entrar"/>
</form>