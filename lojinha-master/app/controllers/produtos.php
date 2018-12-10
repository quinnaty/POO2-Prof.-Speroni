<?php
session_start();

/**
 * Created by PhpStorm.
 * User: speroni
 * Date: 05/03/2018
 * Time: 13:41
 */

    require_once '../models/ProdutoCrud.php';
    require_once '../models/Produto.php';

    function index(){
        $crud = new ProdutoCrud();
        $produtos = $crud->getProdutos();
        include '../views/templates/cabecalho.php';
        include '../views/produtos/listar.php';
    }

    function editar($id){
        $crudProdutos = new ProdutoCrud();
        $produto = $crudProdutos->getProduto($id);
        $crudCategoria = new CategoriaCrud();
        $categorias = $crudCategoria->getCategorias();

        include '../views/produtos/editar.php';
    }

    function gravarEdicao(Produto $produto){
        $crud = new ProdutoCrud();
        $crud->altera($produto);

        header('Location: produtos.php');
    }

    function incluir(){
        $crudCategoria = new CategoriaCrud();
        $categorias = $crudCategoria->getCategorias();
        include '../views/produtos/incluir.php';
    }

    function gravarInclusao(Produto $produto){
        $crud = new ProdutoCrud();
        $crud->insere($produto);

        header('Location: produtos.php');
    }

    function excluir($id){
        $crudProdutos = new ProdutoCrud();
        $produto = $crudProdutos->getProduto($id);
        $crudCategoria = new CategoriaCrud();
        $categorias = $crudCategoria->getCategorias();

        include '../views/produtos/excluir.php';
    }

    function gravarExclusao(Produto $produto){
        $crud = new ProdutoCrud();
        $crud->exclui($produto);

        header('Location: produtos.php');

    }

//if (isset($_SESSION['nome']) and $_SESSION['tipo']=='a') {

    $acao = filter_input(INPUT_GET, 'acao', FILTER_SANITIZE_SPECIAL_CHARS);
    $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

    switch ($acao) {
        case '':
            index();
            break;
        case 'editar':
            editar($id);
            break;
        case 'gravarEdicao':
            $id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
            $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
            $descricao = filter_input(INPUT_POST, 'descricao', FILTER_SANITIZE_SPECIAL_CHARS);
            $foto = filter_input(INPUT_POST, 'descricao', FILTER_SANITIZE_SPECIAL_CHARS);
            $preco = filter_input(INPUT_POST, 'descricao', FILTER_SANITIZE_NUMBER_FLOAT);
            $id_categoria = filter_input(INPUT_POST, 'descricao', FILTER_SANITIZE_NUMBER_INT);

            $produto = new Produto($id, $nome, $descricao, $foto, $preco, $id_categoria);
            gravarEdicao($produto);
            break;
        case 'incluir':
            incluir();
            break;
        case 'gravarInclusao':
            $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
            $descricao = filter_input(INPUT_POST, 'descricao', FILTER_SANITIZE_SPECIAL_CHARS);
            $descricao = filter_input(INPUT_POST, 'descricao', FILTER_SANITIZE_SPECIAL_CHARS);
            $foto = filter_input(INPUT_POST, 'descricao', FILTER_SANITIZE_SPECIAL_CHARS);
            $preco = filter_input(INPUT_POST, 'descricao', FILTER_SANITIZE_NUMBER_FLOAT);
            $id_categoria = filter_input(INPUT_POST, 'descricao', FILTER_SANITIZE_NUMBER_INT);

            $produto = new Produto(null, $nome, $descricao, $preco, $id_categoria);
            gravarInclusao($produto);
            break;
        case 'excluir':
            excluir($id);
            break;
        case 'gravarExclusao':
            $id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
            $produto = new Produto($id);
            gravarExclusao($produto);
            break;
    }
/*
}else{
        echo 'Acesso Negado!';
}
*/