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
        $health_care = $_POST['health_care'];
        $biological_sex = $_POST['biological_sex'];
        $email_confirmation = $_POST['email_confirmation'];
        $street = $_POST['street'];
        $password = $_POST['password'];
        $number = $_POST['number'];
        $password_confirmation = $_POST['password_confirmation'];
        $neighborhood = $_POST['neighborhood'];
        $allergies = $_POST['allergies'];
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
        $user->health_care = $health_care;
        $user->email_confirmation = $email_confirmation;
        $user->street = $street;
        $user->password = $password;
        $user->number = $number;
        $user->password_confirmation = $password_confirmation;
        $user->neighborhood = $neighborhood;
        $user->allergies = $allergies;
        $user->diseases = $diseases;
        $user->medicine = $medicine;

        // Salva no banco de dados
        if ($user->save()) {
            // Redireciona para a página de listagem
            header('Location: /projeto_clinica/login');
        } else {
            echo "Erro ao salvar o usuário!";
        }
    }

    public function listUsers($id)
    {
        // Pega todos os usuários do banco de dados
        $user = new User();
        $users = $user->getAll();
        $userInfo = $user->getById($id);

        // Exibe a lista de usuários
        include '../views/users_list.php';
    }
}
class UsersLogin
{
    public function showLogin()
    {
        // Exibe o formulário de login de usuários
        require_once '../views/login.php';
    }


    public function loginVerify($email, $password)
    {
        // Instancia o objeto User para buscar dados no banco
        $user = new User();
        // Busca o usuário com email e senha fornecidos
        $userInfo = $user->getEmailAndPasswordUser($email, $password);

        // Verifica se o $userInfo foi encontrado e tem um 'user_type'
        if ($userInfo && $userInfo['user_type']) {
            // Redireciona para a home de acordo com o tipo de usuário
            if ($userInfo['user_type'] == "Paciente") {

                echo $userInfo['id'];
                header('Location: /projeto_clinica/home/paciente/' . $userInfo['id']);
            } elseif ($userInfo['user_type'] == "Secretária(o)") {
                echo $userInfo['id'];
                header('Location: /projeto_clinica/home/secretario/' . $userInfo['id']);
            } elseif ($userInfo['user_type'] == "Médica(o)") {
                echo $userInfo['id'];
                header('Location: /projeto_clinica/home/medico/' . $userInfo['id']);
            } elseif ($userInfo['user_type'] == "adm") {
                echo $userInfo['id'];
                header('Location: /projeto_clinica/home/adm/' . $userInfo['id']);
            }
        } else {
            // Exibe mensagem de erro se não encontrou o usuário ou o tipo de usuário
            echo "Usuário ou senha inválidos!";
        }
    }
}
class HomeTypes
{

    public function showHomePaciente($id)
    {
        $user = new User();
        $userInfo = $user->getById($id);

        include '../views/homes/homePaciente.php';
    }
    public function showHomeMedico($id)
    {
        $user = new User();
        $userInfo = $user->getById($id);
        // Exibe a home de medico
        include '../views/homes/homeMedico.php';
    }
    public function showHomeSecretario($id)
    {
        $user = new User();
        $userInfo = $user->getById($id);

        include '../views/homes/homeSecretario.php';
    }
    public function showHomePublic()
    {
        // Exibe a home sem login/ pública
        require_once '../views/homes/homePublic.php';
    }
    public function showHomeAdm($id)
    {
        $user = new User();
        $userInfo = $user->getById($id);

        // Exibe a home como adm
        include '../views/homes/homeAdm.php';
    }
}
class AgendamentoTypes
{
    public function showAgendamentoPaciente()
    {
        // Exibe a home a página de agendamento
        require_once '../views/agendamentos/agendamentoConsultaParaPaciente.php';
    }
    public function showAgendamentoSecretario()
    {
        // Exibe a home a página de agendamento
        require_once '../views/agendamentos/agendamentoConsultaParaSecretario.php';
    }
}

