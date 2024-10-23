<?php

// Ativar exibição de erros para depuração
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once '../controllers/UsersController.php';

// Lógica de roteamento
$request = $_SERVER['REQUEST_URI'];


switch ($request) {
    
    case '/projeto_clinica/public/':
        $controller = new UsersController();
        $controller->showForm();
        break;
    case '/projeto_clinica/save-user':
        $controller = new UsersController();
        $controller->saveUsers();
        break;
    case '/projeto_clinica/list-users':
        $controller = new UsersController();
        $controller->listUsers();
        break;
    default:
        http_response_code(404);
        echo "Página

 não encontrada.";
        break;
}
