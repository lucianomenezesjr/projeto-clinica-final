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
        /*
    case '/projeto_clinica/list-users':
        $controller = new UsersController();
        $controller->listUsers();
        break; 
    */

    case (preg_match('/\/projeto_clinica\/list-users\/(\d+)/', $request, $matches) ? true : false):
        $id = $matches[1];
        require_once '../controllers/UsersController.php';
        $controller = new UsersController();
        $controller->listUsers($id);
        break;

    case '/projeto_clinica/login':
        $controller = new UsersLogin();
        $controller->showLogin();
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
        $controller->updateUser($id);
        break;


    case (preg_match('/\/projeto_clinica\/home\/medico\/(\d+)/', $request, $matches) ? true : false):

        $id = $matches[1];
        require_once '../controllers/UsersController.php';
        $controller = new homeTypes();
        $controller->showHomeMedico($id);

        break;

    case (preg_match('/\/projeto_clinica\/home\/secretario\/(\d+)/', $request, $matches) ? true : false):

        $id = $matches[1];
        require_once '../controllers/UsersController.php';
        $controller = new homeTypes();
        $controller->showHomeSecretario($id);
        break;

    case (preg_match('/\/projeto_clinica\/home\/paciente\/(\d+)/', $request, $matches) ? true : false):


        $id = $matches[1];
        require_once '../controllers/UsersController.php';
        $controller = new homeTypes();
        $controller->showHomePaciente($id);
        break;

    case (preg_match('/\/projeto_clinica\/home\/adm\/(\d+)/', $request, $matches) ? true : false):


        $id = $matches[1];
        require_once '../controllers/UsersController.php';
        $controller = new homeTypes();
        $controller->showHomeAdm($id);

        break;

    case (preg_match('/\/projeto_clinica\/user-edit-self\/(\d+)/', $request, $matches) ? true : false):


        $id = $matches[1];
        require_once '../controllers/UsersController.php';
        $controller = new EditUser();
        $controller->showUserUpdateForm($id);

        break;



    case '/projeto_clinica/home/public':
        $controller = new homeTypes();
        $controller->showHomePublic();
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


    case '/projeto_clinica/login-verify':
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Captura os dados do formulário
            $email = $_POST['email'];
            $password = $_POST['password'];

            // Instancia o controlador e chama o método de verificação de login
            $controller = new UsersLogin();
            $controller->loginVerify($email, $password);
        } else {
            echo "Método de requisição inválido!";
        }
        break;

    case (preg_match('/\/projeto_clinica\/user-edit-self\/update\/(\d+)/', $request, $matches) ? true : false):
        $id = $matches[1];
        require_once '../controllers/UsersController.php';
        $controller = new editUser();
        $controller->updateUserSelf($id);



    case '/projeto_clinica/delete-user':
        require_once '../controllers/UsersController.php';
        $controller = new EditUser();
        $controller->deleteUSerById($id);
        break;



    default:
        http_response_code(404);
        echo "Página

 não encontrada.";
        break;
}
