<?php

require_once '../models/User.php';

class UsersController
{

    public function showForm()
    {
        // Exibe o formulário de cadastro de usuários
        require_once '../views/users_form.php';
    }

    public function saveUsers()
    {
        // Recebe dados do formulário
        $name = $_POST['name'];
        $birth_date = $_POST['birth_date'];
        $user_type = $_POST['user_type'];
        $telephone = $_POST['telephone'];
        $email = $_POST['email'];
        $biological_sex = $_POST['biological_sex'];
        $email_confirmation = $_POST['email_confirmation'];
        $street = $_POST['street'];
        $password = $_POST['password'];
        $number = $_POST['number'];
        $password_confirmation = $_POST['password_confirmation'];
        $neighborhood = $_POST['neighborhood'];
        $alergies = $_POST['alergies'];
        $diseases = $_POST['diseases'];
        $medicine = $_POST['medicine'];


        // Cria um novo usuário
        $user = new User();
        $user->name = $name;
        $user->birth_date = $birth_date;
        $user->user_type = $user_type;
        $user->telephone = $telephone;
        $user->email = $email;
        $user->biological_sex = $biological_sex;
        $user->email_confirmation = $email_confirmation;
        $user->street = $street;
        $user->password = $password;
        $user->number = $number;
        $user->password_confirmation = $password_confirmation;
        $user->neighborhood = $neighborhood;
        $user->alergies = $alergies;
        $user->diseases = $diseases;
        $user->medicine = $medicine;

        // Salva no banco de dados
        if ($user->save()) {
            // Redireciona para a página de listagem
            header('Location: /projeto_clinica/list-users');
        } else {
            echo "Erro ao salvar o usuário!";
        }
    }

    public function listUsers()
    {
        // Pega todos os usuários do banco de dados
        $user = new User();
        $users = $user->getAll();

        // Exibe a lista de usuários
        require_once '../views/users_list.php';
    }
}
class UsersLogin
{
    public function showLogin()
    {
        // Exibe o formulário de login de usuários
        require_once '../views/login.php';
    }
    public function showHomePaciente()
    {
        // Exibe o formulário de login de usuários
        require_once '../views/agendamentoConsultaParaPaciente.php';
    }

    public function loginVerify()
    {
        $email = $_POST['email'];
        $password = $_POST['password'];

        $user = new User();
        $user_type = $user->getEmailAndPasswordUser($email, $password);

        if ($user_type == "Paciente") {
            header('Location: /projeto_clinica/showHomePaciente');
            exit();
        }
        else{
            echo "Usuário ou senha inválidos!";
        }
    }
}
