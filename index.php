<?php
$APP_URL = "/jogos/combo-memo/";
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Combo-Memo</title>
        <meta charset="UTF-8"/>
        
        <link rel="preload" href="<?= $APP_URL ?>components/card/card.png" as="image" type="image/png" />
        <link rel="preload" href="<?= $APP_URL ?>components/card/abelha.png" as="image" type="image/png" />
        <link rel="preload" href="<?= $APP_URL ?>components/card/coruja.png" as="image" type="image/png" />
        <link rel="preload" href="<?= $APP_URL ?>components/card/elefante.png" as="image" type="image/png" />
        <link rel="preload" href="<?= $APP_URL ?>components/card/golfinho.png" as="image" type="image/png" />
        <link rel="preload" href="<?= $APP_URL ?>components/card/koala.png" as="image" type="image/png" />
        <link rel="preload" href="<?= $APP_URL ?>components/card/macaco.png" as="image" type="image/png" />
        <link rel="preload" href="<?= $APP_URL ?>components/card/pinguim.png" as="image" type="image/png" />
        <link rel="preload" href="<?= $APP_URL ?>components/card/tartaruga.png" as="image" type="image/png" />
        
        
        <link rel="stylesheet" href="<?= $APP_URL ?>components/platform/platform.css" />
        <script src="<?= $APP_URL ?>components/platform/platform.js"></script>
        <script src="<?= $APP_URL ?>components/card/card.js"></script>
        <link rel="stylesheet" href="<?= $APP_URL ?>components/card/card.css" />
        <script src="<?= $APP_URL ?>components/great/congratulations.js"></script>
        <link rel="stylesheet" href="<?= $APP_URL ?>components/great/congratulations.css" />
        <script>
            APP_URL = "<?= $APP_URL ?>";
        </script>
    </head>
    <body>
        <header class="menu">
            <h1>Combo-Memo</h1>
            <div class="botoes">
                <button id="btnRestart">Reiniciar</button>
            </div>
            <h3>Erros: <span id="erros">0</span></h3>
        </header>
        <div class="platform">
            <div class="card animar sem-fundo"></div>
            <div class="card animar sem-fundo"></div>
            <div class="card animar sem-fundo"></div>
            <div class="card animar sem-fundo"></div>
            <div class="card animar sem-fundo"></div>
            <div class="card animar sem-fundo"></div>
            <div class="card animar sem-fundo"></div>
            <div class="card animar sem-fundo"></div>
            <div class="card animar sem-fundo"></div>
            <div class="card animar sem-fundo"></div>
            <div class="card animar sem-fundo"></div>
            <div class="card animar sem-fundo"></div>
            <div class="card animar sem-fundo"></div>
            <div class="card animar sem-fundo"></div>
            <div class="card animar sem-fundo"></div>
            <div class="card animar sem-fundo"></div>
        </div>
    </body>
</html>