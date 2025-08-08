<?php
$APP_URL = "/jogos/combo-memo/";
?>
<!DOCTYPE html>
<html>
    <head>
        <?php include('../../g-tags.php'); ?>

        <link rel="icon" type="image/x-icon" href="<?= $APP_URL ?>components/card/coruja.png">
        <title>Combo-Memo | n2oliver</title>
        <meta charset="UTF-8"/>
        <meta name="referrer" content="no-referrer-when-downgrade" />
        <link rel="prefetch" href="<?= $APP_URL ?>components/card/card.png" as="image" type="image/png" />
        <link rel="prefetch" href="<?= $APP_URL ?>components/card/abelha.png" as="image" type="image/png" />
        <link rel="prefetch" href="<?= $APP_URL ?>components/card/coruja.png" as="image" type="image/png" />
        <link rel="prefetch" href="<?= $APP_URL ?>components/card/elefante.png" as="image" type="image/png" />
        <link rel="prefetch" href="<?= $APP_URL ?>components/card/golfinho.png" as="image" type="image/png" />
        <link rel="prefetch" href="<?= $APP_URL ?>components/card/koala.png" as="image" type="image/png" />
        <link rel="prefetch" href="<?= $APP_URL ?>components/card/macaco.png" as="image" type="image/png" />
        <link rel="prefetch" href="<?= $APP_URL ?>components/card/pinguim.png" as="image" type="image/png" />
        <link rel="prefetch" href="<?= $APP_URL ?>components/card/tartaruga.png" as="image" type="image/png" />
        <link rel="prefetch" href="<?= $APP_URL ?>components/platform/wood.jpg" as="image" type="image/png" />
        
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="/styles-index.css" />
        <link rel="stylesheet" href="../../sobre-mim.css"/>
        <link rel="stylesheet" href="<?= $APP_URL ?>components/platform/platform.css" />
        <script src="<?= $APP_URL ?>components/platform/platform.js"></script>
        <link rel="stylesheet" href="<?= $APP_URL ?>components/card/card.css" />
        <script src="<?= $APP_URL ?>components/card/card.js"></script>
        <script src="<?= $APP_URL ?>components/great/congratulations.js"></script>
        <link rel="stylesheet" href="<?= $APP_URL ?>components/great/congratulations.css" />
        

        <script>
            APP_URL = "<?= $APP_URL ?>";
        </script>
        <style>
            body {
                background-image: linear-gradient(black, darkslategrey, black);
                background-size: cover;
            }
            .score-label {
                color: lightgreen;
            }
            .score-value {
                color: white;
            }
            .error-value {
                color: pink;
            }
        </style>
    </head>
    <body>
        <header class="menu">
            <div class="d-flex row align-content-center">
                <h1>COMBO-MEMO</h1>
                <div class="botoes">
                    <button id="btnRestart">Reiniciar</button>
                </div>
            </div>
            <h3>
                <span class="score-label">Pontuação máxima:</span> <span id="high-score" class="score-value">0</span>% de acertos | 
                <span class="score-label">Acerto:</span> <span id="acerto" class="score-value">0</span>% | 
                <span class="error-value">Erros:</span> <span id="erros" class="error-value">0</span>
            </h3>
        </header>
        <div class="mesa">
            <div class="col-sm-1" style="text-align: center">
                <script type="text/javascript">
                    atOptions = {
                        'key' : 'b5463c03cd36f2b207d3e311906ba716',
                        'format' : 'iframe',
                        'height' : 250,
                        'width' : 300,
                        'params' : {}
                    };
                </script>
                <script type="text/javascript" src="//www.highperformanceformat.com/b5463c03cd36f2b207d3e311906ba716/invoke.js"></script>

                <script type="text/javascript">
                    atOptions = {
                        'key' : 'b5463c03cd36f2b207d3e311906ba716',
                        'format' : 'iframe',
                        'height' : 250,
                        'width' : 300,
                        'params' : {}
                    };
                </script>
                <script type="text/javascript" src="//www.highperformanceformat.com/b5463c03cd36f2b207d3e311906ba716/invoke.js"></script>

                <script type="text/javascript">
                    atOptions = {
                        'key' : 'b5463c03cd36f2b207d3e311906ba716',
                        'format' : 'iframe',
                        'height' : 250,
                        'width' : 300,
                        'params' : {}
                    };
                </script>
                <script type="text/javascript" src="//www.highperformanceformat.com/b5463c03cd36f2b207d3e311906ba716/invoke.js"></script>
            </div>
            <div class="platform col-sm-10">
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
            <div class="col-sm-1" style="text-align: center">
                <script type="text/javascript">
                    atOptions = {
                        'key' : 'b5463c03cd36f2b207d3e311906ba716',
                        'format' : 'iframe',
                        'height' : 250,
                        'width' : 300,
                        'params' : {}
                    };
                </script>
                <script type="text/javascript" src="//www.highperformanceformat.com/b5463c03cd36f2b207d3e311906ba716/invoke.js"></script>

                <script type="text/javascript">
                    atOptions = {
                        'key' : 'b5463c03cd36f2b207d3e311906ba716',
                        'format' : 'iframe',
                        'height' : 250,
                        'width' : 300,
                        'params' : {}
                    };
                </script>
                <script type="text/javascript" src="//www.highperformanceformat.com/b5463c03cd36f2b207d3e311906ba716/invoke.js"></script>

                <script type="text/javascript">
                    atOptions = {
                        'key' : 'b5463c03cd36f2b207d3e311906ba716',
                        'format' : 'iframe',
                        'height' : 250,
                        'width' : 300,
                        'params' : {}
                    };
                </script>
                <script type="text/javascript" src="//www.highperformanceformat.com/b5463c03cd36f2b207d3e311906ba716/invoke.js"></script>
            </div>
            
        </div>
        <?php
        include("../../footer.php");
        ?>
    </body>
</html>