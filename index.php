<?php $APP_URL = '/jogos/combo-memo'; ?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <title>Combo-Memo - Jogo da Memória</title>

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="icon" type="image/png" sizes="32x32" href="<?php $APP_URL ?>/components/card/coruja.png"/>

        <link rel="prefetch" href="<?= $APP_URL ?>/components/card/card.png" as="image" type="image/png" />
        <link rel="prefetch" href="<?= $APP_URL ?>/components/card/abelha.png" as="image" type="image/png" />
        <link rel="prefetch" href="<?= $APP_URL ?>/components/card/coruja.png" as="image" type="image/png" />
        <link rel="prefetch" href="<?= $APP_URL ?>/components/card/elefante.png" as="image" type="image/png" />
        <link rel="prefetch" href="<?= $APP_URL ?>/components/card/golfinho.png" as="image" type="image/png" />
        <link rel="prefetch" href="<?= $APP_URL ?>/components/card/koala.png" as="image" type="image/png" />
        <link rel="prefetch" href="<?= $APP_URL ?>/components/card/macaco.png" as="image" type="image/png" />
        <link rel="prefetch" href="<?= $APP_URL ?>/components/card/pinguim.png" as="image" type="image/png" />
        <link rel="prefetch" href="<?= $APP_URL ?>/components/card/tartaruga.png" as="image" type="image/png" />
        <link rel="prefetch" href="<?= $APP_URL ?>/components/platform/wood.jpg" as="image" type="image/png" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="../../styles-index.css">
    <link rel="stylesheet" href="../../sobre-mim.css"/>
  <style>
    body {
      font-family: sans-serif;
      margin: 0;
      background-image: url(/img/combo-memo.png);
      text-align: center;
      padding: 2rem;
      font-size: 1.4rem;
      font-family: 'Ubuntu';
      background-position: center;
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
    }
    header img {
      max-width: 200px;
    }
    h1 {
      font-size: 2rem;
      margin-top: 1rem;
      color: beige !important;
      -webkit-text-stroke: 1px #000;
      background-color: darkslategray;
    }
    p {
      font-size: 1.4rem;
      margin: 1rem auto;
      max-width: 600px;

      color: whitesmoke !important;
      -webkit-text-stroke: 1px #000;
    }
    .btn {
      display: inline-block;
      padding: 12px 24px;
      background-color: #4CAF50;
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
    }
  </style>
  <link rel="stylesheet" href="<?= $APP_URL ?>/components/card/card.css">
  <script src="<?= $APP_URL ?>/components/card/card.js"></script>
</head>
<body>
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

  <a href="/jogos/combo-memo/jogo.php" class="btn btn-warning">Jogar Agora</a>
  </main>
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
    </script>
</body>
</html>