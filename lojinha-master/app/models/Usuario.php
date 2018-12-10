
<?php
/**
 * Created by PhpStorm.
 * User: speroni
 * Date: 28/04/2018
 * Time: 20:53
 */

class Usuario
{
    private $id_usuario;
    private $nome_usuario;
    private $login_usuario;
    private $senha_usuario;
    private $email_usuario;
    private $tipo_usuario;
    private $ativo;

    /**
     * Usuario constructor.
     * @param $id
     * @param $nome
     * @param $login
     * @param $senha
     * @param $tipo
     * @param $ativo
     */
    public function __construct($id, $nome, $login, $senha, $email, $tipo, $ativo)
    {
        $this->id_usuario = $id;
        $this->nome_usuario = $nome;
        $this->login_usuario = $login;
        $this->senha_usuario = $senha;
        $this->email_usuario = $email;
        $this->tipo_usuario = $tipo;
        $this->ativo = $ativo;
    }

    /**
     * @return null
     */
    public function getIdUsuario()
    {
        return $this->id_usuario;
    }

    /**
     * @param null $id_usuario
     */
    public function setIdUsuario($id_usuario)
    {
        $this->id_usuario = $id_usuario;
    }

    /**
     * @return mixed
     */
    public function getNomeUsuario()
    {
        return $this->nome_usuario;
    }

    /**
     * @param mixed $nome_usuario
     */
    public function setNomeUsuario($nome_usuario)
    {
        $this->nome_usuario = $nome_usuario;
    }

    /**
     * @return mixed
     */
    public function getLoginUsuario()
    {
        return $this->login_usuario;
    }

    /**
     * @param mixed $login_usuario
     */
    public function setLoginUsuario($login_usuario)
    {
        $this->login_usuario = $login_usuario;
    }

    /**
     * @return mixed
     */
    public function getSenhaUsuario()
    {
        return $this->senha_usuario;
    }

    /**
     * @param mixed $senha_usuario
     */
    public function setEmailUsuario($email_usuario)
    {
        $this->email_usuario = $email_usuario;
    }

    /**
     * @return mixed
     */
    public function getEmailUsuario()
    {
        return $this->email_usuario;
    }

    /**
     * @param mixed $senha_usuario
     */
    public function setSenhaUsuario($senha_usuario)
    {
        $this->senha_usuario = $senha_usuario;
    }

    /**
     * @return mixed
     */
    public function getTipoUsuario()
    {
        return $this->tipo_usuario;
    }

    /**
     * @param mixed $tipo_usuario
     */
    public function setTipoUsuario($tipo_usuario)
    {
        $this->tipo_usuario = $tipo_usuario;
    }

    /**
     * @return mixed
     */
    public function getAtivo()
    {
        return $this->ativo;
    }

    /**
     * @param mixed $ativo
     */
    public function setAtivo($ativo)
    {
        $this->ativo = $ativo;
    }



}

