
<?php
session_start();

// Verifica se os cookies existem e realiza login automático se existirem
if (isset($_COOKIE['lembrar_login']) && isset($_COOKIE['lembrar_senha'])) {
    $_SESSION['email'] = $_COOKIE['lembrar_login'];
    $_SESSION['senha'] = $_COOKIE['lembrar_senha'];

    // Redireciona para a página após o login
    header('Location: perfilwelcome.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">

    <link rel="shortcut icon" href="img/Logo ping(favicon).png" type="image/x-icon">
    
    <title>Ping</title>
</head>
<body>

    <!-- header -->
    <?php
        include_once("assets/header.php")
    ?>

    <!-- main image -->
    <div class="container d-flex my-5" id="main-container">
        <div class="col-7" id="main-image-container"><a href="review.php"><img src="img/games_games_review/baldurs-gate-3.jpg" class="main-image"></a></div>
        <div class="col-5" id="main-text-container">
            <div class="m-5">
                <a href="review.php" class="-main-text">Baldur's Gate 3<br>É o jogo destaque do mês de agosto.
                <br>
                <span class="-main-subtext">
                    Veja as impressões iniciais do aclamado RPG...
                </span>
                </a>
            </div>
        </div>
    </div>

    <!-- button -->

    <div class="d-grid gap-2 d-md-flex justify-content-md-center" id="botao">
      <button class="btn btn-primary me-md-2 px-5 py-3 bg-style" type="button"><a href="#noticias">Notícias</a></button>
      <button class="btn btn-primary px-5 py-3 bg-style" type="button"><a href="#games-retro">G(old)</a></button>
    </div>

    <!-- Lançamentos -->
    <div id="lançamentos">

      <h2 class="container" id="calendario">Calendário de lançamentos</h2>
      <div id="carouselExampleControls" class="carousel" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="card">
                    <div class="img-wrapper"><img src="img/games_carousel/blasphemous.jpg" class="" alt="..."> </div>
                    <div class="card-body">
                        <h5 class="card-title">Blasphemous II</h5>
                        <p class="card-text">25/08/23</p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="card">
                    <div class="img-wrapper"><img src="img/games_carousel/seaofstars.jpg" class="" alt="..."> </div>
                    <div class="card-body">
                        <h5 class="card-title">Sea of Stars</h5>
                        <p class="card-text">28/08/23</p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="card">
                    <div class="img-wrapper"><img src="img/games_carousel/starfield.jpg" class="" alt="..."> </div>
                    <div class="card-body">
                        <h5 class="card-title">Starfield</h5>
                        <p class="card-text">06/09/23</p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
              <div class="card">
                  <div class="img-wrapper"><img src="img/games_carousel/nba2k.jpeg" class="" alt="..."> </div>
                  <div class="card-body">
                      <h5 class="card-title">NBA 2K24</h5>
                      <p class="card-text">08/09/23</p>
                  </div>
              </div>
          </div>
            <div class="carousel-item">
                <div class="card">
                  <div class="img-wrapper"><img src="img/games_carousel/mortal.jpg" class="" alt="..."> </div>
                  <div class="card-body">
                      <h5 class="card-title">Mortal Kombat 1</h5>
                      <p class="card-text">19/09/23</p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="card">
                    <div class="img-wrapper"><img src="img/games_carousel/liesofp.jpg" class="" alt="..."> </div>
                    <div class="card-body">
                        <h5 class="card-title">Lies of P</h5>
                        <p class="card-text">19/09/23</p>
                    </div>
                </div>
            </div>
          <div class="carousel-item">
              <div class="card">
                  <div class="img-wrapper"><img src="img/games_carousel/payday.jpg" class="" alt="..."> </div>
                  <div class="card-body">
                      <h5 class="card-title">Payday 3</h5>
                      <p class="card-text">21/09/23</p>
                  </div>
              </div>
          </div>
          <div class="carousel-item">
              <div class="card">
                  <div class="img-wrapper"><img src="img/games_carousel/assassins.jpg" class="" alt="..."> </div>
                  <div class="card-body">
                      <h5 class="card-title">Assassin's Creed Mirage</h5>
                      <p class="card-text">12/10/23</p>
                  </div>
              </div>
          </div>
          <div class="carousel-item">
              <div class="card">
                  <div class="img-wrapper"><img src="img/games_carousel/Forza-Motorsport-capa-001.jpg" class="" alt="..."> </div>
                  <div class="card-body">
                      <h5 class="card-title">Forza Motorsport</h5>
                      <p class="card-text">10/10/23</p>
                  </div>
              </div>
          </div>
          <div class="carousel-item">
              <div class="card">
                  <div class="img-wrapper"><img src="img/games_carousel/alanwake.jpg" class="" alt="..."> </div>
                  <div class="card-body">
                      <h5 class="card-title">Alan Wake II</h5>
                      <p class="card-text">17/10/23</p>
                  </div>
              </div>
          </div>
            <div class="carousel-item">
              <div class="card">
                  <div class="img-wrapper"><img src="img/games_carousel/mario.jpg" class="" alt="..."> </div>
                  <div class="card-body">
                      <h5 class="card-title">Super Mario Bros. Wonder</h5>
                      <p class="card-text">20/10/23</p>
                  </div>
              </div>
          </div>
          <div class="carousel-item">
              <div class="card">
                  <div class="img-wrapper"><img src="img/games_carousel/spiderman.jpg" class="" alt="..."> </div>
                  <div class="card-body">
                      <h5 class="card-title">Marvel's Spider-Man 2</h5>
                      <p class="card-text">20/10/23</p>
                  </div>
              </div>
          </div>
            <div class="carousel-item">
              <div class="card">
                  <div class="img-wrapper"><img src="img/games_carousel/likeadragon.jpg" class="" alt="..."> </div>
                  <div class="card-body">
                      <h5 class="card-title">Like a Dragon Gaiden</h5>
                      <p class="card-text">09/11/23</p>
                  </div>
              </div>
          </div>
          <div class="carousel-item">
              <div class="card">
                  <div class="img-wrapper"><img src="img/games_carousel/cod.jpg" class="" alt="..."> </div>
                  <div class="card-body">
                      <h5 class="card-title">Call of Duty: Modern Warfare 3</h5>
                      <p class="card-text">10/11/23</p>
                  </div>
              </div>
          </div>
          <div class="carousel-item">
              <div class="card">
                  <div class="img-wrapper"><img src="img/games_carousel/persona-5-tactica-cover.cover_large.jpg" class="" alt="..."> </div>
                  <div class="card-body">
                      <h5 class="card-title">Persona 5 Tactica</h5>
                      <p class="card-text">17/11/23</p>
                  </div>
              </div>
          </div>
          <div class="carousel-item">
              <div class="card">
                  <div class="img-wrapper"><img src="img/games_carousel/avatar.jpg" class="" alt="..."> </div>
                  <div class="card-body">
                      <h5 class="card-title">Avatar: Frontiers of Pandora</h5>
                      <p class="card-text">07/12/23</p>
                  </div>
              </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
        </div>
    </div>

    <!-- Reviews -->
    <div class="container" id="games-container">
        <div class="col-12 my-4">
            <h1>Reviews</h1>
        </div>
        <div class="row gx-md-5">
            <div class="col-12 col-md-6" id="section-reviews">
                <div class="small-image-container center-image"><a href="review.php"><img src="img/games_games_review/baldurs-gate-3 (3).jpg" id="img2"></a></div>
                <div class="small-container">
                    <a href="review.php">
                        <h2>Baldur's Gate 3: Das mesas aos consoles!</h2>
                    </a>
                <div class="row">
                    <div class="col-12 text-truncate">
                        Este texto é muito grande, infelizmente precisamos resumir para caber na páginaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa.
                    </div>
                </div>
                </div>
            </div>
            <div class="col-12 col-md-6" id="section-reviews">
                <div class="small-image-container center-image"><a href="review3.php"><img src="img/games_games_review/sekiro2.png" id="img2"></a></div>
                <div class="small-container">
                    <a href="review3.php">
                        <h2>Sekiro: Shadows Die Twice: Espadas afiadas e sofrimento! </h2>
                    </a>
                <div class="row">
                    <div class="col-12 text-truncate">
                        Confesso que, à primeira vista, Sekiro: Shadows Die Twice me transmitiu um semblante inocente.
                    </div>
                </div>
                </div>
            </div>
            <div class="col-12 col-md-6" id="section-reviews">
                <div class="small-image-container center-image"><a href="#"><img src="img/games_games_review/re8.jpg" id="img2"></a></div>
                <div class="small-container">
                    <a href="#">
                        <h2>Resident Evil VIIlage: Sustos, monstros e adrenalina.</h2>
                    </a>
                <div class="row">
                    <div class="col-12 text-truncate">
                        Neste novo jogo de Resident Evil, mais uma vez o jogador vive uma história protagonizada por Ethan, personagem principal de RE 7:
                    </div>
                </div>
                </div>
            </div>
            <div class="col-12 col-md-6" id="section-reviews">
                <div class="small-image-container center-image"><a href="#"><img src="img/games_games_review/stray.jpg" id="img2"></a></div>
                <div class="small-container">
                    <a href="#">
                        <h2>Stray: Explorando um Mundo robótico com um Gato Curioso.</h2>
                    </a>
                <div class="row">
                    <div class="col-12 text-truncate">
                        Stray é fofo, divertido e muito emocionante. Começamos Stray ao lado de nossa família..
                    </div>
                </div>
                </div>
            </div>
            <div class="col-12 col-md-6" id="section-reviews">
                <div class="small-image-container center-image"><a href="#"><img src="img/games_games_review/needforunbound.png" id="img2"></a></div>
                <div class="small-container">
                    <a href="#">
                        <h2>Need for Speed Unbound: A essência da pilotagem trazida de volta.</h2>
                    </a>
                <div class="row">
                    <div class="col-12 text-truncate">
                        O estilo artístico de Unbound assustou à primeira vista. Quando o primeiro trailer do novo jogo de uma aclamada série foi 
                    </div>
                </div>
                </div>
            </div>
            <div class="col-12 col-md-6" id="section-reviews">
                <div class="small-image-container center-image"><a href="#"><img src="img/games_games_review/mw2.jpg" id="img2"></a></div>
                <div class="small-container">
                    <a href="#">
                        <h2>Call of Duty: Modern Warfare 2 - Uma Explosiva Jornada de Combate Intenso!</h2>
                    </a>
                <div class="row">
                    <div class="col-12 text-truncate">
                        Quem esperava muitas mudanças ou uma revolução neste game, pode acalmar os ânimos. E isso é uma boa notícia
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>

    <!-- retro -->

    <div class="container" id="games-container">
        <div class="col-12 my-4">
            <h1 class="h1-games-retro" id="games-retro">Reviews - <span class="gold">G(OLD)</span></h1>
        </div>
        <div class="row gx-md-5">
            <div class="col-12 col-md-6" id="section-reviews">
                <div class="small-image-container center-image"><a href="review_2.php"><img src="img/gold/chrono trigger.png" id="img2"></a></div>
                <div class="small-container" id="small-container-retro">
                    <a href="review_2.php">
                        <h2>Chrono Trigger: Uma Jornada através do Tempo.</h2>
                    </a>
                <div class="row">
                    <div class="col-12 text-truncate">
                        Chrono Trigger é um clássico do Super Nintendo, mas que foi relançado algumas vezes ao longo dos anos, inclusive para PlayStation 1, Nintendo DS e, ma
                    </div>
                </div>
                </div>
            </div>
            <div class="col-12 col-md-6" id="section-reviews">
                <div class="small-image-container center-image"><a href="#"><img src="img/gold/Need-for-Speed-Most-Wanted-Remake-premiera-768x432 (1).jpg" id="img2"></a></div>
                <div class="small-container" id="small-container-retro">
                    <a href="#">
                        <h2>Need for Speed: Most Wanted - Domine as Ruas da Cidade.</h2>
                    </a>
                <div class="row">
                    <div class="col-12 text-truncate">
                        Se há uma coisa certa na vida é que, com qualquer lançamento de novo sistema, você terá pelo menos dois ou três novos
                    </div>
                </div>
                </div>
            </div>
            <div class="col-12 col-md-6" id="section-reviews">
                <div class="small-image-container center-image"><a href="#"><img src="img/gold/Crash-Bandicoot-PS1 (1).jpg" id="img2"></a></div>
                <div class="small-container" id="small-container-retro">
                    <a href="#">
                        <h2>Crash Bandicoot: Girando e Explodindo no PS1!</h2>
                    </a>
                <div class="row">
                    <div class="col-12 text-truncate">
                        Ao mergulhar na nostálgica experiência de jogar Crash Bandicoot no PlayStation 1
                    </div>
                </div>
                </div>
            </div>
            <div class="col-12 col-md-6" id="section-reviews">
                <div class="small-image-container center-image"><a href="#"><img src="img/gold/guitarhero.png" id="img2"></a></div>
                <div class="small-container" id="small-container-retro">
                    <a href="#">
                        <h2>Guitar Hero 3: Seja uma Lenda do Rock!</h2>
                    </a>
                <div class="row">
                    <div class="col-12 text-truncate">
                        Guitar Hero III: Legends of Rock, lançado em 2007, é um marco indiscutível na história dos jogos musicais. Ao pegar a lendária guitarra de plástico, os jogadores são
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>

    <!-- news -->
    <div class="container" id="noticias">
        <div class="col-12 my-4">
            <h1 class="text-light" id="">Notícias</h1>
        </div>

        <div class="card mb-3" id="card-news" style="max-width: 800px; max-height: 200px;">
            <div class="row g-0">
              <div class="col-md-4" id="card-img">
                <a href="noticias.php"><img src="img/news/starfield-dinossauros_yrN9aJc (1).jpg" class="img-fluid" id="-card-img" alt=""></a>
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h4 class="card-title"><a href="noticias.php" id="card-title">A história por trás de Starfield, o jogo que demorou 25 anos para nascer</a></h5>
                  <p class="card-text text-light">Como a Bethesda criou seu novo RPG espacial, inspirado em clássicos da ficção científica e em sua própria paixão pelo cosmos.</p>
                  <p class="card-text"><small class="text-white-50">Ultíma atualização há 3 minutos</small></p>
                </div>
              </div>
            </div>
          </div>
          
        <div class="card mb-3" id="card-news" style="max-width: 800px; max-height: 200px;">
            <div class="row g-0">
              <div class="col-md-4" id="card-img">
                <a href="#"><img src="img/news/heineken.png" class="img-fluid" id="-card-img" alt=""></a>
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h4 class="card-title"><a href="#" id="card-title">Conheça a geladeira gamer da Heineken que resfria a cerveja e o PC</a></h5>
                  <p class="card-text text-light">A Heineken, conhecida mundialmente por suas cervejas, decidiu entrar no universo gamer de uma maneira inusitada.</p>
                  <p class="card-text"><small class="text-white-50">Ultíma atualização há 30 minutos</small></p>
                </div>
              </div>
            </div>
          </div>
          
        <div class="card mb-3" id="card-news" style="max-width: 800px; max-height: 200px;">
            <div class="row g-0">
              <div class="col-md-4" id="card-img">
                <a href="#"><img src="img/news/jogos xbox.jpg" class="img-fluid" id="-card-img" alt=""></a>
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h4 class="card-title"><a href="#" id="card-title">Xbox: jogos com até 90% de desconto para Xbox One e Series S|X</a></h5>
                  <p class="card-text text-light">Aproveite as ofertas imperdíveis da Microsoft Store e garantea os melhores títulos da sua plataforma favorita.</p>
                  <p class="card-text"><small class="text-white-50">Ultíma atualização há 40 minutos</small></p>
                </div>
              </div>
            </div>
          </div>
          
        <div class="card mb-3" id="card-news" style="max-width: 800px; max-height: 200px;">
            <div class="row g-0">
              <div class="col-md-4" id="card-img">
                <a href="#"><img src="img/news/playstation-plus.jpg" class="img-fluid" id="-card-img" alt=""></a>
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h4 class="card-title"><a href="#" id="card-title">PlayStation Plus aumenta preço do plano anual no Brasil; veja os novos valores</a></h5>
                  <p class="card-text text-light">Serviço de assinatura da Sony reajusta seus valores para acompanhar a inflação e o mercado internacional.</p>
                  <p class="card-text"><small class="text-white-50">Ultíma atualização há 59 minutos</small></p>
                </div>
              </div>
            </div>
          </div>
          
        <div class="card mb-3" id="card-news" style="max-width: 800px; max-height: 200px;">
            <div class="row g-0">
              <div class="col-md-4" id="card-img">
                <a href="#"><img src="img/news/diabloiv.png" class="img-fluid" id="-card-img" alt=""></a>
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h4 class="card-title"><a href="#" id="card-title">Diablo IV entra em promoção e dá bônus para jogadores; veja os preços</a></h5>
                  <p class="card-text text-light">O novo capítulo da saga de RPG de ação da Blizzard está com descontos imperdíveis.</p>
                  <p class="card-text"><small class="text-white-50">Ultíma atualização há 2 horas</small></p>
                </div>
              </div>
            </div>
          </div>
          
        <div class="card mb-3" id="card-news" style="max-width: 800px; max-height: 200px;">
            <div class="row g-0">
              <div class="col-md-4" id="card-img">
                <a href="#"><img src="img/news/baldursgate.png" class="img-fluid" id="-card-img" alt=""></a>
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h4 class="card-title"><a href="#" id="card-title">Baldur's Gate 3 tem decepcionado jogadores que escolheram caminho do mal</a></h5>
                  <p class="card-text text-light">O RPG de fantasia da Larian Studios apresenta uma narrativa desbalanceada e limitada para quem opta por alinhamentos malignos, segundo críticas dos fãs.</p>
                  <p class="card-text"><small class="text-white-50">Ultíma atualização há 3 horas</small></p>
                </div>
              </div>
            </div>
          </div>
    </div>

    <footer>
        <div class="container p-4">
          <div class="row">
            <div class="col-lg-6 col-md-12 mb-4">
              <h5 class="mb-3" id="--footer-h5">Sobre Nós</h5>
              <p class="nós">
                Uma empresa especializada em comentários e reviews de jogos, diretamente de jogadores a outros jogadores. A nossa missão é oferecer uma plataforma onde os gamers possam compartilhar as suas opiniões, dicas, críticas e elogios sobre os jogos que jogam, criando uma comunidade de jogadores que se ajudem mutuamente a escolher os melhores jogos, a superar os desafios e a se divertir.
              </p>
            </div>
            <div class="col-lg-3 col-md-6 mb-4">
            </div>
            <div class="col-lg-3 col-md-6 mb-4">
              <h5 class="mb-1" id="--footer-h5">Contato</h5>
              <ul class="list-unstyled mb-0">

            <li class="mb-2">
              <i class="bi bi-instagram "> @ping_games</i>
            </li>
            <li class="mb-2">
              <i class="bi bi-facebook"> @ping_games</i>
            </li>
            <li class="mb-2">
              <i class="bi bi-envelope-at-fill"> ping.games@gmail.com</i>
            </li>
            <li class="mb-2">
              <i class="bi bi-telephone"> (55)11 9999-9999</i>
            </li>

              </ul>
              
            </div>
          </div>
        </div>
        <div class="Copyright">
          © 2023 Copyright:
          <a class="ping-copyrigth" href="#">Ping.com</a>
        </div>
      </footer>
      

    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <script src="index.js"></script>
</body>
</html>