class EditUser
{

    // Método para exibir o formulário de atualização 
    public function showUpdateForm($id)
    {
        $user = new User();
        $userInfo = $user->getById($id);
        include '../views/edit_user.php'; // Inclua o arquivo do formulário de atualização
    }

    public function showUserUpdateForm($id)
    {
        $user = new User();
        $userInfo = $user->getById($id);
        include '../views/edit_user_self.php';
    }

    // Método para atualizar um usuário
    public function updateUser($id)
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $user = new User();
            $user->name = $_POST['name'];
            $user->id = $_POST['id'];
            $user->birth_date = $_POST['birth_date'];
            $user->user_type = $_POST['user_type'];
            $user->telephone = $_POST['telephone'];
            $user->email = $_POST['email'];
            $user->biological_sex = $_POST['biological_sex'];
            $user->health_care = $_POST['health_care'];
            $user->email_confirmation = $_POST['email_confirmation'];
            $user->street = $_POST['street'];
            $user->password = $_POST['password'];
            $user->number = $_POST['number'];
            $user->password_confirmation = $_POST['password_confirmation'];
            $user->neighborhood = $_POST['neighborhood'];
            $user->allergies = $_POST['allergies'];
            $user->diseases = $_POST['diseases'];
            $user->medicine = $_POST['medicine'];



            if ($user->update()) {

                $user = new User();
                $userInfo = $user->getById($id);

                header('Location: /projeto_clinica/list-users/17');
            } else {
                echo "Erro ao atualizar o usuário.";
            }
        }
    }

    public function updateUserSelf()
    {

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $user = new User();
            $user->name = $_POST['name'];
            $user->id = $_POST['id'];
            $user->birth_date = $_POST['birth_date'];
            $user->user_type = $_POST['user_type'];
            $user->telephone = $_POST['telephone'];
            $user->email = $_POST['email'];
            $user->biological_sex = $_POST['biological_sex'];
            $user->health_care = $_POST['health_care'];
            $user->email_confirmation = $_POST['email_confirmation'];
            $user->street = $_POST['street'];
            $user->password = $_POST['password'];
            $user->number = $_POST['number'];
            $user->password_confirmation = $_POST['password_confirmation'];
            $user->neighborhood = $_POST['neighborhood'];
            $user->allergies = $_POST['allergies'];
            $user->diseases = $_POST['diseases'];
            $user->medicine = $_POST['medicine'];


            if ($user->update()) {


                $userInfo = $user->getById($user->id);


                if ($user->user_type == "Paciente") {

                    header('Location: /projeto_clinica/home/paciente/' . $userInfo['id']);
                } elseif ($user->user_type == "Secretária(o)") {

                    header('Location: /projeto_clinica/home/secretario/' . $userInfo['id']);
                } elseif ($user->user_type == "Médica(o)") {

                    header('Location: /projeto_clinica/home/medico/' . $userInfo['id']);
                } elseif ($user->user_type == "adm") {

                    header('Location: /projeto_clinica/home/adm/' . $userInfo['id']);
                }
            } else {

                echo "Erro ao atualizar o usuário.";
            }
        }
    }

    // Método para excluir um livro pelo título
    public function deleteUserById($id)
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $user = new User();
            $user->id = $_POST['id'];

            $userInfo = $user->getById($id);

            if ($user->deleteById()) {

                header('Location: /projeto_clinica/list-users/17');
            } else {
                echo "Erro ao excluir o usuário.";
            }
        }
    }

    public function deleteUserSelfById()
    {
        $user = new User();
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {


            $user->id = $_POST['id'];


            $userInfo = $user->getById($user->id);
            
            if ($user->deleteById()) {

                header('Location: /projeto_clinica/home/public');
            } else {
                echo "Erro ao excluir o usuário.";
            }

        } 
    }
}
