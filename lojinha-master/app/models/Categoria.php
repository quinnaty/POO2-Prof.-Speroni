<?php
/**
 * Created by PhpStorm.
 * User: speroni
 * Date: 26/02/2018
 * Time: 11:14
 */

class Categoria
{
    //atributos (conforme entidade do BD)
    private $nome;
    private $descricao;
    private $id;

    //criar método __construct() - argumentos com valores iniciais nulos, assim os valores são opcionais
    public function __construct($nome, $descricao, $id = null)
    {
        $this->id = $id;
        $this->nome = $nome;
        $this->descricao = $descricao;
    }

    //criar métodos Getters e Setters
    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function getDescricao()
    {
        return $this->descricao;
    }

    /**
     * @param null $descricao
     */
    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;
    }



}

