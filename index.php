<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <title>Combo-Memo - Jogo da Memória</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../styles-index.css">
  <style>
    body {
      font-family: sans-serif;
      margin: 0;
      background-image: url(/img/combo-memo.png);
      text-align: center;
      padding: 2rem;
      font-size: 1.4rem;
      font-family: 'Montserrat';
    }
    header {
      background-color: darkslateblue;
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

      color: white !important;
      -webkit-text-stroke: 1px #000;
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
</head>
<body>
  <header class="p-3">
    <h1>Combo-Memo</h1>
    <img src="/jogos/combo-memo/components/card/coruja.png" alt="Logo Combo-Memo">
  </header>
    <main class="container m-auto p-2">
  <p class="m-auto">Teste sua memória e tente fazer o maior combo possível! Combine as cartas com o mínimo de erros para ganhar pontos extras.</p>

  <a href="/jogos/combo-memo/jogo.php" class="btn">Jogar Agora</a>
  </main>
  <?php include("../../noads-footer.php"); ?>
</body>
</html>