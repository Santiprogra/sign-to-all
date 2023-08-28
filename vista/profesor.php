<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="vista/css/profesor.css">
  <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
  <title>Document</title>
</head>

<body style="background: orange;">
  <section>
    <div class="exit" >
      <form action="" method="post">

        <input type="submit" class="atras" name="exit" value="Cerrar Sesión">

      </form>
    </div>



    <div class="div1">
      <h1>
        Instructor
      </h1>
      <h3>
        <?php

        echo $nombre . " " . $apellido;

        ?>
      </h3>

    </div>
    <div class="div2">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">Documento</th>
            <th scope="col">nombre</th>
            <th scope="col">apellido</th>
            <th scope="col">nota</th>
          </tr>
        </thead>
        <?php

        foreach ($estudiante as $datos) {

          echo "<tbody>";
          echo "<tr>";
          echo "<th scope='row'> $datos[0]</th>";
          echo "<td>$datos[1]</td>";
          echo "<td>$datos[2]</td>";
          echo "<td>$datos[4]/3</td>";
          echo "</tr>";
          echo "</tbody>";
        }

        ?>

      </table>
    </div>
  </section>
</body>

</html>