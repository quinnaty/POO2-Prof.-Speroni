<?php

  if (isset($_GET['acao'])){
      $acao = $_GET['acao'];
  }else{
      $acao = "index";
  }
require_once 'config.php';
require 'app/models/CategoriaCrud.php';
require 'app/models/ProdutoCrud.php';

switch ($acao){
    case "index":
        $cat = new CategoriaCrud();
        $categorias = $cat->getCategorias();

        $prod = new ProdutoCrud();
        $produtos = $prod->getProdutos();

        include "app/views/templates/cabecalho.php";
        include "app/views/principal/index.php";
        break;

    case "busca":
        $termo = $_POST['termo'];
        $prod = new ProdutoCrud();
        $produtos = $prod->buscaProdutos($termo);

        $categorias = $prod->buscaProdutosCat($termo);
        include "app/views/templates/cabecalho.php";
        include "app/views/principal/index.php";
        break;

  }