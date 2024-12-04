<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Agendamento</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="views/styles/users_list.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Importação da Fonte Inter -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="/projeto_clinica/views/imagens/imagens_home/logoVetor.svg" type="image/x-icon">
    
</head>
<style>
    body {
        font-family: 'Inter', sans-serif;
    }

    ::-webkit-scrollbar {
        width: 12px;
    }

    /* Define the scrollbar thumb */
    ::-webkit-scrollbar-thumb {
        background-color: #a9a9a9;
        /* Color of the thumb */
        border-radius: 6px;
        /* Round the corners of the thumb */
    }

    /* Define the scrollbar track when not hovered */
    ::-webkit-scrollbar-track {
        background-color: #f1f1f1;
        /* Color of the track */
    }

    /* Define the scrollbar thumb when hovered */
    ::-webkit-scrollbar-thumb:hover {
        background-color: #808080;
        /* Color of the thumb on hover */
    }

    /* Define the scrollbar corner */
    ::-webkit-scrollbar-corner {
        background-color: #f1f1f1;
        /* Color of the corner */
    }

    #sombra {
        background-color: black;
        margin-top: 2vh;
        height: 78vh;
        width: 116.92vh;
        border-radius: 24px;
    }

    #sombraSobre {
        background-color: black;
        margin-top: 2vh;
        height: 20vh;
        width: 60vh;
        border-radius: 24px;
        margin-left: 2vh;
    }

    #sombraNos {
        background-color: black;
        height: 20vh;
        width: 60vh;
        border-radius: 24px;
    }

    #imgPrinc {
        margin-top: -2vh;
        margin-left: 2vh;
        border-radius: 24px;
    }

    #containerImg {
        margin-top: 2vh;
        margin-left: 2vh;
        margin-right: 2vh;
    }

    #p_sobre_title {
        font-family: 'Inter', sans-serif;
        font-style: normal;
        margin-top: 4vh;
        font-size: 27px;
        color: #000;
        text-align: center;
        vertical-align: middle;
    }

    #p_sobre_text {
        width: 48vh;
        font-style: normal;
        font-weight: 700;
        font-size: 20px;
        color: #000;
        text-align: justify;
        line-height: 24px;
        vertical-align: middle;
        margin-left: 6vh;


    }

    #p_sobre_title02 {
        font-family: 'Inter', sans-serif;
        font-style: normal;
        font-weight: 600;
        font-size: 27px;
        color: #000;
        text-align: center;
        vertical-align: middle;
    }

    #p_sobre_text02 {
        width: 48vh;
        font-weight: 600;
        font-size: 20px;
        color: #000;
        text-align: justify;
        line-height: 24px;
        vertical-align: middle;
        margin-left: 6vh;


    }

    #div_up_sobre {
        height: 13vh;
        width: 60vh;
        border-top-right-radius: 24px;
        border-top-left-radius: 24px;
        background-color: #8EBC8A;
        font-weight: 600;
        font-size: 20px;
        color: #000;
        text-align: center;
    }

    #div_text_sobre {
        width: 60vh;
        height: 39vh;
        border-bottom-right-radius: 24px;
        border-bottom-left-radius: 24px;
        background-color: #DDFFDA;
        font-size: 20px;
        color: #000;
        text-align: center;
        vertical-align: middle;
    }

    #div_cont_title {
        position: relative;
        left: 2vh;
        top: -2vh;
        width: 60vh;
        height: 7vh;
        border-top-right-radius: 24px;
        border-top-left-radius: 24px;
        background-color: #8EBC8A;
        font-style: normal;
        font-weight: 600;
        font-size: 23px;
        color: #000;
        text-align: center;
    }

    #card01 {
        width: 60vh;
        margin-top: 4vh;
        border-radius: 24px;
        border-style: none;
    }

    #cardBody {
        background-color: #DDFFDA;
        border-bottom-left-radius: 24px;
        border-bottom-right-radius: 24px;
    }

    #cardHeader {
        background-color: #8EBC8A;
        border-top-right-radius: 24px;
        border-top-left-radius: 24px;
    }

    #instagram {

        margin-left: 2vh;
        margin-right: 2vh;
    }

    #email {
        margin-left: 2vh;
        margin-right: 2vh;
    }

    #linkedin {
        margin-left: 2vh;
        margin-right: 2vh;
    }

    #twitter {
        margin-left: 2vh;
        margin-right: 2vh;
    }

    /*.sombra_letra {text-shadow: 2px 3px 7px rgba(0, 0, 0, 0.5);}*/
    #box {
        box-shadow: 2px 3px 7px rgba(0, 0, 0, 0.5);
    }

    #custom-card {
        border: 2px solid #5EB09E;
        border-radius: 20px;
    }

    #custom-card:hover {
        background-color: rgb(94, 176, 158, 0.2);
        cursor: pointer;
    }


    .botao {
        border-color: #5EB09E;
        border: 2px solid #415C3F;
        font-family: 'Inter', sans-serif;
        font-style: normal;
        font-weight: 700;
        font-size: 15px;
        line-height: 24px;
        border-radius: 15px;
        color: #415C3F;
        width: 450px;
        height: 47px;
        background-color: rgb(94, 176, 158, 0.05);

    }


    #t {
        font-size: medium;
        padding-left: 10px;
    }

    #t:hover {
        background-color: rgb(94, 176, 158, 0.3);
    }

    .offcanvas-end {
        max-width: 350px;
        /* Defina a largura máxima desejada */
    }

    #nameList {
        list-style-type: none;
        padding: 0;
    }

    #li {
        padding: 8px;
        border: 2px solid #ddd;
        margin: 2px;
        border-radius: 10px;
        width: auto;

    }

    #editar_btn {
        width: 10vh;
        height: 6vh;
        margin-top: 5px;
        margin-left: 5px;
        background-color: #5EB09E;
        border: none;
        border-radius: 12px;
        color: #000;
    }
