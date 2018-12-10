<?php
/**
 * Created by PhpStorm.
 * User: speroni
 * Date: 28/04/2018
 * Time: 21:11
 */

require_once '../app/models/CategoriaCrud.php';

$crud = new CategoriaCrud();

$usuarios = $crud->getCategorias();

print_r($usuarios);

$json = json_encode($usuarios, true);

print $json;