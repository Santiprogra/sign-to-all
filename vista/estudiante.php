<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Juego de preguntas</title>
  <link rel="stylesheet" href="vista/css/style.css">
</head>

<body>

  <?php



  ?>
  <style>
    * {
      transition: all 0.3s;
    }

    body {
      background-image: url("http://www.eltiempo.com/files/article_multimedia/uploads/2017/11/17/5a0f0cda3f64f.jpeg");
      background-size: 100%;
      padding: 0;
      margin: 0;
      text-align: center;
      font-family: 'Times New Roman', Times, serif;
      font-size: 120%;
    }

    .contenedor {
      width: 98vw;
      display: inline-flex;
      flex-direction: column;
      align-items: center;
      margin: 10px;
    }

    .preguntas {
      width: 98vw;
      display: inline-flex;
      flex-direction: over;
      justify-content: center;
      align-items: center;
    }

    .encabezado {
      position: relative;
      background: rgb(227, 159, 31);
      min-width: 300px;
      width: 70%;
      max-width: 850px;
      padding: 10px;
      font-size: 40px;
    }

    .categoria {
      opacity: 0.3;
      text-align: left;
    }

    .pregunta {
      padding: 30px;
    }

    .video {
      height: 200%;
      width: 0px;
    }

    .btn {
      background: rgb(227, 159, 31);
      position: relative;
      width: 60%;
      height: 100%;
      max-width: 800px;
      padding: 10px;
      margin: 5px;
      cursor: pointer;
      object-fit: cover;
      font-size: 60px;
    }

    .btn:hover {
      background: navajowhite;
      transform: scale(1.05);
    }

    .numero {
      position: absolute;
      opacity: 0.3;
      top: 10px;
      right: 10px;
    }

    .puntaje {
      padding: 10px;
      color: white;
    }
  </style>

  <div class="contenedor">
    <div class="puntaje" id="puntaje"></div>
    <div class="encabezado">
      <div class="categoria" id="categoria">
      </div>
      <div class="numero" id="numero"></div>
      <div class="pregunta" id="pregunta">
      </div>
      <iframe src="#" class="video" id="video"></iframe>
    </div>
    <div class="preguntas">
      <div class="btn" id="btn1" onclick="oprimir_btn(0)"></div>
      <div class="btn" id="btn2" onclick="oprimir_btn(1)"></div>
      <div class="btn" id="btn3" onclick="oprimir_btn(2)"></div>
      <div class="btn" id="btn4" onclick="oprimir_btn(3)"></div>
    </div>
    <div id="mostrarguardar">
      <form action="" method="post">
        <input type="hidden" id="resultadoInput" name="resultado">
        <input type="submit" class="btnguardar" name="guardado">
      </form>

    </div>

  </div>
  <script src="vista/index.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.3.0/dist/sweetalert2.all.min.js"></script>

</body>

</html>