<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Importação da Fonte Inter -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="views/styles/login.css">
    <link rel="shortcut icon" href="views/imagens/imagens_home/logoVetor.svg" type="image/x-icon">
</head>
<style>
    /* Definindo a fonte Inter para a página */
    body {
            font-family: 'Inter', sans-serif;
            overflow: hidden;
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

<body>

    <nav class="navbar navbar-expand-lg navbar-light  navbar-custom" style=" border-bottom: 1px solid #07a69e; background-color: #a9ddde; padding: 1px;">
        <!-- Logo e Nome da Marca -->
        <a class="navbar-brand d-flex align-items-center" href="#">
            <img src="views/imagens/imagens_home/logoVetor.svg" alt="Logo" style="height: 40px;" class="mr-2">
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

            <!-- Botão de Login -->
            <a href="/projeto_clinica/login" class="btn d-flex align-items-center mr-2" style="background-color: #07a69e; color: white;">
                <img src="views/imagens/imagens_home/c_branco-removebg-preview.png" style="height: 25px; margin-right: 5px;">
                Login
            </a>

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

    <div class="container-fluid p-0">
        <div class="row" style="padding: 0px;">
            <div class="col d-flex align-items-center justify-content-center" id="imgTopBg">
                <img src="views/imagens/imagens_login/logoVetor.svg" class="img-fluid" id="imgTop" alt="Logo">
            </div>



            <div class="col d-flex align-items-center justify-content-start" style="margin-top: 0vh; margin-left: 5vh;"><!--margin-top: -7vh;-->
                <div>
                    <div>
                        <h1 style="font-weight: 600;">Seja bem-vindo!</h1>
                    </div>
                    <div>
                        <p>Faça login na sua conta</p>
                        <form action="/projeto_clinica/login-verify" method="POST">
                            <div>
                                <div>
                                    <p id="p-login" style="margin-top: 5vh;">Usuário</p>
                                    <input type="email" id="userName" class="form-control" name="email" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg" required>
                                </div>
                                <p id="p-login" style="margin-top: 2vh;">Senha</p>
                                <input type="password" id="senhaInput" class="form-control" name="password" style="width: 50vh;border-radius: 18px;" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg" required>
                                <a href="" style="text-decoration: none;">
                                    <p >Esqueceu sua senha</p>
                                </a>

                                <div class="row">
                                    <div class="col-4"><input type="submit" id="botao" class="btn" style="background-color: #5eb09e; width: 15vh;border-radius: 18px;margin-top: 2vh;"></div>
                                    <div class="col-8 pt-4"><a href="/projeto_clinica/user-form" style="margin-top: 70px; text-decoration: none;">Ainda não tem uma conta?</a></div>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
<!-- Font Awesome para os ícones -->
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <!-- Scripts Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</html>