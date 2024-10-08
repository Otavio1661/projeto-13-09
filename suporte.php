<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

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

          <button class="navbar-toggler" data-toggle="collapse" 
          data-target="#nav-principal">
            <span class="navbar-toggler-icon "></span>
          </button>

          <div style="padding-bottom: 10px;" class="collapse navbar-collapse" id="nav-principal">
            <ul class="navbar-nav ml-auto" style="font-size: 130%;">
              <li>
                <a href="index.php" class="nav-link">Home</a>
              </li>
              <li>
                <a href="cadastro.php" class="nav-link">Cadastrar</a>
              </li>
              <li>
                <a href="" class="nav-link">Contato</a>
              </li>
              <li class="mr-4">
                <a href="suporte.php" class="nav-link active">Suporte</a>
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
            <form class="container col-10">
                <div class="form-group">
                  <label for="exampleInputEmail1" style="font-size: 120%;">Seu e-mail</label>
                  <input style="height: 55px;" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="E-mail">
                  <small id="emailHelp" class="form-text text-muted">Coloque o E-maio para entrarmos em contato</small>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1" style="font-size: 120%;">Relatar problema</label>
                  <textarea style="height: 100px;" type="text" class="form-control" id="exampleInputPassword1" placeholder="Texto"></textarea>
                </div>
              

              <div class="form-check" style=""> <!-- ñ mexer na margin para ñ desformata -->
                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="opcao1" checked>
                <label class="form-check-label" for="exampleRadios1">
                  Atacado 
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="opcao2">
                <label class="form-check-label" for="exampleRadios2">
                  Industria
                </label>

                <div class="row" style="justify-content: center; margin: 0; margin-top: 20px;">
                    <button style="width: 200px;" type="submit" class="btn btn-primary" id="logar">Enviar</button>
                  </div>
                  </form>

              </div>        

        </div>

    </section>  <!-- /Final seção logn -->

    <div class="rodape"> <!-- Início Rodapé-->
      <a href="https://github.com/Otavio1661" target="_blank">
        <p> &copy; Otavio Slva - 2024</p>
      </a>
    </div> <!-- /Fim Rodapé-->

    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="js/estilo.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>