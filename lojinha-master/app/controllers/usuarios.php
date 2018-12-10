<?php
require_once '../../assets/config.php';
require '../models/UsuarioCrud.php';

if (isset($_GET['acao'])){
    $acao = $_GET['acao'];
}else{
    $acao = 'logout';
}


switch ($acao){
    case 'login':
        if (!isset($_POST['entrar'])){
            include_once '../views/templates/cabecalho_sem_menu.php';
            include_once '../views/usuario/login.php';
        }else{
            $login = $_POST['login'];
            $senha = $_POST['senha'];

            $crud = new UsuarioCrud();
            $usuario = $crud->login($login, $senha);
            if ($usuario){
                $_SESSION['id'] = $usuario->getId();
                $_SESSION['nome'] = $usuario->getNome();
                $_SESSION['email'] = $usuario->getEmail();
                $_SESSION['tipo'] = $usuario->getTipo();
                $_SESSION['ativo'] = $usuario->getAtivo();
                echo 'sim';
//            header('Location: ../../index.php');

            }else{
                echo 'nao';
//            header('Location: ../../index.php?erro=1');
            }

        }
        break;
}
