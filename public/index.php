<?php

// Ativar exibição de erros para depuração
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once '../controllers/UsersController.php';
require_once '../controllers/ConsultaController.php';

// Lógica de roteamento
$request = $_SERVER['REQUEST_URI'];


switch ($request) {

    case '/projeto_clinica/user-form':
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

    case '/projeto_clinica/login':
        $controller = new UsersLogin();
        $controller->showLogin();
        break;

    case (preg_match('/\/projeto_clinica\/home\/paciente\/(\d+)/', $request, $matches) ? true : false):
        $id = $matches[1];
        require_once '../controllers/UsersController.php';
        $controller = new homeTypes();
        $controller->showHomePaciente($id);
        break;

    case '/projeto_clinica/home/medico':
        $controller = new homeTypes();
        $controller->showHomeMedico();
        break;

    case '/projeto_clinica/home/secretario':
        $controller = new homeTypes();
        $controller->showHomeSecretario();
        break;

    case '/projeto_clinica/home/public':
        $controller = new homeTypes();
        $controller->showHomePublic();
        break;

    case '/projeto_clinica/home/adm':
        $controller = new homeTypes();
        $controller->showHomeAdm();
        break;

    case '/projeto_clinica/agendamentos/paciente':
        $controller = new ConsultaController();
        $controller->showFormConsulta();
        break;

    case '/projeto_clinica/save-consulta':
        $controller = new ConsultaController();
        $controller->saveConsulta();
        break;

    case '/projeto_clinica/agendamentos/consulta-list':
        $controller = new ConsultaController();
        $controller->showConsultaList();
        break;

    case '/projeto_clinica/agendamentos/secretario':
        $controller = new AgendamentoTypes();
        $controller->showAgendamentoSecretario();
        break;


    case '/projeto_clinica/home/paciente':
        $controller = new UsersLogin();
        $controller->loginVerify();
        
        break;

    case (preg_match('/\/projeto_clinica\/update-user\/(\d+)/', $request, $matches) ? true : false):
        $id = $matches[1];
        require_once '../controllers/UsersController.php';
        $controller = new EditUser();
        $controller->showUpdateForm($id);
        break;

    case '/projeto_clinica/update-user':
        require_once '../controllers/UsersController.php';
        $controller = new EditUser();
        $controller->updateUser();
        break;

    case '/projeto_clinica/delete-user':
        require_once '../controllers/UsersController.php';
        $controller = new EditUser();
        $controller->deleteUSerById();
        break;

    default:
        http_response_code(404);
        echo "Página

 não encontrada.";
        break;
}
