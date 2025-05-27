<?php
$APP_URL = "/jogos/combo-memo/";
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Combo-Memo</title>
        <meta charset="UTF-8"/>
        <meta name="9fa1ddb83f9ca206d8f9a68ca7577612ed6a490b" content="9fa1ddb83f9ca206d8f9a68ca7577612ed6a490b" />
        <meta name="referrer" content="no-referrer-when-downgrade" />
        
        <link rel="preload" href="<?= $APP_URL ?>components/card/card.png" as="image" type="image/png" />
        <link rel="preload" href="<?= $APP_URL ?>components/card/abelha.png" as="image" type="image/png" />
        <link rel="preload" href="<?= $APP_URL ?>components/card/coruja.png" as="image" type="image/png" />
        <link rel="preload" href="<?= $APP_URL ?>components/card/elefante.png" as="image" type="image/png" />
        <link rel="preload" href="<?= $APP_URL ?>components/card/golfinho.png" as="image" type="image/png" />
        <link rel="preload" href="<?= $APP_URL ?>components/card/koala.png" as="image" type="image/png" />
        <link rel="preload" href="<?= $APP_URL ?>components/card/macaco.png" as="image" type="image/png" />
        <link rel="preload" href="<?= $APP_URL ?>components/card/pinguim.png" as="image" type="image/png" />
        <link rel="preload" href="<?= $APP_URL ?>components/card/tartaruga.png" as="image" type="image/png" />
        <link rel="preload" href="<?= $APP_URL ?>components/platform/wood.jpg" as="image" type="image/png" />
                
        <link rel="stylesheet" href="<?= $APP_URL ?>components/platform/platform.css" />
        <script src="<?= $APP_URL ?>components/platform/platform.js"></script>
        <link rel="stylesheet" href="<?= $APP_URL ?>components/card/card.css" />
        <script src="<?= $APP_URL ?>components/card/card.js"></script>
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
            <h3><span style="color: lightgreen">Pontuação máxima:</span> <span id="high-score">0</span>% de acertos | <span style="color: lightgreen">Acerto:</span> <span id="acerto">0</span>% <span style="color: pink"> | Erros:</span> <span id="erros">0</span></h3>
        </header>
        <div style="display: flex; justify-content: space-between">
            <div style="width: 25vw">
                <!-- <a href="https://hilltopads.com/pt?ref=291186"><img src="//static.hilltopads.com/other/banners/pub/huge_income/600x600.gif?v=1748010101" style="width: 25vw"></a> -->
            </div>
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
            <div style="width: 25vw">
                <!-- <a href="https://hilltopads.com/pt?ref=291186"><img src="//static.hilltopads.com/other/banners/pub/huge_income/600x600.gif?v=1748010101" style="width: 25vw"></a> -->
            </div>
        </div>
    </body>
</html>