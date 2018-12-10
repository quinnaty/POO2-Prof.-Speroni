<?php
/**
 * Created by PhpStorm.
 * User: speroni
 * Date: 26/02/2018
 * Time: 11:43
 */

require_once 'Conexao.php';
require 'Produto.php';
class ProdutoCrud
{
    private $conexao;
    public function __construct()
    {
        $this->conexao = Conexao::getConexao();
    }

    public function getProduto($id){
        $consulta = $this->conexao->query("select * from produto WHERE id_produto=".$id);
        $produto = $consulta->fetch(PDO::FETCH_ASSOC);
        return new Produto($produto['id_produto'], $produto['nome_produto'], $produto['descricao_produto'], $produto['preco_produto'], $produto['foto_produto'], $produto['id_categoria']);
    }

    public function getProdutos(){
        $consulta = $this->conexao->query("SELECT * FROM produto");
        $produtos = $consulta->fetchAll(PDO::FETCH_ASSOC);
        $listaProdutos = [];
        foreach ($produtos as $produto){
            $listaProdutos[] = new Produto($produto['id_produto'], $produto['nome_produto'], $produto['descricao_produto'], $produto['preco_produto'], $produto['foto_produto'], $produto['id_categoria']);
        }
        return $listaProdutos;
    }

    public function buscaProdutos($termo){
        $consulta = $this->conexao->query("SELECT * FROM produto where nome_produto like '%{$termo}%'");
        $produtos = $consulta->fetchAll(PDO::FETCH_ASSOC);
        $listaProdutos = [];
        foreach ($produtos as $produto){
            $listaProdutos[] = new Produto($produto['id_produto'], $produto['nome_produto'], $produto['descricao_produto'], $produto['preco_produto'], $produto['foto_produto'],  $produto['id_categoria']);
        }
        return $listaProdutos;

    }
    public function getProdutosCat($id_categoria){
        $consulta = $this->conexao->query("SELECT * FROM produto where id_categoria=".$id_categoria);
        $produtos= $consulta->fetchAll(PDO::FETCH_ASSOC);
        $listaProdutos = [];
        foreach ($produtos as $produto){
            $listaProdutos[] = new Produto($produto['id_produto'], $produto['nome_produto'], $produto['descricao_produto'], $produto['preco_produto'], $produto['foto_produto'], $produto['id_categoria']);
        }
        return $listaProdutos;
    }

}

