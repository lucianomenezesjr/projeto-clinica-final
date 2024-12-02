<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edição do cadastro</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <!-- Importação da Fonte Inter -->
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link rel="shortcut icon" href="/projeto_clinica/views/imagens/imagens_home/logoVetor.svg" type="image/x-icon">
  <link rel="stylesheet" href="/projeto_clinica/views/styles/users_form.css">

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
          <?php echo $userInfo['name']; ?>
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
          <a class="dropdown-item" href="profissionais.html">Profissionais</a>
          <a class="dropdown-item" href="exames.html">Exames</a>
          <a class="dropdown-item" href="consultas.html">Consultas</a>
          <a class="dropdown-item" href="/projeto_clinica/agendamentos/paciente">Agendamento</a>
        </div>
      </div>
    </div>
  </nav>

  <h1
    style="font-size: 60px; font-weight: bold; text-align: center; margin-top: 20px; margin-bottom: 40px; color: #5EB09E;">
    Edição do cadastro </h1>

  <form action="/projeto_clinica/update-user-self" method="POST" onsubmit="return validarFormulario()">
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
            <option value="Secretária(o)" <?php echo ($userInfo['user_type'] == 'Secretária(o)') ? 'selected' : ''; ?> class="quadro" style="text-align: center;">Secretária(o)</option>
            <option value="Paciente" <?php echo ($userInfo['user_type'] == 'Paciente') ? 'selected' : ''; ?> class="quadro" style="text-align: center;">Paciente</option>
            <option value="Médica(o)" <?php echo ($userInfo['user_type'] == 'Médica(o)') ? 'selected' : ''; ?> class="quadro" style="text-align: center;">Médica(o)</option>
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
            <option value="Allianz" <?php echo ($userInfo['health_care'] == 'Allianz') ? 'selected' : ''; ?> class="quadro" style="text-align: center;">Allianz</option>
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
            <option value="Feminino" <?php echo ($userInfo['biological_sex'] == 'Feminino') ? 'selected' : ''; ?> class="quadro" style="text-align: center;">Feminino</option>
            <option value="Masculino" <?php echo ($userInfo['biological_sex'] == 'Masculino') ? 'selected' : ''; ?> class="quadro" style="text-align: center;">Masculino</option>
            <option value="Outro" <?php echo ($userInfo['biological_sex'] == 'Outro') ? 'selected' : ''; ?> class="quadro" style="text-align: center;">Outro</option>
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

      <input type="submit" class="btn active" style="width: 200px; background-color: #5EB09E; border: none;border-radius: 12px; color: #000;">
  </form>
  

  <div class="d-grid justify-content-center">
  <form action="/projeto_clinica/delete-user-self" method="POST" style="display:inline;">
    <input type="hidden" name="id" value="<?php echo $userInfo['id']; ?>">
    <button type="submit" class="btn btn-danger" style="border-radius: 12px; padding: 10px 20px; font-weight: bold; margin-top: 1vh;">
      Excluir
    </button>
  </form>
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