<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../views/styles/agendamentoConsultaSecretario.css">
    <link rel="shortcut icon" href="../views/imagens/imagens_home/logoVetor.svg" type="image/x-icon">

<style>
    body { font-family: Arial, sans-serif;
    background-color: #fbf6f3;}

    .btn-custom {
        background-color: #6AB297;
        color: white;
    }

    .btn-custom:hover {
        background-color: #5EADA2;
    }

    .form-control, .form-select {
        border: 2px solid #57B998;
        border-radius: 20px;
    }

    .container-custom {
        padding: 20px;
        margin-top: 100px;
    }

    .title {
        font-size: 2.5rem; /* Aumenta o tamanho da fonte */
        font-weight: bold;  /* Deixa o texto em negrito */
        color: rgb(71, 74, 76);
        font-family: 'Inter', sans-serif;
    }

</style>

</head>
<body>
    <div class="row " style="height: 100vh;">

        <!-- coluna do lado esquerdo-->
        <div class="col-5 d-flex justify-content-center align-items-center" style="background-color: #fbf6f3">
            <img src="imagens_login/logoVetor.svg" style="height: 200px;">
        </div>

        <!-- coluna do lado direito-->
        <div class="col-6 mt-5" style="background-color: white; border-radius: 40px; padding: 70px; height: 650px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
            <div class="row justify-content-center align-items-center title">
                Agendamento de Consultas
            </div>            

            <form>    
                <!-- Seleção do Médico -->
                <div class="m-3">
                    <label for="doctor" class="form-label">Nome do Médico:</label>
                    <select class="form-select" id="doctor">
                        <option selected>Selecione ou digite o nome de um médico</option>
                        <option value="doctor1">Dr. João Silva</option>
                        <option value="doctor2">Dra. Ana Souza</option>
                        <option value="doctor3">Dr. Carlos Oliveira</option>
                    </select>
                </div>
                
                <div class="m-3">
                    <label for="doctor" class="form-label">Paciente</label>
                    <input type="text" class="form-control" id="paciente_id" placeholder="Digite o ID do paciente">
                </div>

                <!-- Seleção da Clínica -->
                <div class="m-3">
                    <label for="clinic" class="form-label">Clínica:</label>
                    <select class="form-select" id="clinic">
                        <option selected>Selecione uma clínica</option>
                        <option value="clinic1">Clínica A</option>
                        <option value="clinic2">Clínica B</option>
                        <option value="clinic3">Clínica C</option>
                    </select>
                </div>

                
                <div class="m-3">
                    <label for="date" class="form-label">Data:</label>
                    <input type="date" class="form-control" id="date">
                </div>

                <!-- Seleção do Horário -->
                <div class="m-3">
                    <label for="time" class="form-label">Horário:</label>
                    <input type="time" class="form-control" id="time">
                </div>
                <!-- Botão de Agendar -->
                <div class="text-center">
                    <button type="submit" class="btn btn-custom mt-1">Agendar Consulta</button>
                </div>
            </form>

        </div>
    </div>

</body>
</html>