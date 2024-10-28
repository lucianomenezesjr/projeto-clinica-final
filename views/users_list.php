<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Usuários</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../views/styles/users_list.css">
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
<div class="container">

<!-- <nav class="navbar" style="margin: 2vh; border-radius: 24px; background-color: #A9DDDE; padding: 0px;">-->
<!-- navbar -->

<nav class="navbar mt-2 mb-2 p-0"
  style="background-color: #A9DDDE; border-radius: 24px; margin-left: 2vh; margin-right: 2vh; ">

  <div class="container-fluid">
    <a class="navbar-brand" href="home.html">
      <div style="font-weight: bold; " id="title" class="p-0 m-0">
        <img src="imagens/imagens_home/logoVetor.svg" class="img-fluid" style="height: 60px; margin-left: -10px;"
          alt="logo">
        Medical Group | Fisioterapia

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
<div class="container">
<h1 style="font-size: 60px; font-weight: bold; text-align: center; margin-top: 20px; margin-bottom: 40px; color: #5EB09E;">Usuários cadastrados </h1>

<div class="col mb-1 d-flex justify-content-center">
  <input id="search" placeholder="Digite um nome de usuário" onkeyup="searchNames()" class="botao text-center"
    placeholder="Buscar usuários cadastrados">
</div>
</div>

    <?php if (empty($users)): ?>
        <p>Nenhum usuário cadastrado.</p>
    <?php else: ?>
            
            <table class="table" border="1">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Data de Nascimento</th>
                        <th>Tipo de Usuário</th>
                        <th>Telefone</th>
                        <th>Email</th>
                        <th>Sexo Biológico</th>
                        <th>Rua</th>
                        <th>Número</th>
                        <th>Bairro</th>
                        <th>Alergias</th>
                        <th>Doenças</th>
                        <th>Medicamentos</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($users as $user): ?>
                        <tr id="nameList">
                            <td><?php echo htmlspecialchars($user['id']); ?></td>
                            <td><?php echo htmlspecialchars($user['name']); ?></td>
                            <td><?php echo htmlspecialchars($user['birth_date']); ?></td>
                            <td><?php echo htmlspecialchars($user['user_type']); ?></td>
                            <td><?php echo htmlspecialchars($user['telephone']); ?></td>
                            <td><?php echo htmlspecialchars($user['email']); ?></td>
                            <td><?php echo htmlspecialchars($user['biological_sex']); ?></td>
                            <td><?php echo htmlspecialchars($user['street']); ?></td>
                            <td><?php echo htmlspecialchars($user['number']); ?></td>
                            <td><?php echo htmlspecialchars($user['neighborhood']); ?></td>
                            <td><?php echo htmlspecialchars($user['alergies']); ?></td>
                            <td><?php echo htmlspecialchars($user['diseases']); ?></td>
                            <td><?php echo htmlspecialchars($user['medicine']); ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>

        

        <?php endif; ?>

        <a href="/projeto_clinica/public/">Cadastrar novo usuário</a>

        <script>
            function searchNames() {
                const input = document.getElementById('search');
                const filter = input.value.toLowerCase();
                const rows = document.querySelectorAll('#nameList');

                rows.forEach(row => {
                    const name = row.cells[1].textContent.toLowerCase(); // Ajuste o índice para a coluna do nome
                    row.style.display = name.includes(filter) ? '' : 'none';
                });
            }
        </script>
</body>

</html>