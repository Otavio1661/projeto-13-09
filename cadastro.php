<?php

  require_once './php/config.php';

  if(isset($_POST['submit']));
  {
    print_r($_POST['Usuario']);
    print_r($_POST['Email']);
    print_r($_POST['Senha']);
  }

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <!-- Meta tags Obrigatórias -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
    integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

  <!-- Estilo customizado -->
  <link rel="stylesheet" type="text/css" href="css/estilo.css">



  <title> Logn Gazin </title>
</head>

<body style="background-color: rgb(5, 0, 110, 1);
  background: linear-gradient(0deg, rgba(71, 158, 255, 1) 0%, rgba(5, 0, 110, 1) 100%) no-repeat;">
  <header> <!--Inicio Cabealho-->
    <nav class="navbar navbar-expand-md navbar-dark" id="bg-top">
      <div class="container" id="container-l-t">

        <a href="#" class="navbar-brand lt-auto">
          <img src="img/logo-gazin.png" width="180">
        </a>

        <button class="navbar-toggler" data-toggle="collapse" data-target="#nav-principal">
          <span class="navbar-toggler-icon "></span>
        </button>

        <div style="padding-bottom: 10px;" class="collapse navbar-collapse" id="nav-principal">
          <ul class="navbar-nav ml-auto" style="font-size: 130%;">
            <li>
              <a href="index.php" class="nav-link">Home</a>
            </li>
            <li>
              <a href="cadastro.php" class="nav-link active">Cadastrar</a>
            </li>
            <li>
              <a href="" class="nav-link">Contato</a>
            </li>
            <li class="mr-4">
              <a href="suporte.php" class="nav-link">Suporte</a>
            </li>
            <li id="nav-b-c">
              <a style="font-size: 95%; width: 150px;" href="pagina-principal.php"
                class="btn btn-outline-light">Entrar</a>
            </li>
          </ul>

        </div>

      </div>
    </nav>
  </header> <!--/Fim Cabealho-->

  <section id="home" class=""> <!-- Início seção logn -->
    <div id="c-menu" class="pgs-1 row align-items-center div-responsive">
      <form class="container col-10" action="./php/config.php" method="POST">
        <div class="form-group">
          <label for="Usuario" style="font-size: 110%;">Usuário</label>
          <input style="height: 40px;" type="text" class="form-control" id="Usuario"
            placeholder="Nome de usuário">
        </div>
        <div class="form-group">
          <label for="Email" style="font-size: 100%;">E-mail</label>
          <input style="height: 40px;" type="email" class="form-control" id="Email"
            placeholder="E-mail">
        </div>
        <div class="form-group">
          <label for="Senha" style="font-size: 100%;">Senha</label>
          <input style="height: 40px;" type="password" class="form-control" id="Senha"
            placeholder="Senha">
        </div>
        <div class="form-group">
          <label for="Senha2" style="font-size: 100%;">Confirmar senha</label>
          <input style="height: 40px;" type="password" class="form-control" id="Senha2"
            placeholder="Senha">
        </div>
        <div class="form-group">
          <label for="telefone" style="font-size: 100%;">Telefone</label>
          <input style="height: 40px;" type="tel" class="form-control phone_with_ddd" id="telefone"
            maxlength="15" onkeyup="telefonecad(dd)" placeholder="(99) 9999-9999">
        </div>
        <div class="form-group form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label style="font-size: 15px;" class="form-check-label" for="exampleCheck1">Concordo com os termos de
            privasidade</label>
        </div>

        <div class="form-check" style="margin-top: 20px;"> <!-- ñ mexer na margin para ñ desformata -->
          <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="opcao1" checked>
          <label style="font-size: 20px;" class="form-check-label" for="exampleRadios1">
            Homem
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="opcao2">
          <label style="font-size: 20px;" class="form-check-label" for="exampleRadios2">
            Mulher
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="opcao2">
          <label style="font-size: 20px;" class="form-check-label" for="exampleRadios2">
            Não identificar
          </label>
        </div>


        <div class="row" style="justify-content: center; margin: 0; margin-top: 20px;">

          <button style="width: 200px;" type="submit" class="btn" id="cadastro">
            <a href="index.php" class="link-cadastro"><strong>Cadastrar</strong></a>
          </button>

        </div>
      </form>

    </div>

  </section> <!-- /Final seção logn -->

  <div class="rodape"> <!-- Início Rodapé-->
    <a href="https://github.com/Otavio1661" target="_blank">
      <p> &copy; Otavio Slva - 2024</p>
    </a>
  </div> <!-- /Fim Rodapé-->

  <!-- JavaScript (Opcional) -->
  <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
  <script src="js/estilo.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
    integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
    integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
    crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.js"></script>
  <script>
  $('.phone_with_ddd').mask('(00) 0000-0000');</script>

</body>

</html>