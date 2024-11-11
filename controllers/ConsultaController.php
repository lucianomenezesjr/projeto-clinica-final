<?php

require_once '../models/consulta.php';

class ConsultaController {
    // Método para exibir o formulário de cadastro
    public function showFormConsulta() {
        include '../views/agendamentos/agendamentoConsultaParaPaciente.php'; // Inclua o arquivo do formulário
    }

    // Método para salvar um livro
    public function saveConsulta() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $consulta = new Consulta();
            $consulta->medico_escolhido = $_POST['medico_escolhido'];
            $consulta->unidades_clinicas = $_POST['unidades_clinicas'];
            $consulta->data = $_POST['data'];
            $consulta->horario = $_POST['horario'];
            

            if ($consulta->save()) {
                header('Location: /projeto_clinica/agendamentos/consulta-list');
            } else {
                echo "Erro ao agendar a consulta.";
            }
        }
    }

    public function showConsultaList() {

        // Pega todos os usuários do banco de dados
        $consulta = new Consulta();
        $consultas = $consulta->getAll();

        // Exibe a lista de usuários
        require_once '../views/agendamentos/consulta_list.php';
    }

    

    
}
