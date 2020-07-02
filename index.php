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
      $retorno["mensagem"] = "Estamos com um problema para registrar sua mensagem e já estamos atuando para corrigí-lo. Tente novamente jájá";
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
        <li class="nav-item active">
          <a class="nav-link" href="listas-de-dicas">Listas de dicas</a>
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

    <div class="row">
      <div class="col-md-10 blog-main">

      <div class="blog-post">
          <h2 class="blog-post-title">
            Um filme e um livro - Meu top 1
          </h2>
          <p class="blog-post-meta">
            02 de Julho de 2020
            <a href="#">AMADICAS</a>
          </p>
          <p>
            Livro e Filme com várias referencias musicais.
            <hr>
          </p>
          <blockquote>
            <p>
              Dessa vez vou dar duas indicações em apenas um post. Um livro e um filme. Eu gosto de fazer nessa ordem, primeiro ler o livro e depois ver o filme mas nada impede você de fazer o contrário ou, se preferir só ler o livro ou, como sei que é o que a maioria vai fazer nos dias de hoje, só ver o filme. 
            </p>
            <p>
              Tudo bem só ver o filme pois ele é bem fiel ao livro mas pode ser que na velocidade em que as cenas se passem, você acabe perdendo algumas das referencias. E são muitas as referências. O livro é mesmo cheio delas, principalmente referências musicais mas temos algumas indicações de filmes, seriados de televisão americana e artistas também. 
            </p>
            <p>
              Durante a leitura desse livro dei uma inflada em minhas listas do spotify. (Em seguida descobri que já havia uma lista criada lá com todas as referencias do livro lá mas tudo bem....)
            </p>
            <p>
              Já vi o filme duas vezes, uma com legendas em inglês e outra com as legendas em português. Vale a pena. Esse filme com certeza entrou na lista lá no meu top 5 de filmes preferidos de todos os tempos. Claro que pode ser o momento e as indicações musicais e trilha sonora, mas tudo bem.
            </p>
            <p>
              Mais uma vez peguei a indicação desse livro do canal da Tati Feltrin no youtube, como sendo também um dos melhores livros que ela ja leu na vida.
            </p>
            <p>
              E claro, mais uma vez deixo aqui meu perfil no <a href="https://www.skoob.com.br/usuario/2394404" target="_blank">Skoob</a> para os apressadinhos que já querem novas indicações de livros.
            </p>
          </blockquote>
          <blockquote>
            <div id="imagem-dica">
              <p>
                <img src="_img/filme_ALTA_FIDELIDADE.jpg" class="rounded mx-auto d-block img-fluid" alt="filme_ALTA_FIDELIDADE.jpg">
                <img src="_img/livro_ALTA_FIDELIDADE.jpg" class="rounded mx-auto d-block img-fluid" alt="livro_ALTA_FIDELIDADE.jpg">
              </p>
              <p>
                <h4>
                  Filme e Livro: Alta Fidelidade </a>
                </h4>
              </p>
              <p class="font-italic">
                <ul>
                  <li>
                    <strong>Direção filme: </strong>Stephen Frears
                  </li>
                  <li>
                    <strong>Autor do livro: </strong>Nick Hornby
                  </li>
                  <li>
                    <strong>Onde está disponível o filme: </strong>
                    <a href="https://drive.google.com/file/d/109u-O4aaWHCOIGBHoeOFkWs091xQEYVF/view?usp=sharing" target="_blank">
                      download filme
                    </a> 
                    e download legendas (<a href="https://drive.google.com/file/d/1rA2_dl-47HibxF3YkbTZfrpfAKLKWj9a/view?usp=sharing" target="_blank">inglês</a> e <a href="https://drive.google.com/file/d/1peMVYdNdGLBBh5F1yZiq3uM4VlzKw2EW/view?usp=sharing" target="_blank">português</a>)
                  </li>
                  <li>
                    <strong>Onde está disponível o livro: </strong>
                    <a href="arquivos/livros/Livro-Alta-Fidelidade-Nick-Hornby.mobi">
                      download livro epub
                    </a>
                  </li>
                </ul>
                <strong>Resenha google: </strong>Rob Gordon está passando por uma crise aos trinta e poucos anos. Após ser dispensado pela namorada, ele resolve analisar seus cinco relacionamentos mais marcantes para tentar descobrir por que eles não deram certo.
              </p>
            </div>
          </blockquote>
        </div><!-- /.blog-post -->

        <div class="blog-post">
          <h2 class="blog-post-title">
            Um filme real e sensível
          </h2>
          <p class="blog-post-meta">
            28 de Junho de 2020
            <a href="#">AMADICAS</a>
          </p>
          <p>
            Filme da década de 40/50 com temas mais atuais do que gostaríamos que os fossem.
            <hr>
          </p>
          <blockquote>
            <p>
              O filme mostra como o preconceito contra a mulher pode vir de todos os lados (pai, marido, amigo do trabalho, médico). Mesmo em frases "despretensiosas". Claro que o filme é da década de 40/50 mas, infelizmente, é triste constatar o quanto isso ainda ocorre nos dias atuais.
            </p>
            <p>
              Com atuações muito incríveis durante todo o filme mostra como esse tipo de preconceito pode deixar uma pessoa literalmente invisível, sem encontrar o seu lugar no mundo e sua felicidade.
            </p>
            <p>
              Vale muito enaltecer, é claro, a atuação de ouro da grande Fernanda Montenegro no final, para quebrar tudo e fazer as lágrimas rolarem.
            </p>
          </blockquote>
          <blockquote>
            <div id="imagem-dica">
              <p>
                <img src="_img/filme_A_VIDA_INVISIVEL.jpg" class="rounded mx-auto d-block img-fluid" alt="filme_A_VIDA_INVISIVEL.jpg">
              </p>
              <p>
                <h4>
                  Filme: <a href="https://www.telecineplay.com.br/filme/A_Vida_Invisivel_19822">A Vida Invisível </a>
                </h4>
              </p>
              <p class="font-italic">
                <ul>
                  <li><strong>Direção: </strong>Karim Aïnouz</li>
                  <li><strong>Elenco: </strong>Carol Duarte, Julia Stockler, Gregório Duvivier</li>
                  <li><strong>Participação mais que especial: </strong>Fernanda Montenegro</li>
                  <li><strong>Nacionalidades: </strong>Brasil, Alemanha</li>
                  <li><strong>Onde está disponível: </strong><a href="https://www.telecineplay.com.br/" target="_blank">TeleCine Play</a></li>
                </ul>

                Rio de Janeiro, década de 1940. Eurídice (Carol Duarte) é uma jovem talentosa, mas bastante introvertida. Guida (Julia Stockler) é sua irmã mais velha, e o oposto de seu temperamento em relação ao convívio social. Ambas vivem em um rígido regime patriarcal, o que faz com que trilhem caminhos distintos: Guida decide fugir de casa com o namorado, enquanto Eurídice se esforça para se tornar uma musicista, ao mesmo tempo em que precisa lidar com as responsabilidades da vida adulta e um casamento sem amor com Antenor (Gregório Duvivier).

              </p>
            </div>
          </blockquote>
          <blockquote>
            <p>
              Se estiver interessado no download do filme para assistir em casa entre em contato que tentarei conseguir para você.
            </p>
          </blockquote>
        </div><!-- /.blog-post -->

        <div class="blog-post">
          <h2 class="blog-post-title">
            Minha primeira dica
          </h2>
          <p class="blog-post-meta">
            27 de Junho de 2020 
            <a href="#">
              AMADICAS
            </a>
          </p>

          <p>Este é o primeiro post deste blog. Vamos la.... Iniciando a jornada de indicações e dicas...</p>
          <hr>
          <blockquote>
            <p>
              Ultimamente, a leitura de livros tem sido meu maior passatempo, Moro com uma esposa viciada em séries da NetFlix, Amazon Prime e TeleCine, com um adolescente viciado em séries de comédia e em tocar violão, e com um pré-adolescente viciado em video-game e vídeos no tick-tock e youtube. Não sobra muito tempo para mim nas duas televisões que temos em casa. Inclusive nos próximos posts muitos dos filmes que indicarei aqui são os que faço download na internet para assistir pelo meu computador mesmo.
            </p>
            <p>
              Bem, diante disso vou começar com a indicação de um livro que li recentemente. Pensei em várias sugestões pois tenho lido muitos livros diferentes. Mas vou começar indicando o que eu mais gostei de ler recentemente.
            </p>
            <p>
              Peguei a indicação desse livro no youtube no canal da Tatiana Feltrin. Esse foi um dos livros que ela indicou como sendo um de seus favoritos de todos os tempos. Inclusive muitos dos livros que tenho lido recentemente vem como indicação dela.
            </p>
            <p>
              Esse livro mantém o leitor preso do início ao fim. Algumas reviravoltas durante a história te deixarão de boca aberta, as vezes até sem conseguir respirar. Um livro eletrizando até mesmo na forma em que é escrito, sem muitas formatações. Um livro para se ler rápido, sem parar, na velocidade da luz.
            </p>
            <p>
              Uso o aplicativo <a href="https://www.skoob.com.br/usuario/2394404" target="_blank">Skoob</a> para registrar todos os livros que leio. É uma rede social que conecta leitores de tod
              os os lugares do Brasil e do Mundo. Clica ai para me seguir por lá também se não tiver a paciência de esperar as indicações por aqui.
            </p>
            <p>
              No link acima estou disponibilizando o link para download do livro em formato epub para quem tem o kindle como eu. Nem sempre leio livros no kindle. Eu diversifico bastante entre livros digitais e em papel mesmo.
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
        </div>
        <nav class="blog-pagination">
          <a class="btn btn-outline-secondary disabled" href="#">Older</a>
          <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
        </nav>
      </div>
      <aside class="col-md-2 blog-sidebar">

        <div class="p-3">
          <h4 class="font-italic">Arquivos</h4>
          <ol class="list-unstyled mb-0">
            <li><a href="#">Junho 2020</a></li>
            <li><a href="#">Julho 2020</a></li>
          </ol>
        </div>
        <div class="p-3">
          <h4 class="font-italic">Listas</h4>
          <ol class="list-unstyled">
            <li><a href="filmes">Filmes</a></li>
            <li><a href="livros">Livros</a></li>
          </ol>
        </div>
      </aside><!-- /.blog-sidebar -->


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