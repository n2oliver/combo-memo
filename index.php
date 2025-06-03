<?php
$APP_URL = "/jogos/combo-memo/";
?>
<!DOCTYPE html>
<html>
    <head>

        <link rel="icon" type="image/x-icon" href="<?= $APP_URL ?>components/card/coruja.png">
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
        
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&amp;display=swap" rel="stylesheet">
        <link rel="stylesheet" href="/styles-index.css" />
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
        <div class="mesa">
            <div class="col-sm-12">
                <script type="text/javascript">
                    atOptions = {
                        'key' : '7c9fa1bf142abd7f0c07dc45f57e4645',
                        'format' : 'iframe',
                        'height' : 250,
                        'width' : 300,
                        'params' : {}
                    };
                </script>
                <script type="text/javascript" src="//www.highperformanceformat.com/7c9fa1bf142abd7f0c07dc45f57e4645/invoke.js"></script>

                <script type="text/javascript">
                    atOptions = {
                        'key' : '7c9fa1bf142abd7f0c07dc45f57e4645',
                        'format' : 'iframe',
                        'height' : 250,
                        'width' : 300,
                        'params' : {}
                    };
                </script>
                <script type="text/javascript" src="//www.highperformanceformat.com/7c9fa1bf142abd7f0c07dc45f57e4645/invoke.js"></script>

                <script type="text/javascript">
                    atOptions = {
                        'key' : '7c9fa1bf142abd7f0c07dc45f57e4645',
                        'format' : 'iframe',
                        'height' : 250,
                        'width' : 300,
                        'params' : {}
                    };
                </script>
                <script type="text/javascript" src="//www.highperformanceformat.com/7c9fa1bf142abd7f0c07dc45f57e4645/invoke.js"></script>
            </div>
            <div class="platform col-sm-12">
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
            <div class="col-sm-12">
                <script type="text/javascript">
                    atOptions = {
                        'key' : '7c9fa1bf142abd7f0c07dc45f57e4645',
                        'format' : 'iframe',
                        'height' : 250,
                        'width' : 300,
                        'params' : {}
                    };
                </script>
                <script type="text/javascript" src="//www.highperformanceformat.com/7c9fa1bf142abd7f0c07dc45f57e4645/invoke.js"></script>

                <script type="text/javascript">
                    atOptions = {
                        'key' : '7c9fa1bf142abd7f0c07dc45f57e4645',
                        'format' : 'iframe',
                        'height' : 250,
                        'width' : 300,
                        'params' : {}
                    };
                </script>
                <script type="text/javascript" src="//www.highperformanceformat.com/7c9fa1bf142abd7f0c07dc45f57e4645/invoke.js"></script>

                <script type="text/javascript">
                    atOptions = {
                        'key' : '7c9fa1bf142abd7f0c07dc45f57e4645',
                        'format' : 'iframe',
                        'height' : 250,
                        'width' : 300,
                        'params' : {}
                    };
                </script>
                <script type="text/javascript" src="//www.highperformanceformat.com/7c9fa1bf142abd7f0c07dc45f57e4645/invoke.js"></script>
            </div>
        </div>
        <?php
        include("../../footer.php");
        ?>
    </body>
</html>