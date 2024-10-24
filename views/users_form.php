<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cadastro</title>
  <link rel="shortcut icon" href="../views/imagens/imagens_home/logoVetor.svg" type="image/x-icon">
  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
  <link rel="stylesheet" href="../views/styles/users_form.css">

</head>

<body>

  <div class="container-fluid" style="padding: 0px;">

    <!-- <nav class="navbar" style="margin: 2vh; border-radius: 24px; background-color: #A9DDDE; padding: 0px;">-->
    <!-- navbar -->

    <nav class="navbar mt-2 mb-2 p-0"
      style="background-color: #A9DDDE; border-radius: 24px; margin-left: 2vh; margin-right: 2vh; ">

      <div class="container-fluid">
        <a class="navbar-brand" href="home.html">
          <div style="font-weight: boldCadastro; " id="title" class="p-0 m-0">
            <img src="../views/imagens/imagens_home/logoVetor.svg" class="img-fluid" style="height: 60px; margin-left: -10px;" alt="logo"> Medical Group | Fisioterapia
          </div>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
          aria-controls="offcanvasNavbar" aria-label="Toggle navigation" style="margin-right: 2vh;">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>

      <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">

        <!-- side bar -->
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="title" style="font-size: 25px; font-weight: bold; color: #4F525D;">SP Medical
            Group</h5>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
          <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" id="t" href="home.html">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" aria-current="page" id="t" href="#">Agendamento</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="t" href="#">Consultas</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="t" href="#">Exames</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" id="t" href="#" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                Profissionais
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Fisioterapia Cardiovascular</a></li>
                <li>
                  <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="#">Fisioterapia dermatofuncional</a></li>
                <li>
                  <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="#">Fisioterapia Funcional</a></li>
              </ul>
            </li>

          </ul>

          <div style="position: absolute; bottom: 15px; text-align: center; margin-left: -15px; width: 100%;">
            <a href="login.html">
              <button class="btn btn-success mb-1 p-0" style="font-weight: bold; width: 90%;">
                Acesse sua conta
                <img src="imagens_home/c_branco-removebg-preview.png" style="width:40px; padding-left: 2px;">
              </button>
            </a>
          </div>



        </div>
      </div>
  </div>
  </nav>

  <h1
    style="font-size: 60px; font-weight: bold; text-align: center; margin-top: 20px; margin-bottom: 40px; color: #5EB09E;">
    Cadastro </h1>

  <form action="/projeto_clinica/save-user" method="POST">
    <div class="container pt-0 pb-2 p-5">
      <div class="row"> <!-- primeira linha -->
        <div class="col mb-1 d-flex justify-content-center">
          <input class="botao text-center" name="name" placeholder="Nome" required>
        </div>

        <div class="col d-flex mb-1 justify-content-center">
          <button class="botao">Data de nascimento
            <input type="date" class="text-center" name="birth_date" style="border-radius: 10px;border-style: none;" required></button>

        </div>
      </div>

      <div class="row">
        <div class="col mb-1 d-flex justify-content-center">
          <select class="botao" name="user_type" required>
            <option value="select" disabled selected style="text-align: center;">Tipo</option>
            <option value="Secretária(o)" id="tipo" class="quadro" style="text-align: center;">Secretária(o)</option>
            <option value="Paciente" id="tipo" class="quadro" style="text-align: center;">Paciente</option>
            <option value="Médica(o)" id="tipo" class="quadro" style="text-align: center;">Médica(o)</option>
          </select>

        </div>

        <div class="col mb-1 d-flex justify-content-center">
          <input class="botao text-center" name="telephone" placeholder="Telefone" type="tel" required> <!--criar um verificador de numero-->
        </div>
      </div>

      <div class="row">
        <div class="col mb-1 d-flex justify-content-center">
          <select class="botao" name="health_care" required>
            <option value="select" disabled selected style="text-align: center;">Convênio</option>
            <option value="Unimed" id="tipo" class="quadro" style="text-align: center;">Unimed</option>
            <option value="Grupo NotreDame Intermédica" id="tipo" class="quadro" style="text-align: center;">Grupo NotreDame Intermédica</option>
            <option value="Amil" id="tipo" class="quadro" style="text-align: center;">Amil</option>
            <option value="SulAmérica" id="tipo" class="quadro" style="text-align: center;">SulAmérica</option>
            <option value="Bradesco Saúde" id="tipo" class="quadro" style="text-align: center;">Bradesco Saúde</option>
            <option value="Allianz" id="tipo" class="quadro" style="text-align: center;">Allianz</option>
          </select>
        </div>

        <div class="col   mb-1 d-flex justify-content-center">
          <input class="botao text-center" name="email" type="email" placeholder="E-mail" required>
        </div>
      </div>

      <div class="row">
        <div class="col   mb-1 d-flex justify-content-center">
          <select class="botao" name="biological_sex" required>
            <option value="select" disabled selected style="text-align: center;">Sexo biológico</option>
            <option value="Unimed" id="tipo" class="quadro" style="text-align: center;">Feminino</option>
            <option value="Grupo NotreDame Intermédica" id="tipo" class="quadro" style="text-align: center;">Masculino
            </option>
            <option value="Amil" id="tipo" class="quadro" style="text-align: center;">Outro</option>
          </select>
        </div>

        <div class="col   mb-1 d-flex justify-content-center">
          <input class="botao text-center" type="email" name="email_confirmation" placeholder="Confirme o seu e-mail" required>
        </div>

      </div>

      <div class="row">
        <div class="col   mb-1 d-flex justify-content-center">
          <input class="botao text-center" name="street" placeholder="Rua" required>
        </div>

        <div class="col   mb-1 d-flex justify-content-center">
          <input class="botao text-center" type="password" name="password" placeholder="Senha" required>
        </div>

      </div>

      <div class="row">
        <div class="col mb-1 d-flex justify-content-center">
          <input class="botao text-center" type="number" name="number" placeholder="Número" required>
        </div>

        <div class="col   mb-1 d-flex justify-content-center">
          <input class="botao text-center" type="password" name="password_confirmation"  placeholder="Confirme sua senha" required>
        </div>

      </div>



      <div class="row">
        <div class="col   mb-1 d-flex justify-content-center">
          <input class="botao text-center" name="neighborhood" placeholder="Bairro" required>
        </div>

        <div class="col   mb-1 d-flex justify-content-center">
          <input class="botao text-center" name="alergies" placeholder="Alergias" required>
        </div>

      </div>



      <div class="row">
        <div class="col   mb-1 d-flex justify-content-center">
          <input class="botao text-center" name="diseases" placeholder="Doenças crônicas" required>
        </div>

        <div class="col mb-4 d-flex justify-content-center">
          <input class="botao text-center" name="medicine" placeholder="Medicamentos fixos" required>
        </div>
      </div>

  </form>

  <div class="d-grid justify-content-center">
    <input type="submit" class="btn active" style="width: 200px; background-color: #5EB09E; border: none;border-radius: 12px; color: #000;">
    
  </div>

  </div>

</body>
</html>