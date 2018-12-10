<?php
/**
 * Created by PhpStorm.
 * User: speroni
 * Date: 28/04/2018
 * Time: 20:56
 */
require_once 'Conexao.php';
require_once 'Usuario.php';
class UsuarioCrud
{
    private $conexao;
    public function __construct()
    {
        $this->conexao = Conexao::getConexao();
    }

    public static function estaLogado(){
        session_start();
        if (isset($_SESSION['id'])){
            return true;
        }else{
            return false;
        }
    }

    public function login($usuario, $senha){
        $sql = "select * from usuario WHERE login_usuario='{$usuario}' and senha_usuario=PASSWORD('{$senha}') and ativo='A'";
        //echo $sql;

        $res = $this->conexao->prepare($sql);
        $res->setFetchMode(PDO::FETCH_CLASS, 'Usuario',[]);
        $res->execute();
        $usuario = $res->fetch();
        if ($res->rowCount()>0){
            var_dump($usuario);
            return $usuario;
        }else{
            return false;
        }
    }

    public function insereUsuario(Usuario $usuario){
        $sql = "insert into usuario 
                (nome_usuario, login_usuario, senha_usuario, tipo_usuario, ativo) values 
                ('{$usuario->getNome()}', '{$usuario->getLogin()}', '{$usuario->getSenhaUsuario()}', '{$usuario->getTipoUsuario()}', 'I')
                ";
        try {
            return $this->conexao->exec($sql);

        }catch (PDOException $e){
            return $e->getMessage();
        }
    }
}