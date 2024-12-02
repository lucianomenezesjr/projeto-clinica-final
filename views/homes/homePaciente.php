<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SP Medical Group</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Importação da Fonte Inter -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="/projeto_clinica/views/imagens/imagens_home/logoVetor.svg" type="image/x-icon">
    <style>
        /* Definindo a fonte Inter para a página */
        body {
            font-family: 'Inter', sans-serif;
            overflow-x: hidden;
        }



        #card01 {
            width: 60vh;
            margin-top: 4vh;
            border-radius: 24px;
            border-style: none;
        }

        #custom-card {
            border: 2px solid #5EB09E;
            border-radius: 20px;
        }

        #custom-card:hover {
            background-color: rgb(94, 176, 158, 0.2);
            cursor: pointer;
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light  navbar-custom" style=" border-bottom: 1px solid #07a69e; background-color: #a9ddde; padding: 1px;">
        <!-- Logo e Nome da Marca -->
        <a class="navbar-brand d-flex align-items-center" href="#">
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
                    <?php echo $userInfo['name'].' - Paciente'; ?>
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                    <form action="<?php echo '/projeto_clinica/update-user-self/' . $userInfo['id'] ?>" method="POST">
                        <input type="hidden" name="id" value="<?php echo $userInfo['id']; ?>">
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
                    <a class="dropdown-item" href="/projeto_clinica/agendamentos/consulta-list">Consultas</a>
                    <a class="dropdown-item" href="/projeto_clinica/agendamentos/paciente">Agendamento</a>
                </div>
            </div>
        </div>
    </nav>

    <div class="row justify-content-center align-items-center p-4" style="border-bottom: 1px solid #fbf6f3; background-color: #07a69e; color: white;">
        <div class="col-4">
            <img src="/projeto_clinica/views/imagens/imagens_home/logoVetor.svg" alt="logo" style="background-color: #fbf6f3; padding: 20px; height: 250px; border-radius: 20px; margin-left: 70px;">

        </div>

        <div class="col-8">
            <div class="row justify-content-center align-items-center mb-3" style="font-size: 35px; font-weight: bold;">
                SP Medical Group </div>
            <div class="row text-center" style=" font-size: 20px; padding-left: 70px; padding-right: 70px;"> Restaurando movimentos, transformando vidas! O poder da cura está em cada passo dado. Sua jornada para uma vida plena começa aqui! </div>
        </div>
    </div>

    <div class="row justify-content-center p-5 mt-3"> <!-- carteirinha .... -->

        <div class="card p-0 mb-5 d-flex justify-content-center align-items-center" style="width: 170px; height: 110.5px; margin-right: 100px;" id="custom-card"> <!-- musics -->
            <img class="card-img-top" style="width: 75px;" src="/projeto_clinica/views/imagens/imagens_home/c.png">
            <div class="card-img-overlay">
                <h4 class="card-title pt-3" style="margin-top: 80px; color: #5EB09E; text-align: center; font-size: 17px;"> carteirinha </h4>
            </div>
        </div>

        <div class="card p-0 mb-5 d-flex justify-content-center align-items-center" style="width: 170px; height: 110.5px; margin-right: 100px;" id="custom-card"> <!-- musics -->
            <img class="card-img-top" style="width: 75px;" src="/projeto_clinica/views/imagens/imagens_home/cod.png">
            <div class="card-img-overlay">
                <h4 class="card-title pt-3" style="margin-top: 80px; color: #5EB09E; text-align: center; font-size: 17px;"> pagamentos </h4>
            </div>
        </div>

        <div class="card p-0 mb-5 d-flex justify-content-center align-items-center" style="width: 170px; height: 110.5px; margin-right: 100px;" id="custom-card"> <!-- musics -->
            <img class="card-img-top" style="width: 85px;" src="/projeto_clinica/views/imagens/imagens_home/planos.png">
            <div class="card-img-overlay">
                <h4 class="card-title pt-3" style="margin-top: 80px; color: #5EB09E; text-align: center; font-size: 17px;"> planos </h4>
            </div>
        </div>

        <div class="card p-0 mb-5 d-flex justify-content-center align-items-center" style="width: 170px; height: 110.5px;" id="custom-card"> <!-- musics -->
            <img class="card-img-top" style="width: 75px;" src="/projeto_clinica/views/imagens/imagens_home/cod.png">
            <div class="card-img-overlay">
                <h4 class="card-title pt-3" style="margin-top: 80px; color: #5EB09E; text-align: center; font-size: 17px;"> INS </h4>
            </div>
        </div>
    </div>

    <div class="row ml-5">

        <!-- Coluna com o Carrossel -->
        <div class="col-6 m-0">

            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>

                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="https://plus.unsplash.com/premium_photo-1661751462825-1b7f1a93d641?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="d-block w-100" alt="Pessoa massageando o pé de outra pessoa">
                    </div>
                    <div class="carousel-item">
                        <img src="https://media.istockphoto.com/id/1501185783/pt/foto/woman-doing-physical-therapy-exercises-using-a-fitness-ball.webp?a=1&b=1&s=612x612&w=0&k=20&c=XSJuKhw-pZXdw1reVcPxZOi_9RSIofRTdP9JgQ41O5Y=" class="d-block w-100" alt="Fisioterapia">
                    </div>

                    <div class="carousel-item">
                        <img src="https://plus.unsplash.com/premium_photo-1661716849429-6796ea134487?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="d-block w-100" alt="Massagem e treinamento de força">
                    </div>
                    <div class="carousel-item">
                        <img src=https://images.unsplash.com/photo-1581090124355-6c1376cf3047?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="d-block w-100" alt="Fisioterapeuta masculino segurando elástico">
                    </div>
                    <div class="carousel-item">
                        <img src="https://images.unsplash.com/photo-1620051844584-15ac31d5fccd?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="d-block w-100" alt="Pessoa segurando tubo preto e prateado">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Anterior</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Próximo</span>
                </a>
            </div>
        </div>

        <!-- Coluna com o Texto -->
        <div class="col-6 d-flex justify-content-center align-items-center">
            <div class=" text-center p-5">
                <h2 class="mb-4"> Sobre a Nossa Clínica</h2>
                <p> Bem-vindo à nossa clínica, onde valorizamos o cuidado, a confiança e a competência. Nossa equipe está comprometida em oferecer a você e sua família um atendimento de qualidade, com profissionais altamente qualificados.</p>
                <p>Nossos serviços incluem consultas especializadas, exames laboratoriais e um espaço acolhedor para todos os nossos pacientes.</p>
                <p style="width: 80%; margin: 0 auto 20px auto; text-align: center;">
                    A SP Medical Group se empenha em oferecer a melhor experiência para você! Desde sua recuperação até momentos descontraídos com a melhor equipe preparada para o seu bem-estar!
                </p>
                <button style="width: 80%; background-color: #f15e70; border-radius: 25px; border: none; height: 45px; margin: 0 auto 50px auto; color: white;">Conheça mais sobre a nossa equipe!</button>
            </div>
        </div>

    </div>
    </div>

    <div class="row text-center mt-5 justify-content-center align-items-center d-flex">
        <div class="col-6 mx-auto text-center">
            <h2 style="margin: 15px;">Localização</h2>
            <input placeholder="Selecione a clínica mais próxima de você" style="border-radius: 25px; background-color: #beecd5; width: 80%; height: 45px; border: none; text-align: center; margin: 0 auto;">
            <p class="mt-2">Calcular rota</p>
        </div>


        <div class="col-6 justify-content-end align-items-center d-flex bg-light">
            <img src="/projeto_clinica/views/imagens/imagens_home/equipe.png">
        </div>
    </div>
    </div>



    <!-- Font Awesome para os ícones -->
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <!-- Scripts Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>

<!--


-->