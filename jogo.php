<?php
$APP_URL = "/jogos/combo-memo/";
?>
<!DOCTYPE html>
<html lang="pt-BR">
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
        
        <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
        <?php include('../../css/font-awesome/all.min.php') ?>
        <?php include('../../css/bootstrap/bootstrap.min.php'); ?>
        <link rel="stylesheet" href="../../styles-index.css" />
        <link rel="stylesheet" href="../../sobre-mim.css"/>
        <link rel="stylesheet" href="<?= $APP_URL ?>components/platform/platform.css" />
        <script src="/js/abrir-janela.js"></script>
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
        <div id="frame" style="width: 100%;margin: auto;position: relative; z-index: 99998;">
          <iframe data-aa='2412101' src='//acceptable.a-ads.com/2412101/?size=Adaptive'
                            style='border:0; padding:0; width:70%; height:auto; overflow:hidden;display: block;margin: auto'></iframe>
          <div style="width: 70%;margin:auto;position: absolute;left: 0;right: 0">
            <a target="_blank" style="display:inline-block;font-size: 13px;color: #263238;padding: 4px 10px;background: #F8F8F9;text-decoration: none; border-radius: 0 0 4px 4px;" id="frame-link" href="https://aads.com/campaigns/new/?source_id=2412101&source_type=ad_unit&partner=2412101">Advertise here</a>
          </div>
        </div>
        <header class="menu">
            <div class="d-flex row align-content-center">
                <h1>COMBO-MEMO</h1>
            </div>
            <h3>
                <span class="score-label">Pontuação máxima:</span> <span id="high-score" class="score-value">0</span>% de acertos | 
                <span class="score-label">Acerto:</span> <span id="acerto" class="score-value">0</span>% | 
                <span class="error-value">Erros:</span> <span id="erros" class="error-value">0</span>
            </h3>
            <div class="botoes">
                <button id="btnRestart">Reiniciar</button>
            </div>
        </header>
        <div class="mesa">
            <div class="platform col-sm-10 m-auto" style="padding-top: 32px;">
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
        </div>
        <?php
        include("../../footer.php");
        ?>
    </body>
</html>