</style>

<body>
<nav class="navbar navbar-expand-lg navbar-light  navbar-custom" style=" border-bottom: 1px solid #07a69e; background-color: #a9ddde; padding: 1px;">
        <!-- Logo e Nome da Marca -->
        <a class="navbar-brand d-flex align-items-center" href="<?php echo '/projeto_clinica/home/paciente/' . $userInfo['id'] ?>">
            <img src="/projeto_clinica/views/imagens/imagens_home/logoVetor.svg" alt="Logo" style="height: 40px;" class="mr-2">
            SP Medical Group
        </a>

        <!-- Campo de busca e botão de login -->
        <div class="collapse navbar-collapse justify-content-end">
            <!-- Campo de Busca -->
            <form class="form-inline mr-3">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="search-icon">
                            <i class="fas fa-search"></i>
                        </span>
                    </div>
                    <input type="text" class="form-control" placeholder="Faça sua busca aqui" aria-label="Busca" aria-describedby="search-icon">
                </div>
            </form>

            <!-- Botão de Perfil com Dropdown -->
            <div class="dropdown">
                <a class="btn d-flex align-items-center mr-2 dropdown-toggle" style="background-color: #07a69e; color: white;" data-toggle="dropdown" aria-expanded="false">
                    <img src="/projeto_clinica/views/imagens/imagens_home/c_branco-removebg-preview.png" style="height: 25px; margin-right: 5px;">
                    Perfil
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                    <form action="" method="POST">
                        
                        <input type="submit" value="Editar perfil" style="border: none;background-color: #fff;">
                    </form>
                    <!--<a class="dropdown-item" href="/projeto_clinica/user-edit-self">Editar Perfil</a> -->
                    <a href="/projeto_clinica/home/public"><input type="button" value="Sair" style="border: none;background-color: #fff;"></a>
                </div>
            </div>


            <!-- Botão Acesso Rápido com Dropdown -->
            <div class="dropdown">
                <button class="btn dropdown-toggle mr-3" type="button" id="acessoRapidoDropdown" style="color:white; background-color: #f15e70;" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Acesso Rápido
                </button>
                <div class="dropdown-menu" aria-labelledby="acessoRapidoDropdown">
                    <a class="dropdown-item" href="profissionais.html">Profissionais</a>
                    <a class="dropdown-item" href="exames.html">Exames</a>
                    <a class="dropdown-item" href="consultas.html">Consultas</a>
                    <a class="dropdown-item" href="agendamento.html">Agendamento</a>
                </div>
            </div>
        </div>
    </nav>
    </nav>
    <div class="container">
        <h1 style="font-size: 60px; font-weight: bold; text-align: center; margin-top: 20px; margin-bottom: 40px; color: #5EB09E;">Consultas agendadas</h1>

        <div class="col mb-1 d-flex justify-content-center">
            <input id="search" placeholder="Digite um nome de usuário" onkeyup="searchNames()" class="botao text-center"
                placeholder="Buscar usuários cadastrados">
        </div>
    </div>

    <?php if (empty($consultas)): ?>
        <p>Consultas agendadas.</p>
    <?php else: ?>

        <table class="table" border="1">
            <thead>
                <tr>
                    <th>Nome do Médico</th>
                    <th>Unidade da clínica</th>
                    <th>Data</th>
                    <th>Horário</th>
                    
                </tr>
            </thead>
            <tbody>
                <?php foreach ($consultas as $consulta): ?>
                    <tr class="userRow"> <!-- Substituí o id pelo class -->
                        <td><?php echo htmlspecialchars($consulta['medico_escolhido']); ?></td>
                        <td><?php echo htmlspecialchars($consulta['unidades_clinicas']); ?></td>
                        <td><?php echo htmlspecialchars($consulta['data']); ?></td>
                        <td><?php echo htmlspecialchars($consulta['horario']); ?></td>
                        <td>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        </div>



    <?php endif; ?>

    <a href="/projeto_clinica/agendamentos/paciente" style="text-decoration: none;" >Agendar outra consulta</a>

    <script>
        function searchNames() {
            const input = document.getElementById('search');
            const filter = input.value.toLowerCase();
            const rows = document.querySelectorAll('.userRow'); // Seleciona todas as linhas com a classe userRow

            rows.forEach(row => {
                const name = row.cells[0].textContent.toLowerCase(); // Usa o índice correto da célula com o nome
                row.style.display = name.includes(filter) ? '' : 'none';
            });
        }
    </script>
</body>

</html>