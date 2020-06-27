<!doctype html>
<html lang="en">

<head>
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-107251954-2"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-107251954-2');
  </script>

  <?php require_once("conexao/conexao.php");

  if (isset($_POST["enviar"])) {
    $email = $_POST["email"];
    $nome = utf8_decode($_POST["nome"]);
    $descricao = utf8_decode($_POST["descricao"]);

    $inserir  = "INSERT INTO email ";
    $inserir  .= "(email, nome, descricao) ";
    $inserir  .= "VALUES ";
    $inserir  .= "('$email', '$nome', '$descricao')";

    $retorno = array();
    $operacao_insercao = mysqli_query($conecta, $inserir);

    if ($operacao_insercao) {
      $retorno["sucesso"] = true;
      $retorno["mensagem"] = "Obrigado. Sua mensagem foi enviada com sucesso. Em breve entrarei em contato.";
    } else {
      $retorno["sucesso"] = false;
      $retorno["mensagem"] = "Estamos com um problema para registrar sua mensagem e já estamos atuando para corrigí-lo. Favor tentar um pouco mais tarde !!";
    }
  }
  ?>

  <link rel="shortcut icon" href="_img/faviconAMADICAS.png" type="image/x-icon" />
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="dicas de diversos filmes, livros entre outros">
  <meta name="author" content="AMADICAS">
  <title>AMADICAS</title>
  <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/blog/">

  <!-- Bootstrap core CSS -->
  <link href="_css/vendor/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
  <link href="_css/blog.css" rel="stylesheet">

</head>

<body>
  <nav class="navbar navbar-expand-md navbar-dark bg-dark mb-4">
    <a class="navbar-brand" href="#">
      <img src="_img/faviconAMADICAS.png" width="30" height="30" class="d-inline-block align-top" alt="">
      AMADICAS
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home</a>
        </li>
      </ul>
    </div>
  </nav>

  <main role="main" class="container">
    <div class="jumbotron">
      <h1>AMADICAS</h1>
      <p class="lead">Dicas de conteúdo que consumo no meu dia a dia. Passarei dicas de livros, filmes, séries, textos, tecnologias, podcasts, frases, sites, pessoas, entre muitas outras coisas.</p>
    </div>
    <?php
    if (isset($retorno['mensagem'])) {
      echo "<div class='p-3 mb-2 bg-info text-white'><p class='font-italic text-monospace'>" . $retorno['mensagem'] . "</p></div>";
    }
    ?>
    <div class="blog-post">
      <h2 class="blog-post-title">Minha primeira dica</h2>
      <p class="blog-post-meta">27 de Junho de 2020 <a href="#">AMADICAS</a></p>

      <p>Este é o primeiro post deste blog. Vamos la.... Iniciando a jornada de indicações e dicas...</p>
      <hr>
      <blockquote>
        <p>
          Ultimamente, a leitura de livros tem sido meu maior passatempo, Moro com uma esposa viciada em séries da NetFlix, Amazon Prime e TeleCine, com um adolescente viciado em séries de comédia e em tocar violão, e com um pré-adolescente viciado em video-game e vídeos no tick-tock e youtube. Não sobra muito tempo para mim nas duas televisões que temos em casa. Inclusive nos próximos posts muitos dos filmes que indicarei aqui são os que faço download na internet para assistir pelo meu computador mesmo.
        </p>
        <p>
          Bem, diante disso vou começar com a indicação de um livro que li recentemente. Pensei em várias sugestões pois tenho lido muitos livros diferentes. Mas vou começar indicando o que eu mais gostei de ler recentemente.
        </p>
      </blockquote>
      <blockquote>
        <div id="imagem-dica">
          <p>
            <img src="_img/Livro_A_VELOCIDADE_DA_LUZ.jpg" class="rounded mx-auto d-block img-fluid" alt="Livro_A_VELOCIDADE_DA_LUZ.jpg">
          </p>
          <p>
            <h4>
              Livro: <a href="arquivos/livros/Livro-A-Velocidade-da-Luz-Javier-Cercas.mobi">A Velocidade da Luz - Javier Cercas</a>
            </h4>
          </p>
          <p class="font-italic">
            <strong>Resenha ofical: </strong>
            Espanha, final dos anos 80. Um convite para lecionar em uma cidade no interior dos Estados Unidos muda para sempre a vida de um jovem aspirante a escritor. Lá, ele conhece Rodney Falk, homem cínico, culto e marcado por um terrível segredo de guerra. A partir desse encontro, os personagens - tão complexos e humanos - desenvolverão uma relação tumultuosa que culminará em um enfrentamento trágico da realidade e os seus demônios.
          </p>
        </div>
      </blockquote>
      <blockquote>
        <p>
          Peguei a indicação desse livro no youtube no canal da Tatiana Feltrin. Esse foi um dos livros que ela indicou como sendo um de seus favoritos de todos os tempos. Inclusive muitos dos livros que tenho lido recentemente vem como indicação dela.
        </p>
        <p>
          Esse livro mantém o leitor preso do início ao fim. Algumas reviravoltas durante a história te deixarão de boca aberta, as vezes até sem conseguir respirar. Um livro eletrizando até mesmo na forma em que é escrito, sem muitas formatações. Um livro para se ler rápido, sem parar, na velocidade da luz.
        </p>
        <p>
          Uso o aplicativo <a href="https://www.skoob.com.br/usuario/2394404" target="_blank">Skoob</a> para registrar todos os livros que leio. É uma rede social que conecta leitores de todos os lugares do Brasil e do Mundo. Clica ai para me seguir por lá também se não tiver a paciência de esperar as indicações por aqui.
        </p>
        <p>
          No link acima estou disponibilizando o link para download do livro em formato epub para quem tem o kindle como eu. Nem sempre leio livros no kindle. Eu diversifico bastante entre livros digitais e em papel mesmo.
        </p>
      </blockquote>
    </div><!-- /.blog-post -->

    <nav class="blog-pagination">
      <a class="btn btn-outline-secondary disabled" href="#">Older</a>
      <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
    </nav>

    <div id="componente-formulario-email" class="container border">

      <div class="row">
        <div class="col-lg-8 col-lg-offset-2">
          <h3>Entre em contato</h3>
        </div>
      </div>
      <div id="formulario_email">
        <form action="index.php" method="post">
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="email">Email</label>
              <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
            </div>
            <div class="form-group col-md-6">
              <label for="nome">Nome</label>
              <input type="text" class="form-control" name="nome" id="nome" placeholder="Nome (opcional)">
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-12">
              <label for="descricao">Mensagem</label>
              <textarea class="form-control" name="descricao" id="descricao" placeholder="Deixe seus comentários (opcional)"></textarea>
            </div>
          </div>

          <button id="botao-enviar-email" type="submit" name="enviar" class="btn btn-primary">Enviar</button>

        </form>
      </div>
    </div>
  </main>

  <footer class="blog-footer">
    <p>Blog for AMADICAS</p>
    <p><a href="#">Back to top</a></p>
  </footer>

  <!-- Bootstrap core JavaScript
    ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script>
    window.jQuery || document.write('<script src="_js/vendor/jquery-slim.min.js"><\/script>')
  </script>
  <script src="_js/vendor/popper.min.js"></script>
  <script src="_js/vendor/bootstrap.min.js"></script>
  <script src="_js/vendor/holder.min.js"></script>
  <script>
    Holder.addTheme('thumb', {
      bg: '#55595c',
      fg: '#eceeef',
      text: 'Thumbnail'
    });
  </script>

</body>

</html>