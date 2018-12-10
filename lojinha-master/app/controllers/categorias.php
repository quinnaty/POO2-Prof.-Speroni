<?php
require_once '../models/UsuarioCrud.php';
if(UsuarioCrud::estaLogado()){

/**
 * Created by PhpStorm.
 * User: speroni
 * Date: 05/03/2018
 * Time: 13:41
 */

    require_once '../../config.php';

    require_once '../models/CategoriaCrud.php';
    require_once '../models/Categoria.php';



    $acao = filter_input(INPUT_GET, 'acao', FILTER_SANITIZE_SPECIAL_CHARS);
    $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

    switch ($acao) {
        case '':
            $crud = new CategoriaCrud();
            $categorias = $crud->getCategorias();
            include '../views/templates/cabecalho.php';
            include '../views/categorias/listar.php';
            break;
        case 'editar':
            $crud = new CategoriaCrud();
            if (!isset($_POST['btnGravar'])) { //se ainda não preencheu
                $categoria = $crud->getCategoria($id);
                include '../views/categorias/editar.php';
            }else{                             //se já preencheu e fez submit
                $id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
                $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
                $descricao = filter_input(INPUT_POST, 'descricao', FILTER_SANITIZE_SPECIAL_CHARS);
                $categoria = new Categoria($nome, $descricao, $id);
                $crud->altera($categoria);
                header('Location: categorias.php');
            }

            break;
        case 'incluir':
            if (!isset($_POST['btnGravar'])){
                include '../views/categorias/incluir.php';
            }else{
                $id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
                $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
                $descricao = filter_input(INPUT_POST, 'descricao', FILTER_SANITIZE_SPECIAL_CHARS);
                $categoria = new Categoria($nome, $descricao, $id);
                $crud = new CategoriaCrud();
                $crud->insere($categoria);
                header('Location: categorias.php');
            }
            break;
        case 'excluir':
            $crud = new CategoriaCrud();
            if (!(isset($_POST['btnGravar']))){
                $categoria = $crud->getCategoria($id);
                include '../views/categorias/excluir.php';
            }else{
                $id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
                $categoria = new Categoria(null, null , $id);
                $crud->exclui($id);

                header('Location: categorias.php');
            }
            break;
        default:
            header('Location: categorias.php');
    }

}else{
        echo 'Acesso Negado!';
}
