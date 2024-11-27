<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cadastro</title>
  <link rel="shortcut icon" href="views/imagens/imagens_home/logoVetor.svg" type="image/x-icon">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Importação da Fonte Inter -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="/projeto_clinica/views/imagens/imagens_home/logoVetor.svg" type="image/x-icon">
  <link rel="stylesheet" href="views/styles/users_form.css">

</head>
<style>
  body{
    overflow-y: hidden;
  }
</style>
<body>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light  navbar-custom" style=" border-bottom: 1px solid #07a69e; background-color: #a9ddde; padding: 1px;">
        <!-- Logo e Nome da Marca -->
        <a class="navbar-brand d-flex align-items-center" href="<?php echo '/projeto_clinica/home/adm/' . $userInfo['id'] ?>">
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
            <div class="">
                <a class="btn d-flex align-items-center mr-2" href="/projeto_clinica/login" style="background-color: #07a69e; color: white;" data-toggle="" aria-expanded="false">
                    <img src="/projeto_clinica/views/imagens/imagens_home/c_branco-removebg-preview.png" style="height: 25px; margin-right: 5px;">
                    Login
                </a>
                
            </div>


            <!-- Botão Acesso Rápido com Dropdown -->
            <div class="dropdown">
                <button class="btn dropdown-toggle mr-3" type="button" id="acessoRapidoDropdown" style="color:white; background-color: #f15e70;" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Acesso Rápido
                </button>
                <div class="dropdown-menu" aria-labelledby="acessoRapidoDropdown">
                    
                    <a class="dropdown-item" href="exames.html">Exames</a>
                    <a class="dropdown-item" href="consultas.html">Consultas</a>
                    <a class="dropdown-item" href="agendamento.html">Agendamento</a>
                    <a class="dropdown-item" href="/projeto_clinica//list-users">Lista de usuários</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- <nav class="navbar" style="margin: 2vh; border-radius: 24px; background-color: #A9DDDE; padding: 0px;">-->
    <!-- navbar -->

    

  <h1
    style="font-size: 60px; font-weight: bold; text-align: center; margin-top: 20px; margin-bottom: 40px; color: #5EB09E;">
    Cadastro </h1>

  <form action="/projeto_clinica/save-user" method="POST" onsubmit="return validarFormulario()">
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
          <input class="botao text-center" id="email" name="email" type="email" placeholder="E-mail" required>
        </div>
      </div>

      <div class="row">
        <div class="col   mb-1 d-flex justify-content-center">
          <select class="botao" name="biological_sex" required>
            <option value="select" disabled selected style="text-align: center;">Sexo biológico</option>
            <option value="Feminino" id="tipo" class="quadro" style="text-align: center;">Feminino</option>
            <option value="Masculino" id="tipo" class="quadro" style="text-align: center;">Masculino
            </option>
            <option value="outro" id="tipo" class="quadro" style="text-align: center;">Outro</option>
          </select>
        </div>

        <div class="col   mb-1 d-flex justify-content-center">
          <input class="botao text-center" type="email" id="emailConfirmation" name="email_confirmation" placeholder="Confirme o seu e-mail" required>
        </div>

      </div>
      

      <div class="row">
        <div class="col   mb-1 d-flex justify-content-center">
          <input class="botao text-center" name="street" placeholder="Rua" required>
        </div>

        <div class="col   mb-1 d-flex justify-content-center">
          <input class="botao text-center" type="password" id="senha" name="password" placeholder="Senha" required>
        </div>

      </div>

      <div class="row">
        <div class="col mb-1 d-flex justify-content-center">
          <input class="botao text-center" type="number" name="number" placeholder="Número" required>
        </div>

        <div class="col   mb-1 d-flex justify-content-center">
          <input class="botao text-center" type="password" id="senhaConfirmation" name="password_confirmation" placeholder="Confirme sua senha" required>
        </div>

      </div>



      <div class="row">
        <div class="col   mb-1 d-flex justify-content-center">
          <input class="botao text-center" name="neighborhood" placeholder="Bairro" required>
        </div>

        <div class="col   mb-1 d-flex justify-content-center">
          <input class="botao text-center" name="allergies" placeholder="Alergias" required>
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