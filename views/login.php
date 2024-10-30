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
    <link rel="stylesheet" href="views/styles/login.css">
    <link rel="shortcut icon" href="views/imagens/imagens_home/logoVetor.svg" type="image/x-icon">
</head>

<body>

    <nav class="navbar mt-2 mb-2 p-0 fixed-top" style="background-color: #A9DDDE; border-radius: 24px; margin-left: 2vh; margin-right: 2vh; ">

        <div class="container-fluid">
            <a class="navbar-brand" href="">
                <div style="font-weight: boldCadastro; " id="title" class="p-0 m-0">
                    <img src="views/imagens/imagens_home/logoVetor.svg" class="img-fluid" style="height: 60px; margin-left: -10px;" alt="logo">
                    Medical Group | Fisioterapia

                </div>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
                aria-controls="offcanvasNavbar" aria-label="Toggle navigation" style="margin-right: 2vh;">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar"
            aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasNavbarLabel" style="font-weight: bold; font-size: 30px; padding-left: 12px;">SP Medical Group</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" id="t" href="#">Agendamento</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" id="t" href="#">Consultas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" id="t" href="#">Exames</a>
                    </li>
                </ul>

                <div style="position: absolute; bottom: 15px; text-align: center; margin-left: -15px; width: 100%;">
                    <a href="cadastro.html">
                        <button class="btn btn-success mb-1 p-0" style="font-weight: bold; width: 90%;">
                            Cadastre-se
                            <img src="views/imagens/imagens_home/c_branco-removebg-preview.png" style="width:40px; padding-left: 2px;">
                        </button>
                    </a>
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
                                <a href="">
                                    <p>Esqueceu sua senha</p>
                                </a>

                                <div class="row">
                                    <div class="col-4"><input type="submit" id="botao" class="btn" style="background-color: #5eb09e; width: 15vh;border-radius: 18px;margin-top: 2vh;">Login</div>
                                    <div class="col-8 pt-4"><a href="" style="margin-top: 70px;">Ainda não tem uma conta?</a></div>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
    
</body>

</html>