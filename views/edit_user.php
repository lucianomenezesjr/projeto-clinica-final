<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edição do cadastro</title>
  <link rel="shortcut icon" href="views/imagens/imagens_home/logoVetor.svg" type="image/x-icon">

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
                <img src="../views/imagens_home/c_branco-removebg-preview.png" style="width:40px; padding-left: 2px;">
              </button>
            </a>
          </div>



        </div>
      </div>
  </div>
  </nav>

  <h1
    style="font-size: 60px; font-weight: bold; text-align: center; margin-top: 20px; margin-bottom: 40px; color: #5EB09E;">
    Edição do cadastro  </h1>

  <form action="/projeto_clinica/save-user" method="POST" onsubmit="return validarFormulario()">
    <div class="container pt-0 pb-2 p-5">
      <div class="row"> <!-- primeira linha -->
        <input type="hidden" name="id" value="<?php echo $userInfo['id']; ?>">
        <div class="col mb-1 d-flex justify-content-center">
          <input class="botao text-center" value="<?php echo $userInfo['name']; ?>" name="name" placeholder="Nome" required>
        </div>

        <div class="col d-flex mb-1 justify-content-center">
          <button class="botao">Data de nascimento
            <input type="date" class="text-center" value="<?php echo $userInfo['birth_date']; ?>" name="birth_date" style="border-radius: 10px;border-style: none;" required></button>

        </div>
      </div>

      <div class="row">
        <div class="col mb-1 d-flex justify-content-center">
          <select class="botao" value="<?php echo $userInfo['user_type']; ?>" name="user_type" required>
            <option value="select" disabled selected style="text-align: center;">Tipo</option>
            <option value="Secretária(o)" <?php echo ($userInfo['user_type'] == 'Secretária(o)') ? 'selected' : ''; ?>   class="quadro" style="text-align: center;">Secretária(o)</option>
            <option value="Paciente"   <?php echo ($userInfo['user_type'] == 'Paciente') ? 'selected' : ''; ?> class="quadro" style="text-align: center;">Paciente</option>
            <option value="Médica(o)" <?php echo ($userInfo['user_type'] == 'Médica(o)') ? 'selected' : ''; ?>   class="quadro" style="text-align: center;">Médica(o)</option>
          </select>
 
        </div>

        <div class="col mb-1 d-flex justify-content-center">
          <input class="botao text-center" value="<?php echo $userInfo['telephone']; ?>" name="telephone" placeholder="Telefone" type="tel" required> <!--criar um verificador de numero-->
        </div>
      </div>

      <div class="row">
        <div class="col mb-1 d-flex justify-content-center">
          <select class="botao" value="<?php echo $userInfo['health_care']; ?>" name="health_care" required>
            <option value="select" disabled selected style="text-align: center;">Convênio</option>
            <option value="Unimed" <?php echo ($userInfo['health_care'] == 'Unimed') ? 'selected' : ''; ?> class="quadro" style="text-align: center;">Unimed</option>
            <option value="Grupo NotreDame Intermédica" <?php echo ($userInfo['health_care'] == 'Grupo NotreDame Intermédica') ? 'selected' : ''; ?> class="quadro" style="text-align: center;">Grupo NotreDame Intermédica</option>
            <option value="Amil" <?php echo ($userInfo['health_care'] == 'Amil') ? 'selected' : ''; ?> class="quadro" style="text-align: center;">Amil</option>
            <option value="SulAmérica" <?php echo ($userInfo['health_care'] == 'SulAmérica') ? 'selected' : ''; ?> class="quadro" style="text-align: center;">SulAmérica</option>
            <option value="Bradesco Saúde" <?php echo ($userInfo['health_care'] == 'Bradesco Saúde') ? 'selected' : ''; ?> class="quadro" style="text-align: center;">Bradesco Saúde</option>
            <option value="Allianz" <?php echo ($userInfo['health_care'] == 'Allianz') ? 'selected' : ''; ?>  class="quadro" style="text-align: center;">Allianz</option>
          </select>
        </div>

        <div class="col   mb-1 d-flex justify-content-center">
          <input class="botao text-center" value="<?php echo $userInfo['email']; ?>" id="email" name="email" type="email" placeholder="E-mail" required>
        </div>
      </div>

      <div class="row">
        <div class="col   mb-1 d-flex justify-content-center">
          <select class="botao" value="<?php echo $userInfo['biological_sex']; ?>" name="biological_sex" required>
            <option value="select" disabled selected style="text-align: center;">Sexo biológico</option>
            <option value="Feminino"   class="quadro" style="text-align: center;">Feminino</option>
            <option value="Masculino"   class="quadro" style="text-align: center;">Masculino
            </option>
            <option value="outro"   class="quadro" style="text-align: center;">Outro</option>
          </select>
        </div>

        <div class="col   mb-1 d-flex justify-content-center">
          <input class="botao text-center" value="<?php echo $userInfo['email_confirmation']; ?>" type="email" id="emailConfirmation" name="email_confirmation" placeholder="Confirme o seu e-mail" required>
        </div>

      </div>

      <div class="row">
        <div class="col   mb-1 d-flex justify-content-center">
          <input class="botao text-center" name="street" value="<?php echo $userInfo['street']; ?>" placeholder="Rua" required>
        </div>

        <div class="col   mb-1 d-flex justify-content-center">
          <input class="botao text-center" type="password" id="senha" value="<?php echo $userInfo['password']; ?>" name="password" placeholder="Senha" required>
        </div>

      </div>

      <div class="row">
        <div class="col mb-1 d-flex justify-content-center">
          <input class="botao text-center" type="number" value="<?php echo $userInfo['number']; ?>" name="number" placeholder="Número" required>
        </div>

        <div class="col   mb-1 d-flex justify-content-center">
          <input class="botao text-center" type="password" value="<?php echo $userInfo['password_confirmation']; ?>" id="senhaConfirmation" name="password_confirmation" placeholder="Confirme sua senha" required>
        </div>

      </div>



      <div class="row">
        <div class="col   mb-1 d-flex justify-content-center">
          <input class="botao text-center" value="<?php echo $userInfo['neighborhood']; ?>" name="neighborhood" placeholder="Bairro" required>
        </div>

        <div class="col   mb-1 d-flex justify-content-center">
          <input class="botao text-center" name="allergies" value="<?php echo $userInfo['allergies']; ?>" placeholder="Alergias" required>
        </div>

      </div>



      <div class="row">
        <div class="col   mb-1 d-flex justify-content-center">
          <input class="botao text-center" value="<?php echo $userInfo['diseases']; ?>" name="diseases" placeholder="Doenças crônicas" required>
        </div>

        <div class="col mb-4 d-flex justify-content-center">
          <input class="botao text-center" name="medicine" value="<?php echo $userInfo['medicine']; ?>" placeholder="Medicamentos fixos" required>
        </div>
      </div>

  </form>

  <div class="d-grid justify-content-center">
    <input type="submit" class="btn active" style="width: 200px; background-color: #5EB09E; border: none;border-radius: 12px; color: #000;">

  </div>

  </div>

  <script>
    function validarFormulario() {
      const email = document.getElementById('email').value;
      const emailConfirmacao = document.getElementById('emailConfirmation').value;
      const senha = document.getElementById('senha').value;
      const senhaConfirmacao = document.getElementById('senhaConfirmation').value;

      if (email !== emailConfirmacao) {
        alert("Os e-mails não coincidem.");
        return false;
      }

      if (senha !== senhaConfirmacao) {
        alert("As senhas não coincidem.");
        return false;
      }

      alert("Cadastro realizado com sucesso!");
      return true;
    }
  </script>

</body>

</html>