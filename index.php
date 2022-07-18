<?php
    session_start(); // inicia a variavel $_SESSION
    $url = explode('/', $_SERVER['REQUEST_URI']); //pega a url e transforma em uma array
    //$page = $url[3]; // URL Local
    $page = $url[1]; // URL Online
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <!--LINK ICONE NA GUIA-->
  <link rel="icon" href="img/ICONE-LOJA-ON.png">

  <!--LINK FONTAWESOME ICONS-->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css"
    integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

  <!--LINK CSS-->
  <link rel="stylesheet" type="text/css" href="css/estilo.css" />

  <!-- Swiper CSS -->
  <link rel="stylesheet" href="css/swiper-bundle.min.css">

  <!--FONTAWESOME CDN LINK-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
    integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <title>LojaOn</title>
</head>

<body class="no-js">
  <header class="header">
    <a href="index.php" class="logo-text">LojaOn</a>

    <button style="display: none;" class="header__btnMenu"><i class="fas fa-bars fa-2x"></i><span
        class="sr-only">Menu</span></button>

    <nav class="header__nav">
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="#comofunc">Como funciona?</a></li>
        <li><a href="#title_plano">Planos</a></li>
        <li><a href="#alunos">Nossos Alunos</a></li>
        <li><a href="#FAQ">FAQs</a></li>
        <li><a href="#">Quem é Geisa?</a></li>
      </ul>
    </nav>
  </header>

  <section class="hero">
    <div class="hero_div">

      <div class="title">
        <h1 class="hero__title">Planeje e execute as ações do mês da sua loja online e nunca mais fique
          sem vender!</h1>
        <p class="hero__text">Eu sei que você tem dificuldade em saber qual é o próximo passo, saber
          planejar a próxima ação de venda, saber qual produto focar na próxima semana e
          mesmo quando finalmente consegue se planejar não consegue executar, e por
          isso, no final do dia sempre se sente improdutiva.
          Sei disso, porque também tenho uma loja online desde 2013 e olhando pra trás
          vejo que só foi possível sair do zero e faturar mais de 2 milhões por ano quando
          comecei a criar planos de ações semanais. É esse planejamento que compartilho</p>
        <div class="btn">
          <a href="#title_plano" class="hero__btn">Comece agora</a>
        </div>
      </div>

      <div class="hero_image">
        <img src="img/fotos/GEISA-1237x1274.png" alt="imagem">
      </div>
    </div>
  </section>

  <div class="container">
    <section class="section_conheco">
      <h2>Eu te conheço</h2>
      <p>Eu sei que você tem dificuldade em saber qual é o próximo passo, saber
        planejar a próxima ação de venda, saber qual produto focar na próxima semana e
        mesmo quando finalmente consegue se planejar não consegue executar, e por
        isso, no final do dia sempre se sente
        <!--<span id="pontos">...</span><span id="mais">-->improdutiva.
        Sei disso, porque também tenho uma loja online desde 2013 e olhando pra trás
        vejo que só foi possível sair do zero e faturar mais de 2 milhões por ano quando
        comecei a criar planos de ações semanais. É esse planejamento que compartilho
        com você dentro do LojaON!
        <!--</span>-->
      </p>
      <!--<button onclick="LeiaMais()" id="btnLeiaMais">Leia Mais</button>-->
    </section>
  </div>

  <section id="comofunc" class="section_como_func container">
    <h2>Como funciona a lojaOn?</h2>
    <!--Video-->

    <div class="embed-responsive embed-responsive-16by9">
      <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/WsEv01p3GXU" title="YouTube video player"
        frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
        allowfullscreen></iframe>
    </div>

    <p>O LojaON é um planejamento estratégico para você saber o que executar em
      cada semana. O encontro de planejamento acontece ao vivo e online uma vez
      por mês, você pode participar ao vivo ou assistir a gravação. Esse
      planejamento é dividido por semanas, ou seja, cada semana possui
      ações
      diferentes para o seu negócio. Você também recebe um checklist semanal para
      garantir a execução de todas as ações. Além disso, semanalmente você
      recebe um e-mail de lembrete para não esquecer de planejar a próxima
      semana. O LojaOn é tudo o que você precisa para nunca mais ser improdutiva na sua loja online.</p>
  </section>

  <!--DESCUBRA O PQ LOJA ON É PERFEITO PARA VOCE-->
  <section class="section_descubra">
    <div class="container">
      <div class="texto_video">
        <h2>Descubra por que o LojaON é perfeito para você</h2>
        <p>Assista alguns trechos dos nossos planejamentos semanais e veja na prática o
          quanto podemos contribuir para o crescimento da sua empresa. Com uma
          didática simples e objetiva, com ações possíveis de serem executadas no seu
          dia a dia</p>
      </div>

      <div class="embed-responsive embed-responsive-16by9">
        <iframe id="video" class="embed-responsive-item" autoplay="1" frameborder="0"
          src="https://www.youtube.com/embed/r5SyeE9KCFw"
          allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
          allowfullscreen></iframe>
      </div>
      <div class="div_p_video">
        <p class="p_subtitulo_video">Clique nas aulas abaixo e confira mais trechos, que foram selecionados com cuidado
          para te ajudar a chegar mais longe.
          A sua mudança começa agora.</p>
      </div>


      <!--GALERIA MOBILE-->
      <div class="mobile_galeria">
        <div onclick="trocar1()" class="card_video" id="video-1-desk">
          <img class="image_card" src="img/Professores/prof01.jpeg" alt="">
          <div class="info_video">
            <p id="title">Titulo</p>
            <p>Sub titulo</p>
            <p>45 min</p>
          </div>
        </div>

        <div onclick="trocar2()" class="card_video" id="video-1-desk"
          data-src="media/HTML 5 - Videos e IFrames em HTML (Video 09).mp4">
          <img class="image_card" src="img/Professores/prof02.jfif" alt="">
          <div class="info_video">
            <p id="title">Titulo</p>
            <p>Sub titulo</p>
            <p>45 min</p>
          </div>
        </div>

        <div onclick="trocar3()" class="card_video" id="video-1-desk"
          data-src="media/HTML 5 - Videos e IFrames em HTML (Video 09).mp4">
          <img class="image_card" src="img/Professores/prof03.jfif" alt="">
          <div class="info_video">
            <p id="title">Titulo</p>
            <p>Sub titulo</p>
            <p>45 min</p>
          </div>
        </div>
      </div>


      <!--GALERIA-->
      <div class="galeria_video">
        <div onclick="trocar1()" class="card_video" id="video-1-desk"
          data-src="media/HTML 5 - Videos e IFrames em HTML (Video 09).mp4">
          <img class="image_card" src="img/Professores/prof01.jpeg" alt="">
          <div class="info_video">
            <p id="title">Titulo</p>
            <p>Sub titulo</p>
            <p>45 min</p>
          </div>
        </div>

        <div onclick="trocar2()" class="card_video" id="video-2-desk"
          data-src="media/HTML 5 - Videos e IFrames em HTML (Video 09).mp4">
          <img class="image_card" src="img/Professores/prof02.jfif" alt="">
          <div class="info_video">
            <p>Titulo</p>
            <p>Sub titulo</p>
            <p>45 min</p>
          </div>
        </div>

        <div onclick="trocar3()" class="card_video" id="video-3-desk"
          data-src="media/HTML 5 - Videos e IFrames em HTML (Video 09).mp4">
          <img class="image_card" src="img/Professores/prof03.jfif" alt="">
          <div class="info_video">
            <p>Titulo</p>
            <p>Sub titulo</p>
            <p>45 min</p>
          </div>
        </div>

        <div class="card_video" id="video-4-desk" data-src="media/HTML 5 - Videos e IFrames em HTML (Video 09).mp4">
          <img class="image_card" src="img/Professores/prof04.jpg" alt="">
          <div class="info_video">
            <p>Titulo</p>
            <p>Sub titulo</p>
            <p>45 min</p>
          </div>
        </div>

        <div onclick="trocar2()" class="card_video" id="video-2-desk"
          data-src="media/HTML 5 - Videos e IFrames em HTML (Video 09).mp4">
          <img class="image_card" src="img/Professores/prof02.jfif" alt="">
          <div class="info_video">
            <p>Titulo</p>
            <p>Sub titulo</p>
            <p>45 min</p>
          </div>
        </div>

        <div onclick="trocar3()" class="card_video" id="video-3-desk"
          data-src="media/HTML 5 - Videos e IFrames em HTML (Video 09).mp4">
          <img class="image_card" src="img/Professores/prof03.jfif" alt="">
          <div class="info_video">
            <p>Titulo</p>
            <p>Sub titulo</p>
            <p>45 min</p>
          </div>
        </div>

        <div class="card_video" id="video-4-desk" data-src="media/HTML 5 - Videos e IFrames em HTML (Video 09).mp4">
          <img class="image_card" src="img/Professores/prof04.jpg" alt="">
          <div class="info_video">
            <p>Titulo</p>
            <p>Sub titulo</p>
            <p>45 min</p>
          </div>
        </div>
      </div>
  </section>

  <!--PLANOS-->
  <section id="title_plano" class="section_planos">
    <h1>Planos</h1>
    <main class="cards">
      <section class="card_plano mensal">
        <h2>R$39,90</h2>
        <h3>Plano Mensal</h3>
        <span>Aqui a cobrança é feita mensalmente. Caso não queira mais assinar o
          LojaON, você pode cancelar a qualquer momento e não receberá novas cobranças.
          Além disso, você também pode solicitar o reembolso em até 7 dias após o
          pagamento mensal</span>
        <button>Assinar</button>
      </section>

      <section class="card_plano anual">
        <h2>R$478,80</h2>
        <h3>Plano Anual</h3>
        <span>Aqui a cobrança é feita anualmente no valor total de R$
          478,80 reais à vista ou em 12 vezes sem juros e você tem 7 dias para solicitar o reembolso.</span>
        <button>Assinar</button>
      </section>
    </main>
  </section>

  <!--ALUNOS-->
  <div id="alunos" class="slide-container swiper">
    <h1>Nossos alunos</h1>
    <div class="slide-content">
      <div class="card-wrapper swiper-wrapper">
        <div class="card swiper-slide">
          <div class="image-content">
            <span class="overlay"></span>

            <div class="card-image">
              <img src="img/alunos/al01.jpg" alt="" class="card-img">
            </div>
          </div>

          <div class="card-content">
            <h2 class="name">David Dell</h2>
            <p class="description">The lorem text the section that contains header with having open functionality. Lorem
              dolor sit amet consectetur adipisicing elit.</p>
          </div>
        </div>
        <div class="card swiper-slide">
          <div class="image-content">
            <span class="overlay"></span>

            <div class="card-image">
              <img src="img/alunos/al02.jpg" alt="" class="card-img">
            </div>
          </div>

          <div class="card-content">
            <h2 class="name">David Dell</h2>
            <p class="description">The lorem text the section that contains header with having open functionality. Lorem
              dolor sit amet consectetur adipisicing elit.</p>
          </div>
        </div>
        <div class="card swiper-slide">
          <div class="image-content">
            <span class="overlay"></span>

            <div class="card-image">
              <img src="img/alunos/al03.jpg" alt="" class="card-img">
            </div>
          </div>

          <div class="card-content">
            <h2 class="name">David Dell</h2>
            <p class="description">The lorem text the section that contains header with having open functionality. Lorem
              dolor sit amet consectetur adipisicing elit.</p>
          </div>
        </div>
        <div class="card swiper-slide">
          <div class="image-content">
            <span class="overlay"></span>

            <div class="card-image">
              <img src="img/alunos/al04.jpg" alt="" class="card-img">
            </div>
          </div>

          <div class="card-content">
            <h2 class="name">David Dell</h2>
            <p class="description">The lorem text the section that contains header with having open functionality. Lorem
              dolor sit amet consectetur adipisicing elit.</p>

          </div>
        </div>
        <div class="card swiper-slide">
          <div class="image-content">
            <span class="overlay"></span>

            <div class="card-image">
              <img src="img/alunos/al01.jpg" alt="" class="card-img">
            </div>
          </div>

          <div class="card-content">
            <h2 class="name">David Dell</h2>
            <p class="description">The lorem text the section that contains header with having open functionality. Lorem
              dolor sit amet consectetur adipisicing elit.</p>

          </div>
        </div>
        <div class="card swiper-slide">
          <div class="image-content">
            <span class="overlay"></span>

            <div class="card-image">
              <img src="img/alunos/al02.jpg" alt="" class="card-img">
            </div>
          </div>

          <div class="card-content">
            <h2 class="name">David Dell</h2>
            <p class="description">The lorem text the section that contains header with having open functionality. Lorem
              dolor sit amet consectetur adipisicing elit.</p>


          </div>
        </div>
        <div class="card swiper-slide">
          <div class="image-content">
            <span class="overlay"></span>

            <div class="card-image">
              <img src="img/alunos/al03.jpg" alt="" class="card-img">
            </div>
          </div>

          <div class="card-content">
            <h2 class="name">David Dell</h2>
            <p class="description">The lorem text the section that contains header with having open functionality. Lorem
              dolor sit amet consectetur adipisicing elit.</p>


          </div>
        </div>
        <div class="card swiper-slide">
          <div class="image-content">
            <span class="overlay"></span>

            <div class="card-image">
              <img src="img/alunos/al04.jpg" alt="" class="card-img">
            </div>
          </div>

          <div class="card-content">
            <h2 class="name">David Dell</h2>
            <p class="description">The lorem text the section that contains header with having open functionality. Lorem
              dolor sit amet consectetur adipisicing elit.</p>


          </div>
        </div>
        <div class="card swiper-slide">
          <div class="image-content">
            <span class="overlay"></span>

            <div class="card-image">
              <img src="img/alunos/al01.jpg" alt="" class="card-img">
            </div>
          </div>

          <div class="card-content">
            <h2 class="name">David Dell</h2>
            <p class="description">The lorem text the section that contains header with having open functionality. Lorem
              dolor sit amet consectetur adipisicing elit.</p>


          </div>
        </div>
      </div>
    </div>

    <div class="swiper-button-next swiper-navBtn"></div>
    <div class="swiper-button-prev swiper-navBtn"></div>
    <div class="swiper-pagination"></div>
  </div>


  <!--FAQ-->
  <section id="FAQ" class="section_faq">
    <h2 class="title_faq">Perguntas Frequentes</h2>

    <div class="faq">
      <div class="pergunta">
        <h3>What is Lorem Ipsum?</h3>

        <svg width="15" height="10" viewbox="0 0 41 25">
          <path d="M3 3L21 21L39 3" stroke="white" stroke-width="7" stroke-linecap="round" />
        </svg>
      </div>
      <div class="resposta">
        <p>
          Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
          industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
          scrambled it to make a type specimen book.
        </p>
      </div>
    </div>


    <div class="faq">
      <div class="pergunta">
        <h3>Why do we use it?</h3>

        <svg width="15" height="10" viewbox="0 0 41 25">
          <path d="M3 3L21 21L39 3" stroke="white" stroke-width="7" stroke-linecap="round" />
        </svg>
      </div>
      <div class="resposta">
        <p>
          Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
          industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
          scrambled it to make a type specimen book.
        </p>
      </div>
    </div>


    <div class="faq">
      <div class="pergunta">
        <h3>Where can I get some?</h3>

        <svg width="15" height="10" viewbox="0 0 41 25">
          <path d="M3 3L21 21L39 3" stroke="white" stroke-width="7" stroke-linecap="round" />
        </svg>
      </div>
      <div class="resposta">
        <p>
          Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
          industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
          scrambled it to make a type specimen book.
        </p>
      </div>
    </div>
  </section>


  <!--QUEM É GEISA?--> 

  <section class="quem_geisa">
    <div class="container_geisa">
      <div class="texto_geisa">
        <h1>Geisa Paiva</h1>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
          industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
          scrambled it to make a type specimen book.</p>
      </div>
      <div class="foto_geisa">
        <img src="img/fotos/GEISA-GGeisa-600x600.jpg" alt="Imagem da Geisa dentro do G">
      </div>
    </div>
  </section>

  <!--FOOTER-->
  
  <footer class="footer">
    <div class="container_footer">
      <div class="row">
        <div class="footer_col">
          <h4>LojaOn</h4>
          <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="#comofunc">Como funciona?</a></li>
            <li><a href="#title_plano">Planos</a></li>
          </ul>
        </div>

        <div class="footer_col">
          <h4>Ajuda</h4>
          <ul>
            <li><a href="#FAQ">FAQ</a></li>
            
          </ul>
        </div>

        <div class="footer_col">
          <h4>Siga-nos</h4>
          <div class="social-links">
            <a href=""><i class="fa-brands fa-instagram"></i></a>
            <a href=""><i class="fa-brands fa-facebook"></i></a>
            <a href=""><i class="fa-brands fa-twitter"></i></a>
          </div>
        </div>


      </div>
    </div>

  </footer>

  <!--=====SCRIPTS======-->
  <script src="js/menu.js"></script>
  <script src="js/main.js"></script>
  <script src="js/leiamais.js"></script>
  <script src="js/faq.js"></script>
  <script src="js/video-selector.js"></script>


  <!--=====SLICK SCRIPT====-->
  <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

  <!-- Swiper JS -->
  <!--Uncomment this line-->
  <script src="js/swiper-bundle.min.js"></script>
  <!-- JavaScript -->
  <!--Uncomment this line-->
  <script src="js/cardslide.js"></script>
</body>

</html>