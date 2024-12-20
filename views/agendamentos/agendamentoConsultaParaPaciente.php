<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agendamento de consulta</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../views/styles/agendamentoConsultaPaciente.css">
    <link rel="shortcut icon" href="../views/imagens/imagens_home/logoVetor.svg" type="image/x-icon">
    <style>
    body{
        overflow: hidden;
    }
    </style>

</head>
<body>
    <div class="row " style="height: 100vh;">

        <!-- coluna do lado esquerdo-->
        <div class="col-5 d-flex justify-content-center align-items-center" style="background-color: #fbf6f3">
            <img src="../views/imagens/imagens_home/logoVetor.svg" style="height: 200px;">
        </div>

        <!-- coluna do lado direito-->
        <div class="col-6 mt-5" style="background-color: white; border-radius: 40px; padding: 70px; height: 600px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
            <div class="row justify-content-center align-items-center title">
                Agendamento de Consultas
            </div>            

            <form action="/projeto_clinica/save-consulta" method="POST">    
                <!-- Seleção do Médico -->
                <div class="row">
                <div class="col-7 m-3">
                    <label for="doctor" class="form-label">Nome do Médico:</label>
                    <select class="form-select" name="medico_escolhido" id="doctor">
                        <option selected>Selecione o nome de um médico</option>
                        <option value="Dr. João Silva">Dr. João Silva</option>
                        <option value="Dra. Ana Souza">Dra. Ana Souza</option>
                        <option value="Dr. Carlos Oliveira">Dr. Carlos Oliveira</option>
                    </select>
                </div>

                <div class="profile-section col-4 d-flex justify-content-center align-items-center">
                    <div class="profile-picture">
                        <img src="https://img.icons8.com/ios-filled/50/000000/camera.png" style="height: 90px;" alt="Foto do Médico">
                    </div>
                </div>
            </div>
                

                <!-- Seleção da Clínica -->
                 <div class="row">
                <div class="m-3 col-7">
                    <label for="clinic" class="form-label">Clínica:</label>
                    <select class="form-select" name="unidades_clinicas" id="clinic">
                        <option selected>Selecione uma clínica</option>
                        <option value="Clínica A">Clínica A</option>
                        <option value="Clínica B">Clínica B</option>
                        <option value="Clínica C">Clínica C</option>
                    </select>
                </div>

                <div class="col-4 d-flex justify-content-center"> 
                    [RM]
                    [especialidade]
                </div>

                </div>
                
                <div class="m-3">
                    <label for="date" class="form-label">Data:</label>
                    <input type="date" name="data" class="form-control" id="date">
                </div>

                <!-- Seleção do Horário -->
                <div class="m-3">
                    <label for="time" class="form-label">Horário:</label>
                    <input type="time" name="horario" class="form-control" id="time" required>
                </div>
                <!-- Botão de Agendar -->
                <div class="text-center">
                    <input type="submit" class="btn btn-custom mt-1" Agendar Consulta>
                    
                </div>
            </form>

        </div>
    </div>

</body>
</html>