<?php $APP_URL = '/jogos/combo-memo'; ?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <?php include('../../g-tags.php'); ?>
  <meta charset="UTF-8">
  <title>Combo-Memo - Jogo da Memória | n2oliver</title>

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= $APP_URL ?>/components/card/coruja.png"/>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="../../styles-index.css">
    <link rel="stylesheet" href="../../sobre-mim.css"/>
    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
  <style>
    body {
      font-family: sans-serif;
      margin: 0;
      background-image: url(<?= $APP_URL ?>/bg-combo-memo.png);
      text-align: center;
      padding: 2rem;
      font-size: 1.4rem;
      font-family: 'Ubuntu';
      background-position: center;
      background-attachment: fixed;
    }
    header {
      background-image: url(<?= $APP_URL ?>/components/platform/wood.jpg);
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
      border-radius: 6px;
      margin: 1rem auto;
      padding: 14px;
      max-width: 600px;
      border: 1px solid white;
    }
    header img {
      max-width: 200px;
    }
    h1 {
      font-size: 2rem;
      margin-top: 1rem;
      color: yellow !important;
      -webkit-text-stroke: 2px orange;
      filter: drop-shadow(0 0 .2rem yellow);
      background-color: darkslategray;
    }
    p {
      font-size: 1.4rem;
      margin: 1rem auto;
      max-width: 600px;

      color: yellow !important;
      -webkit-text-stroke: .7px #000;
    }
    #jogar-agora {
      display: inline-block;
      padding: 12px 24px;
      background-color: #f30012;
      color: white;
      border-radius: 6px;
      text-decoration: none;
      font-size: 1rem;
    }
    footer {
      margin-top: 3rem;
      font-size: 0.9rem;
      max-width: 600px;
    }
    .container {
        background-color: darkslategrey;
        width: fit-content;
        border: 1px solid white;
        margin-bottom: 20px !important;
    }
  </style>
  <link rel="stylesheet" href="<?= $APP_URL ?>/components/card/card.css">
  <script src="<?= $APP_URL ?>/components/card/card.js"></script>
  
  <script defer
        data-site="e5e969e1-3c42-400f-ab17-83f62c295b9a"
        src="https://cdn.megapush.com.br/MegaPush.js">
    </script>
<script data-cfasync="false" src="/popads-monetization.js"></script>
  <script src="/gtag_dispatcher.js"></script>
  <script type="text/javascript" data-cfasync="false" src="/js/abrir-janela.js"></script>
  <!-- Hotjar Tracking Code for n2oliver.com -->
<script>
    (function(h,o,t,j,a,r){
        h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
        h._hjSettings={hjid:6543030,hjsv:6};
        a=o.getElementsByTagName('head')[0];
        r=o.createElement('script');r.async=1;
        r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
        a.appendChild(r);
    })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
</script>
</head>
<body>
<?php include("../../gtagmanager.php"); ?>
    <?php include('../../navbar.php'); ?>
    <script>
      const nav = document.querySelector('nav')
      nav.classList.add('col-md-8');
      nav.classList.add('m-auto');
      nav.classList.add('px-2');
      nav.style.fontSize = '12px';
    </script>
    <script>
      let imageIndex = 0;
    </script>
  <header class="p-3 platform">
    <h1>Combo-Memo</h1>
    <div class="d-flex justify-content-center">
      <img onclick="virar(event)" src="/jogos/combo-memo/components/card/card.png" alt="Combo-Memo" class="card animar sem-fundo" id="card"/>
      <img onclick="virar(event)" src="/jogos/combo-memo/components/card/card.png" alt="Combo-Memo" class="card animar sem-fundo" id="card"/>
    </div>
  </header>
    <main class="container m-auto p-2">
  <p class="m-auto">Teste sua memória e tente fazer o maior combo possível! Combine as cartas com o mínimo de erros para ganhar pontos extras.</p>

  <a href="#" id="jogar-agora" class="btn btn-warning">Jogar Agora</a>
  </main>
  <br>
  <?php include("../../footer.php"); ?>
    <script>
      const footer = document.querySelector('footer')
      footer.classList.add('col-md-8');
      footer.classList.add('m-auto');
      footer.classList.add('px-0');
    </script>
    <script>
      const virar = (event) => {
        event.target.onclick = (event) => {};
        event.target.classList.remove('inverter');
        event.target.classList.add('inverter');
        setTimeout(()=>{
          event.target.classList.remove('sem-fundo');
          event.target.src=`<?=$APP_URL?>/components/card/${background[imageIndex]}.png`;
          imageIndex++;
          if(imageIndex > 7) imageIndex = 0;
        }, 300);
        setTimeout(()=>{
          event.target.classList.remove('inverter');
          setTimeout(()=>{
            event.target.classList.add('sem-fundo');
            event.target.src='<?=$APP_URL?>/components/card/card.png';
            event.target.onclick = (target)=>virar(target);
          }, 300);
        }, 3000)
      }
      document.addEventListener('DOMContentLoaded', ()=>{
        gtag("event", "qualify_lead", {
          currency: "USD",
          value: 0.0004
        });
        $('#jogar-agora').click(()=>{
            abrirJanela('/jogos/combo-memo/jogo.php', 'https://laxativethem.com/f8gjmtsq8?key=9d80849d2d1385a6c616fd86b50dcf7f');
            gtag("event", "close_convert_lead", {
              currency: "USD",
              value: 0.0004
            });
        });
      });
    </script>
</body>
  
    <?php include("../../aads.php"); ?>
</html>